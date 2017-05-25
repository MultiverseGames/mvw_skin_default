(function () {
    var elements = {
        $body: $("body"),
        $drawers: $(".drawer"),
        $html: $("html"),
        // $menuToggle: $("#menu-toggle"),
        $pageContent: $("#content-page")
        // $sidebar: $("#sidebar")
    };

    function setUIHandlers() {
        // elements.$menuToggle.on("click touchstart", toggleSideMenu);

        // elements.$sidebar
        //   .find(".menu-item")
        //   .hover(menuDropdownHoverOn, menuDropdownHoverOff);

        elements.$body.on("click touchstart", ".drawer-toggle", toggleDrawer);

        elements.$pageContent.on("mouseup touchstart", contentClick);
    }

    function activateTooltips() {
        $(".tooltips").tooltip({
            html: true,
            placement: "auto",
            container: 'body'
        });
    }

    function contentClick() {
        //Improve so doesn't try to close drawers when none are open
        hideDrawers();
    }

    // function toggleSideMenu(e) {
    //   e.preventDefault();
    //   elements.$html.toggleClass("menu-active");
    //   elements.$sidebar.toggleClass("toggled");
    // }

    /**
     * Adds hovered class to the menu icon of parent drop down
     * Used to keep icon 'highlighted' when hovering on child elements
     */
    function menuDropdownHoverOn(e) {
        $(this).closest(".dropdown").addClass("hovered");
    }

    function menuDropdownHoverOff(e) {
        $(this).closest(".dropdown").removeClass("hovered");
    }

    function toggleDrawer(e) {
        e.preventDefault();

        var drawerID = $(this).data("drawer");

        var $drawer = $("#" + drawerID);

        $(".drawer").not($drawer).removeClass("toggled");

        $drawer.toggleClass("toggled");
    }

    function hideDrawers() {
        elements.$drawers.removeClass("toggled");
    }

    setUIHandlers();
    activateTooltips();
})();
