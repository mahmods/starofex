jQuery(document).ready(function ($) {
    "use strict";

/******To Up Button*****/

var toUp =$(".to-top");

  $(window).scroll(function() {
    $(this).scrollTop() >= 300 ? toUp.show() : toUp.hide();
  });


    /****************Select Lnguge*****************/
        $(".navbar-bg .languge li:first-child").addClass("select");
    
    $(".navbar-bg .languge li").click(function () {
        $(this).addClass("select").siblings().removeClass("select");
      });
        /***********************Header*******************************/
    /////Single Slider In Mobile
    $(".header-slider").slick({
       autoplay: true, // Enables Autoplay
       autoplaySpeed: 5000000, // Autoplay Speed in milliseconds
       speed: 500, // Transition Speed In Milliseconds
//        dots: true, // Enable or Disable Bullets
        arrows: true, // Enable or Disable Arrows
//        prevArrow:'<button class"ti-ios-arrow-thin-right"></button>',
   });

    
    /**************Search Button*****************/
    $(".search-button").click(function(){
        $(".input-area").fadeToggle();
        
    });
        
   
/************Section Of What We Have ************************/
    ////////Add Class Active To Target Link///////
    
    $(".have .tabs ul li:first-child").addClass("active");
    
    $(".have .tabs ul li").click(function () {
        $(this).addClass("active").siblings().removeClass("active");

  
        //Hide All Content
        $(".have .all-tabs > div").hide();

        //Show Dive With This Link
        $('.' + $(this).data('class')).fadeIn(1000);
    });
    
/*******************Single Slider In About Us Page*******************/
        $(".overview-slider").slick({
       autoplay: true, // Enables Autoplay
       autoplaySpeed: 5000, // Autoplay Speed in milliseconds
       speed: 500, // Transition Speed In Milliseconds
//        dots: true, // Enable or Disable Bullets
        arrows: true, // Enable or Disable Arrows
//        prevArrow:'<button class"ti-ios-arrow-thin-right"></button>',
   });
    
    /*******************Single Slider In certificates*******************/
        $(".quality-slider").slick({
       autoplay: true, // Enables Autoplay
       autoplaySpeed: 5000, // Autoplay Speed in milliseconds
       speed: 500, // Transition Speed In Milliseconds
//        dots: true, // Enable or Disable Bullets
     arrows: true, // Enable or Disable Arrows
//        prevArrow:'<button class"ti-ios-arrow-thin-right"></button>',
   });

       /*******************Single Slider In portfolio Product*******************/
        $(".product-slider").slick({
       autoplay: true, // Enables Autoplay
       autoplaySpeed: 5000, // Autoplay Speed in milliseconds
       speed: 500, // Transition Speed In Milliseconds
//        dots: true, // Enable or Disable Bullets
        arrows: true, // Enable or Disable Arrows
//        prevArrow:'<button class"ti-ios-arrow-thin-right"></button>',
   });

});
