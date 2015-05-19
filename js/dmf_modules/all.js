dmf.registerModule('all', function(c, config) {
    'use strict';

    function start() {
        tooltips();
        sidebarAndMenu();
        topbar();
    }

    return {
        start: start
    };

    function tooltips() {
        $('.tooltips').tooltip();
    }

    function sidebarAndMenu() {
        /* Menu Toggle */
        $('body').on('click touchstart', '#menu-toggle', function(e) {
            e.preventDefault();
            $('html').toggleClass('menu-active');
            $('#sidebar').toggleClass('toggled');
            //$('#content').toggleClass('m-0');
        });

        /* Active Menu */
        $('#sidebar .menu-item').hover(function() {
            $(this).closest('.dropdown').addClass('hovered');
        }, function() {
            $(this).closest('.dropdown').removeClass('hovered');
        });

        /* Prevent */
        $('.side-menu .dropdown > a').click(function(e) {
            e.preventDefault();
        });

    }

    function topbar() {
        $('body').on('click touchstart', '.drawer-toggle', function(e) {
            e.preventDefault();
            var drawer = $(this).attr('data-drawer');

            $('.drawer:not("#' + drawer + '")').removeClass('toggled');

            if ($('#' + drawer).hasClass('toggled')) {
                $('#' + drawer).removeClass('toggled');
            } else {
                $('#' + drawer).addClass('toggled');
            }
        });

        //Close when click outside
        $(document).on('mouseup touchstart', function(e) {
            var container = $('.drawer, .tm-icon');
            if (container.has(e.target).length === 0) {
                $('.drawer').removeClass('toggled');
                $('.drawer-toggle').removeClass('open');
            }
        });

        //Close
        $('body').on('click touchstart', '.drawer-close', function() {
            $(this).closest('.drawer').removeClass('toggled');
            $('.drawer-toggle').removeClass('open');
        });
    }

});
