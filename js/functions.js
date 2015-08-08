function commaSeparateNumber(val) {
    while (/(\d+)(\d{3})/.test(val.toString())) {
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
        })

        $('body').on('click touchstart', '.tab-vertical li', function() {
            var tabVertical = $(this).closest('.tab-vertical');
            tabVertical.height('auto');

            var tabHeight = tabVertical.outerHeight();
            var tabContentHeight = $(this).closest('.tab-container').find('.tab-content').outerHeight();

            if ((tabContentHeight) > (tabHeight)) {
                tabVertical.height(tabContentHeight);
            }
        });


    })();

    /* --------------------------------------------------------
    Login + Sign up
    -----------------------------------------------------------*/
    (function() {
        $('body').on('click touchstart', '.box-switcher', function(e) {
            e.preventDefault();
            var box = $(this).attr('data-switch');
            $(this).closest('.box').toggleClass('active');
            $('#' + box).closest('.box').addClass('active');
        });
    })();

    /* --------------------------------------------------------
    Checkbox + Radio
    -----------------------------------------------------------*/
    if ($('input:checkbox, input:radio')[0]) {

        //Checkbox + Radio skin
        $('input:checkbox:not([data-toggle="buttons"] input, .make-switch input), input:radio:not([data-toggle="buttons"] input)').iCheck({
            checkboxClass: 'icheckbox_minimal',
            radioClass: 'iradio_minimal',
            increaseArea: '20%' // optional
        });

        //Checkbox listing
        var parentCheck = $('.list-parent-check');
        var listCheck = $('.list-check');

        parentCheck.on('ifChecked', function() {
            $(this).closest('.list-container').find('.list-check').iCheck('check');
        });

        parentCheck.on('ifClicked', function() {
            $(this).closest('.list-container').find('.list-check').iCheck('uncheck');
        });

        listCheck.on('ifChecked', function() {
            var parent = $(this).closest('.list-container').find('.list-parent-check');
            var thisCheck = $(this).closest('.list-container').find('.list-check');
            var thisChecked = $(this).closest('.list-container').find('.list-check:checked');

            if (thisCheck.length == thisChecked.length) {
                parent.iCheck('check');
            }
        });

        listCheck.on('ifUnchecked', function() {
            var parent = $(this).closest('.list-container').find('.list-parent-check');
            parent.iCheck('uncheck');
        });

        listCheck.on('ifChanged', function() {
            var thisChecked = $(this).closest('.list-container').find('.list-check:checked');
            var showon = $(this).closest('.list-container').find('.show-on');
            if (thisChecked.length > 0) {
                showon.show();
            } else {
                showon.hide();
            }
        });
    }

    /* --------------------------------------------------------
    MAC Hack 
    -----------------------------------------------------------*/
    (function() {
        //Mac only
        if (navigator.userAgent.indexOf('Mac') > 0) {
            $('body').addClass('mac-os');
        }
    })();

    /* --------------------------------------------------------
    Photo Gallery
    -----------------------------------------------------------*/
    (function() {
        if ($('.photo-gallery')[0]) {
            $('.photo-gallery').SuperBox();
        }
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
