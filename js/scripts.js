$(document).ready(function(){




    $(document).scroll(function() {
      var y = $(this).scrollTop();
      if (y > 350) {
        $('.welcome').fadeTo( "slow", 1 );
      }
      if (y > 650) {
        $('.welcome__block-1').fadeTo( "slow", 1 );
      }
      if (y > 1050) {
        $('.welcome__block-2').fadeTo( "slow", 1 );
      }
      if (y > 1450) {
        $('.welcome__block-3').fadeTo( "slow", 1 );
      }
      if (y > 1850) {
        $('.welcome__block-4').fadeTo( "slow", 1 );
      }
      if (y > 2250) {
        $('.gallery').fadeTo( "slow", 1 );
      }
      if (y > 3020) {
        $('.questions').fadeTo( "slow", 1 );
      }
      if (y > 3720) {
        $('.news__wrap').fadeTo( "slow", 1 );
      }
    });






   $('.gallery__1').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.gallery__2'
  });
  $('.gallery__2').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.gallery__1',
    dots: false,
    arrows: true,
    centerMode: false,
    focusOnSelect: true
  });


  $('.questions__item__title').click(function(){
      $(this).siblings('.questions__item__answer').slideToggle(150);
  });

  $(".nano").nanoScroller();


  var newsItems = $('.news__item').length;
  var newsCount = 2;

  $('.news__down').click(function(){
        if(newsCount < newsItems) {
           $('.news__item').animate({ "top": "-=430px" }, "fast" );
           newsCount = newsCount +1;
        }
  });

  $('.news__up').click(function(){
        if(newsCount > 2) {
            $('.news__item').animate({ "top": "+=430px" }, "fast" );
            newsCount = newsCount -1;
        }
  });





});