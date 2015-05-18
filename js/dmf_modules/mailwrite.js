dmf.registerModule('mailwrite', function(c, config) {
    'use strict';

    function start() {
        activateMarkdownEditor();
    }

    function activateMarkdownEditor() {
        $("#message").markdown({
            autofocus: false,
            savable: false,
            iconlibrary: 'fa',
            hiddenButtons: ['cmdPreview','cmdCode','cmdQuote','cmdImage'],
            fullscreen: {
                enable: false
            }
        })
    }

    return {
        start: start
    };

});
