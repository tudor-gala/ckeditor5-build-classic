import Plugin from '@ckeditor/ckeditor5-core/src/plugin';
import { parseHtml } from "@ckeditor/ckeditor5-paste-from-office/src/filters/parse";
import plainTextToHtml from '@ckeditor/ckeditor5-clipboard/src/utils/plaintexttohtml';
import stripAttr from 'strip-attributes';

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

    stripAttributes(str) {
        return stripAttr(str, {keep: ['class']});
    }

    stripBrAttributes(str) {
        return str.replace(/(<br)[^<>]*/gi, '<br');
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
        const editingView = editor.editing.view;
        let content;

        editingView.document.on('clipboardInput', (evt, data) => {
            if (editor.isReadOnly) {
                return;
            }

            const dataTransfer = data.dataTransfer;

            if (Array.from(dataTransfer.types).includes('text/html')) {
                const { bodyString } = parseHtml(dataTransfer.getData('text/html'), editor.editing.view.document.stylesProcessor);

                content = bodyString.replace(/<br\s*\/\s*>/gi, '<br>');
                content = this.stripTags(content, '<b><i><ol><ul><li><h1><h2><h3><h4><hr><p><strong><input><span><a><div><table><tbody><thead><tfoot><tr><td><th><br>');
                content = this.stripAttributes(content);
                content = this.stripInlineStyles(content);
                content = this.stripBrAttributes(content);
                content = this.stripInvalidColors(content);

                console.log('before >>', dataTransfer.getData('text/html'));
            } else {
                content = plainTextToHtml( dataTransfer.getData( 'text/plain' ) );

                console.log('before >>', dataTransfer.getData('text/plain'));
            }

            content = content.replace(/<p><br>/g, '<p>');
            content = content.replace(/<br><p>/g, '<p>');
            content = content.replace(/<br><\/p>/g, '</p>');
            content = content.replace(/<p><\/p>/g, '');

            content = content.replace(/<div><br>/g, '<div>');
            content = content.replace(/<br><div>/g, '<div>');
            content = content.replace(/<br><\/div>/g, '</div>');
            content = content.replace(/<div><\/div>/g, '');

            content = content.replace(/(<br>)+/g, '<br>');
            content = content.replace(/^(<br>)+/g, '');
            content = content.replace(/(<br>)+$/g, '');

            // console.log('after >>', content);

            data.content = editor.data.htmlProcessor.toView( content );
        });
    }
}

export default StripPasteFormat;
