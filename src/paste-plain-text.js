import Plugin from '@ckeditor/ckeditor5-core/src/plugin';
import plainTextToHtml from '@ckeditor/ckeditor5-clipboard/src/utils/plaintexttohtml';
import { parseHtml } from "@ckeditor/ckeditor5-paste-from-office/src/filters/parse";

class PastePlainText extends Plugin {
    static get pluginName() {
        return 'PastePlainText'
    }

    stripTags(str, allow) {
        const tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi;
        const blockLevel = ['address', 'article', 'aside', 'blockquote', 'canvas', 'dd', 'div', 'dl', 'dt', 'fieldset', 'figcaption', 'figure', 'footer', 'form', 'h4', 'h5', 'h6', 'header', 'hr', 'li', 'main', 'nav', 'noscript', 'ol', 'p', 'pre', 'section', 'table', 'tfoot', 'ul', 'video'];

        return str.replace(tags, ($0, $1) => {
            const tag = $1.toLowerCase();
            const replacement = blockLevel.includes(tag) ? '<br>' : '';

            return allow.indexOf(`<${tag}>`) > -1 ? $0 : replacement;
        });
    }

    init() {
        const editor = this.editor;

        // Logic responsible for converting HTML to plain text.
        const clipboardPlugin = editor.plugins.get( 'Clipboard' );
        const editingView = editor.editing.view;

        // editor.plugins.get( 'Clipboard' ).on(
        //     'inputTransformation',
        //     ( evt, data ) => {
        //         if ( data.isPastedAsPlainText ) {
        //             return;
        //         }
        //
        //         const { bodyString } = parseHtml( data.dataTransfer.getData( 'text/html' ), editor.editing.view.document.stylesProcessor );
        //
        //         data.content = this.stripTags(bodyString, '<b><i><ol><ul><li><h1><h2><h3>');
        //         data.isPastedAsPlainText = true;
        //     },
        //     { priority: 'normal' }
        // );


        editingView.document.on( 'clipboardInput', ( evt, data ) => {
            if ( editor.isReadOnly ) {
                return;
            }

            const dataTransfer = data.dataTransfer;
            const { bodyString } = parseHtml(dataTransfer.getData('text/html'), editor.editing.view.document.stylesProcessor);
            let content = this.stripTags(bodyString, '<b><i><ol><ul><li><h1><h2><h3>')

            content = clipboardPlugin._htmlDataProcessor.toView( content );
            clipboardPlugin.fire( 'inputTransformation', { content, dataTransfer } );
            editingView.scrollToTheSelection();

            evt.stop();
        } );
    }
}

export default PastePlainText;
