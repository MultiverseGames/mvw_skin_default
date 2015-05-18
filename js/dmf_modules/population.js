dmf.registerModule('population', function(c, config) {
    'use strict';

    var elements = {};

    function initialize() {
        elements['pg-max-fill'] = $('#pg-max-fill');
        bindEvents();
    }

    function bindEvents() {
        elements['pg-max-fill'].on('click', changeValue);
    }

    function changeValue() {
        elements['pg-max-fill'].parents('.input-group').find('input').val(elements['pg-max-fill'].data('max'));
    }

    return {
        start: initialize
    };

});
