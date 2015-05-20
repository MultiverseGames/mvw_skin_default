dmf.registerModule('launcher', function(c, config) {
    'use strict';

    function initialize() {

        //Events are normally returned at the end and registered automatically, but we need this 
        //before we start the page-detector module
        c.registerEvents({
            'page-detected': startPageModule
        }, 'launcher');

        // Start any generic modules needed by all pages here
        c.startModules(['dmf-logger', 'all', 'page-detector']);
    }

    /************* General Functions ******************************************/

    function startPageModule(page) {
        // Start module responsible for the detected page
        c.startModule(page);
    }

    return {
        start: initialize
    };

});
