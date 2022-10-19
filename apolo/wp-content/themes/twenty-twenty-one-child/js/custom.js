var img = document.getElementById('loader');
if(img){
  img.src = img.src.replace(/\?.*$/,"")+"?x="+Math.random();
}

var BannerImg = document.getElementById('banner-gif');
  if(BannerImg){
    var BannerImgAtr = BannerImg.getAttribute('data-src');
    // alert(BannerImgAtr);
    BannerImg.classList.add('fadein');
    BannerImg.src = BannerImgAtr;
    // BannerImg.src = BannerImg.src.replace(/\?.*$/,"")+"?x="+Math.random();
  }
// setInterval(function(){
//   if(BannerImg){
//       BannerImg.src = BannerImg.src;
//   }
// }, 8000)

$(document).ready(function () {

  wow = new WOW({
    offset: 80
  })
  wow.init();

  function Preloader() {
    setTimeout(function(){
      $('.page-loader').fadeOut('slow');

      $gif = $('.banner-video img').attr('src');
      $('.banner-video img').attr('src', $gif);
    }, 5000);
  }

    $('#loader').show();
  // $(window).on('load',function(){
  // })


  if(!window.sessionStorage.getItem('doNotShow')){
      window.sessionStorage.setItem('doNotShow', 'true');
      Preloader();
  } else {
     $('.page-loader').hide();
  }
  
  // if(!localStorage.getItem('doNotShow')){
  //     localStorage.setItem('doNotShow', 'true');
  //     Preloader();
  // } else {
  //    $('.page-loader').hide();
  // }


   $(".contact-popup").click(function(){
         // show Modal
         $('#contact').modal('show');
    });


    if($('.subscribe-strip').length > 0){
      $(window).scroll(function(){
        if($(this).scrollTop() > $('.subscribe-strip').offset().top){
          $('.subscribe-strip-text').addClass('sticky');
        }else{
          $('.subscribe-strip-text').removeClass('sticky');
        }
      });
      setTimeout(function(){
        $('.subscribe-strip-text').css('top', $('.subscribe-strip').offset().top + 250)
      }, 1200);
    }


  var menuOpen = false;
  $('.btn-menu, .header-overlay .btn').click(function(){
    menuOpen = !menuOpen;
    $('.header-overlay').toggleClass('active');

    if(menuOpen) {
      $('body, html').css('overflow', 'hidden');
    }else{
      $('body, html').css('overflow', 'auto');
    }
  });

  if($('.owl-number').length > 0){
    $('.owl-number').owlCarousel({
      items:1,
      nav:false,
      margin:0,
      loop:true,
      dots: true,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:false
    });
  }

  if($('.owl-logos').length > 0){
    $('.owl-logos').owlCarousel({
      items:4,
      nav:false,
      margin:25,
      loop:true,
      dots: false,
      autoplay:true,
      autoplayTimeout:3500,
      autoplayHoverPause:false,
      responsive:{
        0:{
            items:2, 
            margin: 15
        },
        600:{
            items:3, 
            margin: 15
        },
        1000:{
            items:4
        }
      }
    });
  }

  $('.category-right p').click(function(){
    $(this).next().slideToggle('slow');
  });

  if(window.location.pathname !== '/insights/') {
    $(".blog-grid-cells").hide();
  }else{
    $(".blog-list").addClass('blog-list-skip');
  }


  $('.category-right ul a').click(function(){
    const $tit = $(this).attr('title');

    localStorage.setItem('apolAuth', $tit);
  });

  const apolAuth = localStorage.getItem('apolAuth');
  if(apolAuth){
    $('.author .category-right ul a').each(function(){
      if($(this).attr('title') == apolAuth){
        $(this).parent().addClass('current-cat');
      }
    })
  }


  $(".team-list > div").hide();
  randomItem();

  // $("button").click(function(){
  //     var lastItems = $(".team-list > div:visible");
  //     randomItem();
  //     lastItems.hide();
  // });

  function randomItem(){
      for (var i = 0; i < 2; i++){
          var length = $(".team-list > div:not(:visible)").length;
          var random = Math.floor(Math.random() * length);
          $(".team-list > div:not(:visible)").eq(random).show();
      }
  }


  setTimeout(function(){

  if($(window).innerWidth() > 575){
    const horizontalAccordions = $(".accordion.width");

    horizontalAccordions.each((index, element) => {
      const accordion = $(element);
      const collapse = accordion.find(".collapse");
      const bodies = collapse.find("> *");
      // accordion.height(accordion.height());  
      bodies.width(bodies.eq(0).width());
      collapse.not(".show").each((index, element) => {
        $(element).parent().find("[data-toggle='collapse']").addClass("collapsed");
      });
    });
  }
  }, 5000);

});