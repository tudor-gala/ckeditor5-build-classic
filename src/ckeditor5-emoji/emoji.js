/**
 * @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

/**
 * @module emoji/specialcharacters
 */

import Plugin from '@ckeditor/ckeditor5-core/src/plugin';
import Typing from '@ckeditor/ckeditor5-typing/src/typing';
import { createDropdown } from '@ckeditor/ckeditor5-ui/src/dropdown/utils';
import CKEditorError from '@ckeditor/ckeditor5-utils/src/ckeditorerror';
import SpecialCharactersNavigationView from './specialcharactersnavigationview';
import CharacterGridView from './charactergridview';
import CharacterInfoView from './characterinfoview';

const ALL_SPECIAL_CHARACTERS_GROUP = 'All';

export default class Emoji extends Plugin {
	static get requires() {
		return [ Typing ];
	}

	static get pluginName() {
		return 'Emoji';
	}

	constructor( editor ) {
		super( editor );

		this._characters = new Map();
		this._groups = new Map();
	}

	init() {
		const editor = this.editor;
		const t = editor.t;

		const inputCommand = editor.commands.get( 'input' );

		// Add the `emoji` dropdown button to feature components.
		editor.ui.componentFactory.add('emoji', locale => {
			const dropdownView = createDropdown( locale );
			let dropdownPanelContent;

			dropdownView.buttonView.set( {
				label: 'Emoji',
				icon: '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path d="M12,0C5.4,0,0,5.4,0,12s5.4,12,12,12s12-5.4,12-12S18.6,0,12,0z M12,22C6.5,22,2,17.5,2,12S6.5,2,12,2s10,4.5,10,10   S17.5,22,12,22z"/><circle cx="8.5" cy="9.5" r="1.5"/><circle cx="15.5" cy="9.5" r="1.5"/><path d="M12,19c2.8,0,5.2-1.6,6.3-4H5.7C6.8,17.4,9.2,19,12,19z M16.4,16c-1.1,1.2-2.7,2-4.4,2s-3.3-0.8-4.4-2H16.4z"/></g></svg>',
				tooltip: true
			} );

			dropdownView.bind( 'isEnabled' ).to( inputCommand );

			// Insert a special character when a tile was clicked.
			dropdownView.on( 'execute', ( evt, data ) => {
				editor.execute( 'input', { text: data.character } );
				editor.editing.view.focus();
			} );

			dropdownView.on( 'change:isOpen', () => {
				if ( !dropdownPanelContent ) {
					dropdownPanelContent = this._createDropdownPanelContent( locale, dropdownView );

					dropdownView.panelView.children.add( dropdownPanelContent.navigationView );
					dropdownView.panelView.children.add( dropdownPanelContent.gridView );
					dropdownView.panelView.children.add( dropdownPanelContent.infoView );
				}

				dropdownPanelContent.infoView.set( {
					character: null,
					name: null
				} );
			} );

			return dropdownView;
		} );
	}

	/**
	 * Adds a collection of special characters to the specified group. The title of a special character must be unique.
	 *
	 * **Note:** The "All" category name is reserved by the plugin and cannot be used as a new name for a special
	 * characters category.
	 *
	 * @param {String} groupName
	 * @param {Array.<module:special-characters/specialcharacters~SpecialCharacterDefinition>} items
	 */
	addItems( groupName, items ) {
		if ( groupName === ALL_SPECIAL_CHARACTERS_GROUP ) {
			/**
			 * The name "All" for a special category group cannot be used because it is a special category that displays all
			 * available special characters.
			 *
			 * @error special-character-invalid-group-name
			 */
			throw new CKEditorError(
				`special-character-invalid-group-name: The name "${ ALL_SPECIAL_CHARACTERS_GROUP }" is reserved and cannot be used.`
			);
		}

		const group = this._getGroup( groupName );

		for ( const item of items ) {
			group.add( item.title );
			this._characters.set( item.title, item.character );
		}
	}

	/**
	 * Returns an iterator of special characters groups.
	 *
	 * @returns {Iterable.<String>}
	 */
	getGroups() {
		return this._groups.keys();
	}

	/**
	 * Returns a collection of special characters symbol names (titles).
	 *
	 * @param {String} groupName
	 * @returns {Set.<String>|undefined}
	 */
	getCharactersForGroup( groupName ) {
		if ( groupName === ALL_SPECIAL_CHARACTERS_GROUP ) {
			return new Set( this._characters.keys() );
		}

		return this._groups.get( groupName );
	}

	/**
	 * Returns the symbol of a special character for the specified name. If the special character could not be found, `undefined`
	 * is returned.
	 *
	 * @param {String} title The title of a special character.
	 * @returns {String|undefined}
	 */
	getCharacter( title ) {
		return this._characters.get( title );
	}

	/**
	 * Returns a group of special characters. If the group with the specified name does not exist, it will be created.
	 *
	 * @private
	 * @param {String} groupName The name of the group to create.
	 */
	_getGroup( groupName ) {
		if ( !this._groups.has( groupName ) ) {
			this._groups.set( groupName, new Set() );
		}

		return this._groups.get( groupName );
	}

	/**
	 * Updates the symbol grid depending on the currently selected character group.
	 *
	 * @private
	 * @param {String} currentGroupName
	 * @param {module:special-characters/ui/charactergridview~CharacterGridView} gridView
	 */
	_updateGrid( currentGroupName, gridView ) {
		// Updating the grid starts with removing all tiles belonging to the old group.
		gridView.tiles.clear();

		const characterTitles = this.getCharactersForGroup( currentGroupName );

		for ( const title of characterTitles ) {
			const character = this.getCharacter( title );

			gridView.tiles.add( gridView.createTile( character, title ) );
		}
	}

	/**
	 * Initializes the dropdown, used for lazy loading.
	 *
	 * @private
	 * @param {module:utils/locale~Locale} locale
	 * @param {module:ui/dropdown/dropdownview~DropdownView} dropdownView
	 * @returns {Object} Returns an object with `navigationView`, `gridView` and `infoView` properties, containing UI parts.
	 */
	_createDropdownPanelContent( locale, dropdownView ) {
		const specialCharsGroups = [ ...this.getGroups() ];

		// Add a special group that shows all available special characters.
		specialCharsGroups.unshift( ALL_SPECIAL_CHARACTERS_GROUP );

		const navigationView = new SpecialCharactersNavigationView( locale, specialCharsGroups );
		const gridView = new CharacterGridView( locale );
		const infoView = new CharacterInfoView( locale );

		gridView.delegate( 'execute' ).to( dropdownView );

		gridView.on( 'tileHover', ( evt, data ) => {
			infoView.set( data );
		} );

		// Update the grid of special characters when a user changed the character group.
		navigationView.on( 'execute', () => {
			this._updateGrid( navigationView.currentGroupName, gridView );
		} );

		// Set the initial content of the special characters grid.
		this._updateGrid( navigationView.currentGroupName, gridView );

		return { navigationView, gridView, infoView };
	}
}
