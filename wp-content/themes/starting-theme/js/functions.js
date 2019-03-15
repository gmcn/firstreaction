( function($) {

  $('.bxslider').bxSlider({
  // auto: false,
  // autoStart: true,
  // speed: 1000,
  // autoControls: false,
  // stopAutoOnClick: false,
  // pager: false,
  controls: false,
  });

  $('.gallery').bxSlider({
  // auto: false,
  // autoStart: true,
  // speed: 1000,
  autoControls: false,
  // stopAutoOnClick: false,
  pager: false,
  controls: true,
  });

  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.matchheight').matchHeight();
  }
  window.onload = startMatchHeight;

  $(document).ready(function() {
  		$(".fancybox").fancybox();
  	});

  $(document).on('click', '.yamm .dropdown-menu', function(e) {
  e.stopPropagation()
})

} ) (jQuery);
