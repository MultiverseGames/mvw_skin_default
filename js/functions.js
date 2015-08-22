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
