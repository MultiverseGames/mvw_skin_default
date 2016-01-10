function commaSeparateNumber(val) {
    while(/(\d+)(\d{3})/.test(val.toString())) {
        val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    }
    return val;
}

/* --------------------------------------------------------
 Components
 -----------------------------------------------------------*/
(function() {
    /* Collapse */
    $('.collapse').collapse();

    /* Accordion */
    $('.panel-collapse').on('shown.bs.collapse', function() {
        $(this).prev().find('.panel-title a').removeClass('active');
    });

    $('.panel-collapse').on('hidden.bs.collapse', function() {
        $(this).prev().find('.panel-title a').addClass('active');
    });

    //Popover
    $('.pover').popover();
})();

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

