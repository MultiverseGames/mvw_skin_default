dmf.createModule('weapons', function(c, config) {
    'use strict';

    var elements = {};

    function initialize() {
        elements.buyweapons = document.getElementById('buyweapons'); //main panel / container
        elements.purchaseTable = document.getElementById('ship-purchase-table');
        elements.purchaseInputs = elements.purchaseTable.getElementsByTagName('input');

        bindEvents();
    }

    function bindEvents() {
        $(elements.purchaseTable).on('click', '.ship-max-fill', changeValue);
    }

    /************* General Functions ******************************************/

    /**
     * When the 'max-fill' links are clicked, pastes the value into the matching
     * input and resets all others to 0
     */
    function changeValue(event) {
        var clickedElement = event.target;

        resetPurchaseInputs();

        // Select the cell previous to that clicked, set it's input to the selected value

        var selectedValue = clickedElement.innerHTML;
        var previousCell = clickedElement.parentNode.previousElementSibling;
        var input = previousCell.getElementsByTagName('input')[0];

        input.value = selectedValue;

        return false;
    }

    function resetPurchaseInputs() {
        for (var i = 0; i < elements.purchaseInputs.length; i++) {
            if (elements.purchaseInputs[i].nodeName === 'INPUT' && elements.purchaseInputs[i].type === 'text') {
                elements.purchaseInputs[i].value = 0;
            }
        }
    }

    return {
        start: initialize
    };

});
