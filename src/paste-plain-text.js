import Plugin from '@ckeditor/ckeditor5-core/src/plugin';
import plainTextToHtml from '@ckeditor/ckeditor5-clipboard/src/utils/plaintexttohtml';

class PastePlainText extends Plugin {
    static get pluginName() {
        return 'PastePlainText'
    }

    init() {
        const editor = this.editor;

        // Logic responsible for converting HTML to plain text.
        const clipboardPlugin = editor.plugins.get( 'Clipboard' );
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

export default PastePlainText;
