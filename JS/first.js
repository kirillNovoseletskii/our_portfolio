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
    $('.nav').css(
      'transform',`translateY(${sc*-1}px)`
    );
    $('.background').css('transform','translateY('+sc*0.5+'px)')
    $('.title').css('margin-bottom',`${sc*-0.1+30}px`)
    if(sc>0){
     
      $('.top').css('transform','translate(0)');
    }
    else{
      $('.top').css('transform','translate(300px)');
    }
    if(sc>700){
      $('.nav').css({
        'border-bottom':'2px solid black',
      })
    }
    else{
      $('.nav').css({
        'border-bottom':'none',
      })
    }
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
    count:0,
    SKILLS:'SKILLS'
  },
  methods: {
    add:function(){
      alert('d')
    }
  },
})
AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 100, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});