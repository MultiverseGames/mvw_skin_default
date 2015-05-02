dmf.createModule('name of module', function(c, config) {
    'use strict';

    var properties = { // Properties object required
        listeners: {} // Can stay blank or be absent used for communicating between modules
    };

    // Optional function, will execute when module is started
    function initialize() {}

    // Optional function, will execute when module is stopped
    function destroy() {}


    return { // Returns references to module functions for access by the framework
        properties: properties, // must include this
        initialize: initialize, // include if initialize function exists
        destroy: destroy // include if destroy function exists
    };

});
