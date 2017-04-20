function commaSeparateNumber(val) {
  while (/(\d+)(\d{3})/.test(val.toString())) {
    val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
  }
  return val;
}

/* --------------------------------------------------------
 Components
 -----------------------------------------------------------*/
(function() {
  //Popover
  $(".pover").popover();
})();

/* --------------------------------------------------------
 Animate numbers
 -----------------------------------------------------------*/
$(".quick-stats").each(function() {
  var target = $(this).find("h2");
  var toAnimate = $(this).find("h2").attr("data-value");
  // Animate the element's value from x to y:
  $({
    someValue: 0
  }).animate(
    {
      someValue: toAnimate
    },
    {
      duration: 1000,
      easing: "swing", // can be anything
      step: function() {
        // called on every step
        // Update the element's text with rounded-up value:
        target.text(commaSeparateNumber(Math.round(this.someValue)));
      }
    }
  );
});

/**
 * Get the current page
 * @returns String - name of page file, not including extension
 */
function getPage() {
  var fullpath = location.pathname.substring(1).split(".")[0];
  var subpath = fullpath.split("/");

  var page = subpath.pop();

  if (page == "main") {
    var queryString = location.search.substring(1);
    page = queryString.split("/")[0];
  }

  return page;
}

var page = getPage();

$.getScript("gamestyles/default/js/pages/" + page + ".js").then(function() {
  //   console.log(arguments);
});
