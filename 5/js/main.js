/*
    
    Template Name: Financo
    Template URI: https://devitems.com/html/financo-preview/
    Description: This is html5 template
    Author: HasTech
    Author URI: https://devitems.com/
    Version: 1.0
    
*/
/*================================================
[  Table of contents  ]
================================================
	01. Question Pop Button
	02. Sticky Menu
	03. Owl Carousel
	04. Mail Chimp
	05. Magnific Popup
	06. Counter Up
	07. ScrollUp jquery
	08. Wow js
	09. jQuery MeanMenu
	10. Graph Canvas Js
 
======================================
[ End table content ]
======================================*/

(function ($) {
	"use strict";
    
/*------------------------------------
    01. Question Pop Button
-------------------------------------- */  
     $(".question-ask-area .toggle").on('click', function(){
        $(".question-popoup").toggleClass('active');
    });
    
/*------------------------------------
    02. Sticky Menu
-------------------------------------- */ 
	var windows = $(window);
	windows.on('scroll',function() {    
		var scroll = windows.scrollTop();
		var sticky = $(".header-sticky");
		if (scroll < 245) {
			sticky.removeClass("sticky");
		}else{
			sticky.addClass("sticky");
		}
	}); 
    
/*------------------------------------
    03. Owl Carousel
------------------------------------- */
    $(".slider-wrapper").owlCarousel({
    loop:true,
	autoplay: true,
	slideSpeed: 500,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    smartSpeed: 2500,
    items:1,
    nav:true,
    navText: ["<i class='zmdi zmdi-chevron-left'></i>","<i class='zmdi zmdi-chevron-right'></i>"],
    dots:true,
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
/*--------------------------------
    Testimonial Carousel
--------------------------------- */
	$('.testmonial-wrapper').owlCarousel({
		loop:true,
		margin:0,
        dots: true,
		nav:false,
		animateOut: 'slideOutDown',
		animateIn: 'zoomInLeft',		
		autoplay:false,
		smartSpeed:3000,
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
/*---------------------
    Blog Carousel
--------------------- */
    $(".blog-wrapper").owlCarousel({
    loop:true,
    items:4,
        dots: false,
		nav:false,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1
            },
            768:{
                items:2
            }, 
            992:{
                items:3
            }, 
            1200:{
                items:4
            }
		}
    });
    
/*------------------------------------
    Client Carousel
------------------------------------- */
	$('.client-carousel').owlCarousel({
		loop:true,
        autoPlay: false, 
        smartSpeed: 2000,
        fluidSpeed: true,
        items : 5,
        responsiveClass:true,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            480:{
                items:2
            },
            768:{
                items:3
            }, 
            992:{
                items:4
            }, 
            1200:{
                items:5
            }
		}
    }); 
    
/*------------------------------------
	04. Mail Chimp
--------------------------------------*/
    $('#mc-form').ajaxChimp({
        language: 'en',
        callback: mailChimpResponse,
        // ADD YOUR MAILCHIMP URL BELOW HERE!
        url: 'http://themeshaven.us8.list-manage.com/subscribe/post?u=759ce8a8f4f1037e021ba2922&amp;id=a2452237f8'
    });
    
    function mailChimpResponse(resp) {
        
        if (resp.result === 'success') {
            $('.mailchimp-success').html('' + resp.msg).fadeIn(900);
            $('.mailchimp-error').fadeOut(400);
            
        } else if(resp.result === 'error') {
            $('.mailchimp-error').html('' + resp.msg).fadeIn(900);
        }  
    }
    
/*--------------------------
    05. Magnific Popup
---------------------------- */	
	$('.image-popup-no-margins').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		},
		gallery: {
			enabled: true
		}
	});
    
/*--------------------------
    06. Counter Up
---------------------------- */	
    $('.counter').counterUp({
        delay: 70,
        time: 5000
    });
    
/*-------------------------------------------
    07. ScrollUp jquery
--------------------------------------------- */
    $.scrollUp({
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    }); 
    
/*-------------------------------------------
    08. Wow js
--------------------------------------------- */
    new WOW().init();
    
/*-------------------------------------------
    09. jQuery MeanMenu
--------------------------------------------- */
	jQuery('nav#dropdown').meanmenu();    
 
})(jQuery);  