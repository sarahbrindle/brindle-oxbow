//Functions



//Document Ready
$(function(){

  //AOS Animations
  AOS.init({
    offset: 120,
    duration: 800,
  });

  //Mobile Menu
  $('#navtoggle').on('click', function(){
    
  });

  //Slider
  $('.bnr-slider').slick({
    autoplay: true,
    autoplaySpeed: 400000,
    infinite: true,
    slidesToShow: 1,
    speed: 500,
    pauseOnHover: false,
    arrows: true,
    dots: false,
  });

  $('.scroll-track').slick({
    autoplay: true,
    autoplaySpeed: 0,
    infinite: true,
    speed: 5000,
    cssEase: 'linear',
    pauseOnHover: false,
    arrows: false,
    dots: false,
    variableWidth: true,
  });


  $('.gallery-slider').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    slidesToShow: 4,
    speed: 500,
    pauseOnHover: false,
    arrows: true,
    dots: false,
    responsive: [
      {
        breakpoint: 1281,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        }
      }
    ],
  });
  

  /*
  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    slidesToShow: 5,
    speed: 500,
    pauseOnHover: false,
    arrows: true,
    dots: false,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        }
      }
    ],
  });
  */

});

//Window Ready
$(window).ready(function(){
  AOS.refresh();
});

//On Scroll
$(window).scroll(function(){

  //Sticky Header
  if ($(document).scrollTop() > 100) {
          $('body').addClass('sticky');
      } else {
          $('body').removeClass('sticky');
      }

});

//Window Resize
$(window).resize(function(){

});




$(document).ready(function() {
  $(".btn-menu").click(function() {
    // Toggle the 'toggled' class on the button
    $(this).toggleClass("open");
    $(".overlay-nav").slideToggle();
    $("body").toggleClass("open");
  });
});