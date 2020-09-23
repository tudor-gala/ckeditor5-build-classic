import Plugin from '@ckeditor/ckeditor5-core/src/plugin';
import Command from '@ckeditor/ckeditor5-core/src/command';
import ButtonView from '@ckeditor/ckeditor5-ui/src/button/buttonview';

import plainTextToHtml from '@ckeditor/ckeditor5-clipboard/src/utils/plaintexttohtml';

class PastePlainText extends Plugin {
    static get pluginName() {
        return 'PastePlainText'
    }

    static get requires() {
        return [ PastePlainTextUI, PastePlainTextCommand ]
    }

    init() {
        const editor = this.editor;

        editor.commands.add( 'pastePlainText', new PastePlainTextCommand( editor ) );

        // Logic responsible for converting HTML to plain text.
        const clipboardPlugin = editor.plugins.get( 'Clipboard' );
        const command = editor.commands.get( 'pastePlainText' );
        const editingView = editor.editing.view;

        editingView.document.on( 'clipboardInput', ( evt, data ) => {
            if ( editor.isReadOnly || !command.value ) {
                return;
            }

            const dataTransfer = data.dataTransfer;
            let content = plainTextToHtml( dataTransfer.getData( 'text/plain' ) );
            content = clipboardPlugin._htmlDataProcessor.toView( content );
            clipboardPlugin.fire( 'inputTransformation', { content, dataTransfer } );
            editingView.scrollToTheSelection();

            evt.stop();
        } );
    }
}

class PastePlainTextUI extends Plugin {
    init() {
        const editor = this.editor;

        editor.ui.componentFactory.add( 'pastePlainText', locale => {
            const view = new ButtonView( locale );
            const command = editor.commands.get( 'pastePlainText' );

            view.set( {
                label: 'Paste as plain text',
                withText: true,
                tooltip: true,
                isToggleable: true
            } );

            // Callback executed once the button is clicked.
            view.on( 'execute', () => {
                editor.execute( 'pastePlainText' );
            } );

            view.bind( 'isOn', 'isEnabled' ).to( command, 'value', 'isEnabled' );

            return view;
        } );
    }
}

class PastePlainTextCommand extends Command {
    refresh() {
        // Disable the command if the editor is in read-only mode.
        this.isEnabled = !this.editor.isReadOnly;
    }

    execute() {
        // Activate pasting plain text.
        this.value = !this.value;
    }
}

export default PastePlainText;
