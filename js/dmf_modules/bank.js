dmf.createModule('bank', function (c, config) {
    'use strict';

    var properties = { // Properties must exist, only id is required
        id: 'bank', //name of module goes here, should match the name used above
        listeners: {} // Can stay blank, used for communicating between modules
    };

    var elements = {};
    // Optional function, will execute when module is started
    function initialize() {
        elements['bank-withdraw'] = document.getElementById('bank-withdraw'); //main panel / container
        bindEvents();
    }

    function bindEvents() {
        $(elements['bank-withdraw']).on('click', '.withdraw-max-fill', changeValue);
    }


    function changeValue(event) {
        var maxLink = event.target;
        var label = $(maxLink).parents('label');
        var input = document.getElementById(label.attr('for'));
        input.value = maxLink.innerHTML;
    }

    // Optional function, will execute when module is stopped
    // function destroy() {
    // }


    return { // Returns references to module functions for access by the framework
        properties: properties, // must include this
        initialize: initialize // include if initialize function exists
        // destroy: destroy  // include if destroy function exists
    };

});
