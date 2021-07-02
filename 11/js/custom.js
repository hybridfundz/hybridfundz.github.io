(function($) {
    "use strict";

    var revapi24;
    var tpj = jQuery;


    // Preloader -section
    //-------------------------------------------------------
    // Preloader 
    jQuery(window).on('load', function() {
        jQuery("#status").fadeOut();
        jQuery("#preloader").delay(350).fadeOut("slow");
    });
    // on ready function
    jQuery(document).ready(function($) {



        //--------------------up scroll js----------------------------- 
        // ===== Scroll to Top ==== 
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 100) {
                $('#return-to-top').fadeIn(200);
            } else {
                $('#return-to-top').fadeOut(200);
            }
        });
        $('#return-to-top').on("click", function() {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
        });



        // ===== Scroll to Top end ==== 

        //show hide login form js
        $('#search_button').on("click", function(e) {
            $('#search_open').slideToggle();
            e.stopPropagation();
        });

        $(document).on("click", function(e) {
            if (!(e.target.closest('#search_open'))) {
                $("#search_open").slideUp();
            }
        });



        // Menu js for Position fixed
        $(window).scroll(function() {
            var window_top = $(window).scrollTop() + 1;
            if (window_top > 30) {
                $('.menu_wrapper').addClass('menu_fixed animated fadeIn');
            } else {
                $('.menu_wrapper').removeClass('menu_fixed animated fadeIn');
            }
        });


        // Wow js
        $(window).on("load", function() {
            var wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: 0,
                mobile: true,
                live: true
            });
            wow.init();
        });


        /*--- Responsive Menu Start ----*/


        $("#toggle").on("click", function() {
            var w = $('#sidebar').width();
            var pos = $('#sidebar').offset().left;

            if (pos == 0) {
                $("#sidebar").animate({
                    "left": -w
                }, "slow");
            } else {
                $("#sidebar").animate({
                    "left": "0"
                }, "slow");
            }

        });

        $("#toggle_close").on("click", function() {
            var w = $('#sidebar').width();
            var pos = $('#sidebar').offset().left;

            if (pos == 0) {
                $("#sidebar").animate({
                    "left": -w
                }, "slow");
            } else {
                $("#sidebar").animate({
                    "left": "0"
                }, "slow");
            }

        });

        (function($) {


            $('#cssmenu li.active').addClass('open').children('ul').show();
            $('#cssmenu li.has-sub>a').on('click', function() {
                $(this).removeAttr('href');
                var element = $(this).parent('li');
                if (element.hasClass('open')) {
                    element.removeClass('open');
                    element.find('li').removeClass('open');
                    element.find('ul').slideUp(200);
                } else {
                    element.addClass('open');
                    element.children('ul').slideDown(200);
                    element.siblings('li').children('ul').slideUp(200);
                    element.siblings('li').removeClass('open');
                    element.siblings('li').find('li').removeClass('open');
                    element.siblings('li').find('ul').slideUp(200);
                }
            });


        })(jQuery);



        /*--- Responsive Menu End ----*/


        var tpj = jQuery;
        var revapi24;
        tpj(function() {
            if (tpj("#rev_slider_24_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_24_1");
            } else {
                revapi24 = tpj("#rev_slider_24_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "revolution/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",

                        arrows: {
                            style: "text",
                            enable: true,
                            hide_onmobile: true,
                            hide_onleave: true,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 10
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 10
                            }
                        },
                        bullets: {
                            enable: false,
                            hide_onmobile: false,
                            style: "bullet-bar",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 50,
                            space: 5,
                            tmp: ''
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [868, 768, 960, 720],
                    lazyType: "none",
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "60px",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
            if (revapi24) revapi24.revSliderSlicey();
        }); /*ready*/


        /*******----------about us slider-----***********/

        $('.aboutus_slider_wrapper .owl-carousel').owlCarousel({
            loop: true,
            smartSpeed: 1200,
            margin: 10,
            autoplay: false,
            responsiveClass: true,
            navText: ['<span>PR<br>EV</span>', '<span>NE<br>XT</span>'],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: true,
                    margin: 30
                }
            }
        })


        /*******----------service page slider-----***********/
        $('.service_slider_wrapper .owl-carousel').owlCarousel({
            loop: true,
            smartSpeed: 1200,
            margin: 10,
            autoplay: false,
            responsiveClass: true,
            navText: ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>', '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: true,
                    margin: 30
                }
            }
        })



        // counter-section
        //-------------------------------------------------------
        $('.counter_section').on('inview', function(event, visible, visiblePartX, visiblePartY) {
            if (visible) {
                $(this).find('.timer').each(function() {
                    var $this = $(this);
                    $({
                        Counter: 0
                    }).animate({
                        Counter: $this.text()
                    }, {
                        duration: 2000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.ceil(this.Counter));
                        }
                    });
                });
                $(this).off('inview');
            }
        });



        //*-----------------------owl caouresel Team---------------------------*//	

        $('.team_slider_wrapper .owl-carousel').owlCarousel({
            loop: true,
            smartSpeed: 1200,
            margin: 10,
            autoplay: false,
            responsiveClass: true,
            navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: true
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: true,
                    margin: 30
                }
            }
        })


        /*testimonial slider js */

        $('.testimonial_slider_wrapper .owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: false,
            smartSpeed: 1200,
            responsiveClass: true,
            navText: ['<i class="fa fa-long-arrow-right" aria-hidden="true"></i>', '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>'],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: true,
                    margin: 20
                }
            }
        })



        /* 09. VENOBOX JS */
        $('.venobox').venobox({
            numeratio: true,
            titleattr: 'data-title',
            titlePosition: 'top',
            spinner: 'wandering-cubes',
            spinColor: '#007bff'
        });

        //*****-----blog slidder wrapper

        $('.blog_cat_slider_wrapper .owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            responsiveClass: true,
            smartSpeed: 1200,
            navText: ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>', '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: true,
                    margin: 20
                }
            }
        })




        /*----------------------------
        isotope active
        ------------------------------ */
        var $grid = $('.grid').isotope({
            itemSelector: '.grid-item',
            stagger: 30
        });

        $('.filter-demo').on('click', '.button', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });

        // change is-checked class on buttons

        $('.filter').each(function(i, buttonGroup) {
            var $buttonGroup = $(buttonGroup);
            $buttonGroup.on('click', '.button', function() {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $(this).addClass('is-checked');
            });
        });



        /*********color change script start*******/
        $('.colorchange').on('click', function() {

            var color_name = $(this).attr('id');
            var new_style = 'css/color/' + color_name + '.css';
            $('#theme-color').attr('href', new_style);


        });
        //rotate setting gear 
        $(function() {

            var $rota = $('#style-switcher .bottom a.settings img'),
                degree = 0,
                timer;

            function rotate() {
                $rota.css({
                    transform: 'rotate(' + degree + 'deg)'
                });
                // timeout increase degrees:
                timer = setTimeout(function() {
                    ++degree;
                    rotate(); // loop it
                }, 0);
            }

            rotate(); // run it!

        });


        $("#style-switcher .bottom a.settings").on('click', function(e) {
            e.preventDefault();
            var div = $("#style-switcher");
            if (div.css("left") === "-215px") {
                $("#style-switcher").animate({
                    left: "0px"
                });
            } else {
                $("#style-switcher").animate({
                    left: "-215px"
                });
            }
        });


        /******color change script end******/


        //--------Counter(Chart)---------//

        (function() {

            $('.chart_two_1st').easyPieChart({
                //your configuration goes here
                easing: 'easeOut',
                delay: 3000,
                barColor: '#fff',
                trackColor: '#ddbb00',
                scaleColor: '#fff',
                lineWidth: 71,
                size: 148,
                scaleLength: 0,
                lineCap: 'circle',
                animate: 5000,
                onStep: function(from, to, percent) {
                    this.el.children[0].innerHTML = Math.round(percent);
                }
            });

        }());



        (function() {

            $('.chart_two_2nd').easyPieChart({
                //your configuration goes here
                easing: 'easeOut',
                delay: 3000,
                barColor: '#fff',
                trackColor: '#ddbb00',
                scaleColor: '#fff',
                lineWidth: 71,
                size: 148,
                scaleLength: 0,
                lineCap: 'circle',
                animate: 5000,
                onStep: function(from, to, percent) {
                    this.el.children[0].innerHTML = Math.round(percent);
                }
            });

        }());


        (function() {

            $('.chart_two_3rd').easyPieChart({
                //your configuration goes here
                easing: 'easeOut',
                delay: 3000,
                barColor: '#fff',
                trackColor: '#ddbb00',
                scaleColor: '#fff',
                lineWidth: 71,
                size: 148,
                scaleLength: 0,
                lineCap: 'circle',
                animate: 5000,
                onStep: function(from, to, percent) {
                    this.el.children[0].innerHTML = Math.round(percent);
                }
            });

        }());




        // Contact Form Submition
        function checkRequire(formId, targetResp) {
            targetResp.html('');
            var email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
            var url = /(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/;
            var image = /\.(jpe?g|gif|png|PNG|JPE?G)$/;
            var mobile = /^[\s()+-]*([0-9][\s()+-]*){6,20}$/;
            var facebook = /^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/;
            var twitter = /^(https?:\/\/)?(www\.)?twitter.com\/[a-zA-Z0-9(\.\?)?]/;
            var google_plus = /^(https?:\/\/)?(www\.)?plus.google.com\/[a-zA-Z0-9(\.\?)?]/;
            var check = 0;
            $('#er_msg').remove();
            var target = (typeof formId == 'object') ? $(formId) : $('#' + formId);
            target.find('input , textarea , select').each(function() {
                if ($(this).hasClass('require')) {
                    if ($(this).val().trim() == '') {
                        check = 1;
                        $(this).focus();
                        targetResp.html('You missed out some fields.');
                        $(this).addClass('error');
                        return false;
                    } else {
                        $(this).removeClass('error');
                    }
                }
                if ($(this).val().trim() != '') {
                    var valid = $(this).attr('data-valid');
                    if (typeof valid != 'undefined') {
                        if (!eval(valid).test($(this).val().trim())) {
                            $(this).addClass('error');
                            $(this).focus();
                            check = 1;
                            targetResp.html($(this).attr('data-error'));
                            return false;
                        } else {
                            $(this).removeClass('error');
                        }
                    }
                }
            });
            return check;
        }
        $(".submitForm").on("click", function() {
            var _this = $(this);
            var targetForm = _this.closest('form');
            var errroTarget = targetForm.find('.response');
            var check = checkRequire(targetForm, errroTarget);
            if (check == 0) {
                var formDetail = new FormData(targetForm[0]);
                formDetail.append('form_type', _this.attr('form-type'));
                $.ajax({
                    method: 'post',
                    url: 'ajax.php',
                    data: formDetail,
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function(resp) {
                    if (resp == 1) {
                        targetForm.find('input').val('');
                        targetForm.find('textarea').val('');
                        errroTarget.html('<p style="color:green;">Mail has been sent successfully.</p>');
                    } else {
                        errroTarget.html('<p style="color:red;">Something went wrong please try again latter.</p>');
                    }
                });
            }
        });




    });

})(jQuery);