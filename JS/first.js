$(document).ready(function () {
  $('.nav-mobile').click(function () { 
    $('.mob-menu').removeClass('close_menu');
  });
  $('.close').click(function (){
    $('.mob-menu').addClass('close_menu')
  })
  $(window).scroll(function(){
    var sc  = $(this).scrollTop()*0.1;
    console.log(sc.toFixed(0));
  });
  var x = 0;
});