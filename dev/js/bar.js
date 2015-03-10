jQuery(document).ready(function($) {
  var onComplete = function() {
    $('.product-gallery-fade').fadeIn(1000);
  };

  $('.bar').animate({
      'width': '100%'
    },
    1000,
    'swing',
    onComplete
  );
});


//fadein for small screen

jQuery(document).ready(function($) {  
    $('.product-gallery-fade-small').fadeIn(1000);
});