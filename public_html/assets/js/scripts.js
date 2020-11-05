(function(window, undefined) {
  'use strict';

  /*
  NOTE:
  ------
  PLACE HERE YOUR OWN JAVASCRIPT CODE IF NEEDED
  WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR JAVASCRIPT CODE PLEASE CONSIDER WRITING YOUR SCRIPT HERE.  */

})(window);

$(document).ready(function() {
  var dynamic = $('.dynamic')
  var static = $('.static')
  static.height(dynamic.height())
});

$(document).ready(function() {
  $(".menu_").find(".menu_item_").click(function(){
    $(".menu_ .menu_item_").removeClass('active-option')
    $(this).addClass('active-option')
  })
});