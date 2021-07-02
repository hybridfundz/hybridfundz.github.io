(function ($) {
 "use strict";

/*--------------------------
preloader
---------------------------- */	
	$(window).on('load',function(){
		var pre_loader = $('#preloader')
	pre_loader.fadeOut('slow',function(){$(this).remove();});
	});	
    
/*----------------------------
 wow js active
------------------------------ */
    new WOW().init();

/*------------------------------------
 search option
------------------------------------- */ 
    $('.search-option').hide();
    $(".main-search").on('click', function(){
        $('.search-option').animate({
            height:'toggle',
        });
    });
/*---------------------
 TOP Menu Stick
--------------------- */
var windows = $(window);
var sticky = $('#sticker');

windows.on('scroll', function() {
    var scroll = windows.scrollTop();
    if (scroll < 300) {
        sticky.removeClass('stick');
    }else{
        sticky.addClass('stick');
    }
});
/*----------------------------
 jQuery MeanMenu
------------------------------ */
    var mean_menu = $('nav#dropdown');
    mean_menu.meanmenu();
/*--------------------------
 scrollUp
---------------------------- */
	$.scrollUp({
		scrollText: '<i class="fa fa-angle-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900,
		animation: 'fade'
	});
    
/*----------------------------
 Counter js active
------------------------------ */
    var count = $('.counter');
    count.counterUp({
		delay: 40,
		time: 3000
	});
	
/*--------------------------
 collapse
---------------------------- */
	var panel_test = $('.panel-heading a');
	panel_test.on('click', function(){
		panel_test.removeClass('active');
		$(this).addClass('active');
	});
/*--------------------------
 MagnificPopup
---------------------------- */	
    $('.video-play').magnificPopup({
        type: 'iframe'
    });

/*--------------------------
     slider carousel
---------------------------- */
    var intro_carousel = $('.intro-carousel');
    intro_carousel.owlCarousel({
        loop:true,
        nav:true,		
        autoplay:false,
        dots:false,
        navText: ["<i class='icon icon-chevron-left'></i>","<i class='icon icon-chevron-right'></i>"],
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
/*--------------------------
    Rate carousel
---------------------------- */
    var coin_carousel = $('.coin-rate');
    coin_carousel.owlCarousel({
        loop:true,
        nav:false,		
        autoplay:true,
        dots:false,
        responsive:{
            0:{
                items:3
            },
            600:{
                items:4
            },
            700:{
                items:6
            },
            1000:{
                items:10
            }
        }
    });
/*---------------------
 Testimonial carousel
---------------------*/
    var review = $('.review-content');
    review.owlCarousel({
		loop:true,
		nav:true,
        margin:15,
		dots:false,
        navText: ["<i class='icon icon-chevron-left'></i>","<i class='icon icon-chevron-right'></i>"],
		autoplay:false,
		responsive:{
			0:{
				items:1
			},
			768:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});
/*---------------------
 Blog carousel
---------------------*/
    var review = $('.blog-carousel');
    review.owlCarousel({
		loop:true,
		nav:true,
		dots:false,
        navText: ["<i class='icon icon-chevron-left'></i>","<i class='icon icon-chevron-right'></i>"],
		autoplay:false,
		responsive:{
			0:{
				items:1
			},
			768:{
				items:2
			},
			1000:{
				items:3
			}
		}
	});
	
/*----------------------------
    Contact form
------------------------------ */
	$("#contactForm").on("submit", function (event) {
		if (event.isDefaultPrevented()) {
			formError();
			submitMSG(false, "Did you fill in the form properly?");
		} else {
			event.preventDefault();
			submitForm();
		}
	});
	function submitForm(){
		var name = $("#name").val();
		var email = $("#email").val();
		var msg_subject = $("#msg_subject").val();
		var message = $("#message").val();


		$.ajax({
			type: "POST",
			url: "assets/contact.php",
			data: "name=" + name + "&email=" + email + "&msg_subject=" + msg_subject + "&message=" + message,
			success : function(text){
				if (text === "success"){
					formSuccess();
				} else {
					formError();
					submitMSG(false,text);
				}
			}
		});
	}

	function formSuccess(){
		$("#contactForm")[0].reset();
		submitMSG(true, "Message Submitted!")
	}

	function formError(){
		$("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			$(this).removeClass();
		});
	}

	function submitMSG(valid, msg){
		if(valid){
			var msgClasses = "h3 text-center tada animated text-success";
		} else {
			var msgClasses = "h3 text-center text-danger";
		}
		$("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
	}
    
/*---------------------
	 countdown
--------------------- */
		$('[data-countdown]').each(function() {
		  var $this = $(this), finalDate = $(this).data('countdown');
		  $this.countdown(finalDate, function(event) {
			$this.html(event.strftime('<span class="cdown days"><span class="time-count">%-D</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>Hour</p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>Min</p></span> <span class="cdown second"> <span><span class="time-count">%S</span> <p>Sec</p></span>'));
		  });
		});
    


})(jQuery); 