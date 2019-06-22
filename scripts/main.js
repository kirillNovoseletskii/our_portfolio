$(document).ready(function () {
  $('.parallax').mousemove(function (e) { 
    // values: e.clientX, e.clientY, e.pageX, e.pageY
    var moveX = e.pageX;
    var moveY = e.pageY;
    $('.front').css({
      'transition':'0.2s',
      'transform':`translate(${moveX*-0.06}px ,${moveY*-0.06}px) scale(1.2)`,
    });
    $('.mid').css({
      'transition':'0.2s',
      'transform':`translate(${moveX*0.02}px ,${moveY*-0.02}px) scale(1.4) rotateY(180deg)`,
    });
    $('.back').css({
      'transition':'0.2s',
      'transform':` translate(${moveX*-0.01}px ,${moveY*-0.01}px) scale(1.8) rotateY(180deg)`,
    });
    console.log(`x${moveX}`)
  });
  $('.parallax').mouseleave(function () { 
    $('.front').css({
      'transition':'0.4s',
      'transform':`translate(0px ,0px) scale(1.2)`,
    });
    $('.mid').css({
      'transition':'0.4s',
      'transform':`translate(0px ,0px) scale(1.4) rotateY(180deg)`,
    });
    $('.back').css({
      'transition':'0.4s',
      'transform':`translate(0px ,0px) scale(1.8) rotateY(180deg)`,
    });
  });
  $(window).scroll(function(){
    var sc  = $(this).scrollTop();
  });
});