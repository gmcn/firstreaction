( function($) {

  $('.bxslider').bxSlider({
  auto: true,
  // autoStart: true,
  speed: 1000,
  pause: 10000,
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
    $('.matchproduct-single').matchHeight();
    $('.footermatch').matchHeight();
  }
  window.onload = startMatchHeight;

  $(document).ready(function() {
  		$(".fancybox").fancybox();
  	});

  $(document).on('click', '.yamm .dropdown-menu', function(e) {
  e.stopPropagation()
})

} ) (jQuery);

window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#f23735"
    },
    "button": {
      "background": "#fff"
    }
  },
  "content": {
    "href": "/privacy-policy"
  }
})});

$(function() {//arg c is not used

$('.input-text').on('keyup change', function() {//c is event object and is not used
//note that 'c' from outer function is not 'c' in inner function
//no need to re-request #check
var one = $(this);//$('#check');
$('.quote').hide();//all in one
if( (one.val() > 2) ) {
        $('.quote').show();
        //optionnaly
        return;
    }

});

});
