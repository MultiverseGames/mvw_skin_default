dmf.createModule('launcher', function (c, config) {
    'use strict';

    var properties = {};

    function initialize() {
        var page = getPage();

        // Start any generic modules needed by all pages here

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
        properties: properties,
        initialize: initialize
    };

});
