dmf.registerModule('launcher', function(c, config) {
    'use strict';

    function initialize() {
        var page = getPage();

        // Start any generic modules needed by all pages here
        c.startModule('all');

        // Start module specific to this page.
        // If this pages needs multiple modules, first module should start them
        c.startModule(page);
    }

    /************* General Functions ******************************************/

    /**
     * Get the current page
     * @returns String - name of page file, not including extension
     */
    function getPage() {
        return location.pathname.substring(1).split('.')[0];
    }

    return {
        start: initialize
    };

});
