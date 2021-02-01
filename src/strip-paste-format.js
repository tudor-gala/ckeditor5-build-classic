import Plugin from '@ckeditor/ckeditor5-core/src/plugin';
import { parseHtml } from "@ckeditor/ckeditor5-paste-from-office/src/filters/parse";
import plainTextToHtml from '@ckeditor/ckeditor5-clipboard/src/utils/plaintexttohtml';

class StripPasteFormat extends Plugin {
    static get pluginName() {
        return 'StripPasteFormat'
    }

    stripTags(str, allow) {
        const tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi;
        const blockLevel = ['address', 'article', 'aside', 'blockquote', 'canvas', 'dd', 'div', 'dl', 'dt', 'fieldset', 'figcaption', 'figure', 'footer', 'form', 'h4', 'h5', 'h6', 'header', 'hr', 'li', 'main', 'nav', 'noscript', 'ol', 'p', 'pre', 'section', 'table', 'tfoot', 'ul', 'video'];

        return str.replace(tags, ($0, $1) => {
            const tag = $1.toLowerCase();
            let replacement = '';

            if (blockLevel.includes(tag)) {
                replacement = $0.match(/^<\//) ? '</p>' : '<p>';
            }

            return allow.indexOf(`<${tag}>`) > -1 ? $0 : replacement;
        });
    }

    stripInvalidColors(str) {
        return str.replace(/color:\s*(?!(hsl\(0,\s*0%,\s*0%\)|hsl\(0,\s*0%,\s*30%\)|hsl\(0,\s*0%,\s*60%\)|hsl\(0,\s*0%,\s*90%\)|hsl\(0,\s*0%,\s*100%\)|hsl\(0,\s*75%,\s*60%\)|hsl\(30,\s*75%,\s*60%\)|hsl\(60,\s*75%,\s*60%\)|hsl\(90,\s*75%,\s*60%\)|hsl\(120,\s*75%,\s*60%\)|hsl\(150,\s*75%,\s*60%\)|hsl\(180,\s*75%,\s*60%\)|hsl\(210,\s*75%,\s*60%\)|hsl\(240,\s*75%,\s*60%\)|hsl\(270,\s*75%,\s*60%\)))([^;]*);/gi, '');
    }

    stripInlineStyles(str) {
        const matches = str.match(/style="[^"]*"/gi);
        const allowed = [
            /^color:/,
            /^font-weight:/,
            /^font-style:/,
        ];

        if (!Array.isArray(matches)) {
            return str;
        }

        matches.forEach(i => {
            const filtered = [];
            const inner = i.substr(7, i.length - 8).split(';');

            inner.forEach(style => {
                const trimmed = style.trim();

                for (let i = 0; i < allowed.length; i++) {
                    if (trimmed.match(allowed[i])) {
                        filtered.push(trimmed);
                        break;
                    }
                }
            });

            if (filtered.length) {
                const allStyles = filtered.join(';');
                str = str.replace(i, `style="${allStyles};"`);
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
        let content;

        editingView.document.on( 'clipboardInput', ( evt, data ) => {
            if ( editor.isReadOnly ) {
                return;
            }

            const dataTransfer = data.dataTransfer;

            if (Array.from(dataTransfer.types).includes('text/html')) {
                const { bodyString } = parseHtml(dataTransfer.getData('text/html'), editor.editing.view.document.stylesProcessor);

                content = this.stripTags(bodyString, '<b><i><ol><ul><li><h1><h2><h3><hr><p><strong><input><span><a>');
                content = this.stripInlineStyles(content);
                content = this.stripInvalidColors(content);

                console.log('before >>', dataTransfer.getData('text/html'));
            } else {
                content = plainTextToHtml( dataTransfer.getData( 'text/plain' ) );

                console.log('before >>', dataTransfer.getData('text/plain'));
            }

            content = content.replace(/<p><\/p>/g, '');
            content = content.replace(/<p><br>/g, '<p>');
            content = content.replace(/<br><\/p>/g, '</p>');
            content = content.replace(/(<br>)+/g, '<br>');
            content = content.replace(/^(<br>)+/g, '');
            content = content.replace(/(<br>)+$/g, '');

            // console.log('after >>', content);

            content = clipboardPlugin._htmlDataProcessor.toView( content );
            clipboardPlugin.fire( 'inputTransformation', { content, dataTransfer } );
            editingView.scrollToTheSelection();
            evt.stop();
        } );
    }
}

export default StripPasteFormat;
