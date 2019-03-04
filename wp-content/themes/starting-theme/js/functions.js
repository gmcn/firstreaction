( function($) {

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
