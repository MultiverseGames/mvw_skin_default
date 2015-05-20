dmf.registerModule('page-detector', function(c, config) {
    'use strict';

    function initialize() {
        var page = getPage();
        c.announce('page-detected', page);
    }

    /************* General Functions ******************************************/

    /**
     * Get the current page
     * @returns String - name of page file, not including extension
     */
    function getPage() {
        var fullpath = location.pathname.substring(1).split('.')[0];
        var subpath = fullpath.split('/');

        return subpath.pop();
    }

    return {
        start: initialize
    };

});
