
var carousel = function() {
    $('#featured').owlCarousel({
    loop:true,
    autoplay: true,
    margin:30,
    slideSpeed : 5000,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    autoplaySpeed:5000,
    nav:true,
    dots: true,
    autoplayHoverPause: false,
    items: 1,
    navText : ["<p><small>Prev</small><span class='ion-ios-arrow-round-back'></span></p>",
    "<p><small>Next</small><span class='ion-ios-arrow-round-forward'></span></p>"],
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:1
      }
    }
    });

};
carousel();


$('.owl-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    margin: 10,
    nav: false,
    dots: false,
    responsive: {
       0: {
          items: 1
       },
       600: {
          items: 3
       },
       1000: {
          items: 5
       }
    }
 });

 $(document).ready(function(){
   $(window).scroll(function(){
      if($(this).scrollTop() >20)
      {
         $('header#siteheader').addClass('fixed'); 		
      }
       else{
          $('header#siteheader').removeClass('fixed');
       }
   });
 });
 