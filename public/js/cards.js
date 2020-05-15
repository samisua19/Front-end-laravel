$(document).ready(function(){
  var zindex = 10;

  $("div.card-new").click(function(e){
    e.preventDefault();

    var isShowing = false;

    if ($(this).hasClass("show")) {
      isShowing = true
    }

    if ($("div.new-CR").hasClass("showing")) {
      // a card-new is already in view
      $("div.card-new.show")
        .removeClass("show");

      if (isShowing) {
        // this card-new was showing - reset the grid
        $("div.new-CR")
          .removeClass("showing");
      } else {
        // this card-new isn't showing - get in with it
        $(this)
          .css({zIndex: zindex})
          .addClass("show");

      }

      zindex++;

    } else {
      // no new-CR in view
      $("div.new-CR")
        .addClass("showing");
      $(this)
        .css({zIndex:zindex})
        .addClass("show");

      zindex++;
    }

  });
});