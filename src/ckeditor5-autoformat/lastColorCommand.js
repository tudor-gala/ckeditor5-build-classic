import Command from '@ckeditor/ckeditor5-core/src/command';
import { FONT_COLOR } from '@ckeditor/ckeditor5-font/src/utils';

export default class RedoCommand extends Command {
    execute() {
        try {
            const value = this.editor.plugins.get('Autoformat').lastColor;

            if (value) {
                this.editor.execute(FONT_COLOR, {value});
            }
        } catch (e) {}
    }
}
