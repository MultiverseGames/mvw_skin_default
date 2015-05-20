dmf.registerModule('operations', function(c, config) {
    'use strict';

    var operationPanels;

    function start() {
        operationPanels = $('.covert-operation-panel');

        operationPanels.on('keypress', function(event) {
            if (event.keyCode == 13) {
                //Prevent enter key from triggering form submit
                //as it is unclear if the desired action is deploy or recall
                event.preventDefault();
            }
        });


    }





    return {
        start: start
    };

});
