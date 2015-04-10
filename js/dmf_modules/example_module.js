dmf.createModule('name of module', function (c, config) {
    'use strict';

    var properties = { // Properties must exist, only id is required
        id: 'name of module', //name of module goes here, should match the name used above
        listeners: {} // Can stay blank, used for communicating between modules
    };

    // Optional function, will execute when module is started
    function initialize() {
    }

    // Optional function, will execute when module is stopped
    function destroy() {
    }


    return { // Returns references to module functions for access by the framework
        properties: properties, // must include this
        initialize: initialize, // include if initialize function exists
        destroy: destroy  // include if destroy function exists
    };

});
