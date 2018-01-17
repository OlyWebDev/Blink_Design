$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
	  loop: true,
	  items: 1,
      responsive: true,
      autoHeight: true,
      autoplay: true,
      autoplayTimeout: 5000,
      animateOut: 'fadeOut',
      dots: true
  });
});

$('#s').attr( 'placeholder', 'Search...' );

$(window).load(function() {
  $('.introduction_message').css('display', 'block') ;
});
