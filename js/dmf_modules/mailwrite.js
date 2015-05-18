dmf.registerModule('mailwrite', function(c, config) {
    'use strict';

    function start() {
        activateMarkdownEditor();
    }

    function activateMarkdownEditor() {
        $("#message").markdown({
            autofocus: false,
            savable: false
        })
    }


    return {
        start: start
    };

});
