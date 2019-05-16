var Jquery = $(document).ready(function () {
  $('.nav-mobile').click(function () {
    $('.mob-menu').removeClass('close_menu');
  });
  $('.close').click(function (){
    $('.mob-menu').addClass('close_menu')
  })
  var windowScroll = $(window).scroll(function(){
    var sc  = $(this).scrollTop();
    console.log(sc.toFixed(0));
    $('.background').css('transform','translateY('+sc*0.5+'px)')
    $('.title').css('margin-bottom',sc*-0.1+30+'px')
    if(sc>0){
      $('.top').css('transform','translate(0)')
    }
    else{
      $('.top').css('transform','translate(300px)')
    }
    if (sc>=790){
      $('.txt').css({
        'transform':' translate(0)'
      })
    }
    else{
      $('.first').css('transform',' translate(-100%)')
      $('.second').css('transform',' translate(100%)')
    
    };
    
  });
$('.top').click(function() {
  $('body,html').animate({scrollTop:0},100);
  });
  function preloaderStart() {
    $(".load").show('slow');
    setTimeout(function() {
      $(".load").css({
        'opacity':0,
        'transform':'scale(2)',
      });
    }, 2200);
    setTimeout(function() {
      $(".load").css({
        'display':'none'
      });
    },3000);
  };

  preloaderStart()
});
new Vue({
  el:'#app',
  data:{
    
  },
})