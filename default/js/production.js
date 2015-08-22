dmf.registerModule('all', function(c) {
    'use strict';

    var elements = {};

    function start() {

        elements = c.fn.extend({}, elements, getElements());

        setUIHandlers();

        activateTooltips();
    }

    return {
        start: start
    };

    function getElements() {
        return {
            $body: $('body'),
            $drawers: $('.drawer'),
            $html: $('html'),
            $menuToggle: $('#menu-toggle'),
            $pageContent: $('#content-page'),
            $sidebar: $('#sidebar')
        }
    }

    function setUIHandlers() {
        elements.$menuToggle.on('click touchstart', toggleSideMenu);

        elements.$sidebar.find('.menu-item').hover(menuDropdownHoverOn, menuDropdownHoverOff);

        elements.$body.on('click touchstart', '.drawer-toggle', toggleDrawer);

        elements.$pageContent.on('mouseup touchstart', contentClick);
    }

    function activateTooltips() {
        $('.tooltips').tooltip({
            html: true,
            placement: "auto"
        });
    }

    function contentClick() {
        //Improve so doesn't try to close drawers when none are open
        hideDrawers();
    }

    function toggleSideMenu(e) {
        e.preventDefault();
        elements.$html.toggleClass('menu-active');
        elements.$sidebar.toggleClass('toggled');
    }

    /**
     * Adds hovered class to the menu icon of parent drop down
     * Used to keep icon 'highlighted' when hovering on child elements
     */
    function menuDropdownHoverOn(e) {
        $(this).closest('.dropdown').addClass('hovered');
    }

    function menuDropdownHoverOff(e) {
        $(this).closest('.dropdown').removeClass('hovered');
    }

    function toggleDrawer(e) {
        e.preventDefault();

        var drawerID = $(this).data('drawer');

        var $drawer = $('#' + drawerID);

        $('.drawer').not($drawer).removeClass('toggled');

        $drawer.toggleClass('toggled');
    }

    function hideDrawers() {
        elements.$drawers.removeClass('toggled');
    }
});

dmf.registerModule('bank', function(c, config) {
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

dmf.registerModule('name-of-module', function(c, config) {
    'use strict';

    // Example start function, will execute when module is started
    function startFunction() {}

    // Example stop function, will execute when module is stopped
    function stopFunction() {}

    function someEventHandler(eventData) {}

    return { // setup options are optional, but an object must be returned
        listeners: {
            'someEvent': someEventHandler
        }, // Can stay blank or be absent. Used for communicating between modules
        start: startFunction, //include to have a function execute when the module starts
        stop: stopFunction //include to have a function execute when the module stops
    }
});

dmf.registerModule('launcher', function(c, config) {
    'use strict';

    function initialize() {

        //Events are normally returned at the end and registered automatically, but we need this 
        //before we start the page-detector module
        c.registerEvents({
            'page-detected': startPageModule
        }, 'launcher');

        // Start any generic modules needed by all pages here
        c.startModules(['dmf-logger', 'all', 'page-detector']);
    }

    /************* General Functions ******************************************/

    function startPageModule(page) {
        // Start module responsible for the detected page
        c.startModule(page);
    }

    return {
        start: initialize
    };

});

dmf.registerModule('mailwrite', function(c, config) {
    'use strict';

    function start() {
        activateMarkdownEditor();
    }

    function activateMarkdownEditor() {
        $("#message").markdown({
            autofocus: false,
            savable: false,
            iconlibrary: 'fa',
            hiddenButtons: ['cmdPreview','cmdCode','cmdQuote','cmdImage'],
            fullscreen: {
                enable: false
            }
        })
    }

    return {
        start: start
    };

});

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

dmf.registerModule('weapons', function(c, config) {
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

function commaSeparateNumber(val) {
    while(/(\d+)(\d{3})/.test(val.toString())) {
        val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    }
    return val;
}

$(document).ready(function() {

    /* --------------------------------------------------------
     Components
     -----------------------------------------------------------*/
    (function() {
        /* Textarea */
        if ($('.auto-size')[0]) {
            $('.auto-size').autosize();
        }

        //Select
        if ($('.select')[0]) {
            $('.select').selectpicker();
        }

        //Sortable
        if ($('.sortable')[0]) {
            $('.sortable').sortable();
        }

        //Tag Select
        if ($('.tag-select')[0]) {
            $('.tag-select').chosen();
        }

        /* Tab */
        if ($('.tab')[0]) {
            $('.tab a').click(function(e) {
                e.preventDefault();
                $(this).tab('show');
            });
        }

        /* Collapse */
        if ($('.collapse')[0]) {
            $('.collapse').collapse();
        }

        /* Accordion */
        $('.panel-collapse').on('shown.bs.collapse', function() {
            $(this).prev().find('.panel-title a').removeClass('active');
        });

        $('.panel-collapse').on('hidden.bs.collapse', function() {
            $(this).prev().find('.panel-title a').addClass('active');
        });

        //Popover
        if ($('.pover')[0]) {
            $('.pover').popover();
        }
    })();

    /* --------------------------------------------------------
     Custom Scrollbar
     -----------------------------------------------------------*/
    (function() {
        if ($('.overflow')[0]) {
            var overflowRegular, overflowInvisible = false;
            overflowRegular = $('.overflow').niceScroll();
        }
    })();

    /* --------------------------------------------------------
     Form Validation
     -----------------------------------------------------------*/
    (function() {
        if ($("[class*='form-validation']")[0]) {
            $("[class*='form-validation']").validationEngine();

            //Clear Prompt
            $('body').on('click', '.validation-clear', function(e) {
                e.preventDefault();
                $(this).closest('form').validationEngine('hide');
            });
        }
    })();


    /* ---------------------------
     Vertical tab
     --------------------------- */
    (function() {
        $('.tab-vertical').each(function() {
            var tabHeight = $(this).outerHeight();
            var tabContentHeight = $(this).closest('.tab-container').find('.tab-content').outerHeight();

            if ((tabContentHeight) > (tabHeight)) {
                $(this).height(tabContentHeight);
            }
        });

    })();
});

$(window).load(function() {
    /* --------------------------------------------------------
     Animate numbers
     -----------------------------------------------------------*/
    $('.quick-stats').each(function() {
        var target = $(this).find('h2');
        var toAnimate = $(this).find('h2').attr('data-value');
        // Animate the element's value from x to y:
        $({
            someValue: 0
        }).animate({
            someValue: toAnimate
        }, {
            duration: 1000,
            easing: 'swing', // can be anything
            step: function() { // called on every step
                // Update the element's text with rounded-up value:
                target.text(commaSeparateNumber(Math.round(this.someValue)));
            }
        });


    });

});

//# sourceMappingURL=production.js.map