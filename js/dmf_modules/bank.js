dmf.createModule('bank', function(c, config) {
    'use strict';

    var elements = {};

    function start() {
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

    return {
        start: start
    };
});
