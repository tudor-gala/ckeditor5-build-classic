import Plugin from '@ckeditor/ckeditor5-core/src/plugin';
import { parseHtml } from "@ckeditor/ckeditor5-paste-from-office/src/filters/parse";

class StripPasteFormat extends Plugin {
    static get pluginName() {
        return 'StripPasteFormat'
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

    stripInvalidColors(str) {
        return str.replace(/color:\s*(?!(hsl\(0,\s*0%,\s*0%\)|hsl\(0,\s*0%,\s*30%\)|hsl\(0,\s*0%,\s*60%\)|hsl\(0,\s*0%,\s*90%\)|hsl\(0,\s*0%,\s*100%\)|hsl\(0,\s*75%,\s*60%\)|hsl\(30,\s*75%,\s*60%\)|hsl\(60,\s*75%,\s*60%\)|hsl\(90,\s*75%,\s*60%\)|hsl\(120,\s*75%,\s*60%\)|hsl\(150,\s*75%,\s*60%\)|hsl\(180,\s*75%,\s*60%\)|hsl\(210,\s*75%,\s*60%\)|hsl\(240,\s*75%,\s*60%\)|hsl\(270,\s*75%,\s*60%\)))([^;]*);/gi, '');
    }

    stripInlineStyles(str) {
        const matches = str.match(/style="[^"]*"/gi);

        if (!Array.isArray(matches)) {
            return str;
        }

        matches.forEach(i => {
            const inner = i.substr(7, i.length - 8).split(';');
            let color;

            inner.forEach(style => {
                if (style.trim().substr(0, 6).toLowerCase() === 'color:') {
                    color = style.trim();
                }
            });

            if (color) {
                str = str.replace(i, `style="${color}"`);
            } else {
                str = str.replace(i, '');
            }
        });

        return str;
    }

    init() {
        const editor = this.editor;
        const clipboardPlugin = editor.plugins.get( 'Clipboard' );
        const editingView = editor.editing.view;

        editingView.document.on( 'clipboardInput', ( evt, data ) => {
            if ( editor.isReadOnly ) {
                return;
            }

            const dataTransfer = data.dataTransfer;
            const { bodyString } = parseHtml(dataTransfer.getData('text/html'), editor.editing.view.document.stylesProcessor);
            let content = this.stripTags(bodyString, '<b><i><ol><ul><li><h1><h2><h3><hr><p><strong><input><span><a>')
            content = this.stripInvalidColors(content);
            content = this.stripInlineStyles(content);

// console.log('before', dataTransfer.getData('text/html'));
// console.log('after', content);
            content = clipboardPlugin._htmlDataProcessor.toView( content );
            clipboardPlugin.fire( 'inputTransformation', { content, dataTransfer } );
            editingView.scrollToTheSelection();
            evt.stop();
        } );
    }
}

export default StripPasteFormat;
