(function () {
    var elements = {
        // $body: $("body"),
        // $drawers: $(".drawer"),
        // $pageContent: $(".page-content")
    };

    // function setUIHandlers() {
    // elements.$body.on("click", ".drawer-toggle", toggleDrawer);
    // elements.$pageContent.on("mouseup", contentClick);
    // }

    function activateTooltips() {
        $(".tooltips").tooltip({
            html: true,
            placement: "auto",
            container: 'body'
        });
    }

    // function contentClick() {
    //     //Improve so doesn't try to close drawers when none are open
    //     hideDrawers();
    // }

    // function toggleDrawer(e) {
    //     e.preventDefault();
    //
    //     var drawerID = $(this).data("drawer");
    //
    //     var $drawer = $("#" + drawerID);
    //
    //     $(".drawer").not($drawer).removeClass("toggled");
    //
    //     $drawer.toggleClass("toggled");
    // }
    //
    // function hideDrawers() {
    //     elements.$drawers.removeClass("toggled");
    // }

    // setUIHandlers();
    activateTooltips();
})();
