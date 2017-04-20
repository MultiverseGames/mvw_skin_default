(function() {
  var maxFillButton = $("#pg-max-fill");

  function changeValue(event) {
    maxFillButton
      .parents(".input-group")
      .find("input")
      .val(maxFillButton.data("max"));
  }

  maxFillButton.on("click", changeValue);
})();
