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
    if(sc<43){
      $('.phython').css('transform','translateX(-200%)')
      $('.phython_t').css('transform','translateX(230%)');
    }
    if (sc>43 && sc<100){
     $('.phython').css('transform','translateX(0)');
     $('.phython_t').css('transform','translateX(0)');
    }
    else if (sc>100&&sc<140) {
      $('.phython').css('transform','translateX(-200%)')
      $('.phython_t').css('transform','translateX(230%)');
      $('.JS').css('transform','translateX(0)');
      $('.JS_t').css('transform','translateX(0)');
    }
    else if (sc>100) {
      $('.JS_t').css('transform','translateX(-260%)')
      $('.JS').css('transform','translateX(200%)');
      $('.PHP').css('transform','translateX(0)');
      $('.PHP_t').css('transform','translateX(0)');
    }
    else {
      $('.PHP').css('transform','translateX(-200%)');
      $('.PHP_t').css('transform','translateX(600%)');
    }
  })
});