dmf.registerModule('name-of-module', function(c, config) {
    'use strict';

    // Example start function, will execute when module is started
    function startFunction() {}

    // Example stop function, will execute when module is stopped
    function stopFunction() {}


    return { // setup options are optional, but an object must be returned
        listeners: {}, // Can stay blank or be absent. Used for communicating between modules
        start: startFunction, //include to have a function execute when the module starts
        stop: stopFunction //include to have a function execute when the module stops
    }
});
