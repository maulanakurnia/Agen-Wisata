$(window).load(function() {
  'use strict';
  $('#carousel_slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 280,
    itemMargin: 25,
    asNavFor: '#slider'
  });
  $('#carousel_slider ul.slides li').on('mouseover', function() {
    $(this).trigger('click');
  });
  $('#slider').flexslider({
    animation: "fade",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel_slider",
    start: function(slider) {
      $('body').removeClass('loading');
    }
  });
});

