$(document).ready(function(){

  // show navigation when scroll
  $(window).scroll(function(){
    var yScroll = $(this).scrollTop();
      if (yScroll > 350) {
        $('.mainNav').css({
          'opacity' : 1,
          'transition': 'all 0.3s ease-in-out'
        });
      } else {
        $('.mainNav').css({
          'opacity' : 0,
          'transition': 'all 0.3s ease-in-out'
        });
      }
  });

  //show and hide navigation
  $('.mobileTrigger').on('click', function(){
    $('#mobilePanel').fadeIn();
    $('.menuClose').fadeIn();
    $('.mobileTrigger').fadeOut();
  });
  $('.menuClose').on('click', function(){
    $('#mobilePanel').fadeOut();
    $('.menuClose').fadeOut();
    $('.mobileTrigger').fadeIn();
  });

  //bootstrap slider
  $('.carousel').carousel({
    interval: 3000
  });

});
