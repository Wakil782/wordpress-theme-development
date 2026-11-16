jQuery(document).ready(function(){
    jQuery('.slider').bxSlider({
      mode: 'fade',
      captions: true,
      slideWidth: 600
    });
    jQuery("#owl-slider").owlCarousel({
      autoplay:true,
      items: 1,
    });
  });