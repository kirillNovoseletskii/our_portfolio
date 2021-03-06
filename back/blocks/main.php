
<!DOCTYPE html>
<head>
<?php
  $title = "Document";
  require_once "../blocks/head.php";
?>
</head>

<body>

  <div class="load">
      <div class="bg">
          <div class="cube">
            <div class="top"></div>
            <div class="right"></div>
            <div class="left"></div>
            <div class="front"></div>
            <div class="back"></div>
            <div class="bottom"></div>
          </div>
        </div>
  </div>
  <div id="particles-js"></div>


  <?php
    require_once '/blocks/header.php';
  ?>
  <div class="title">

    <h1>PORT<span class="folio">FOLIO</span> </h1>
  </div>
  </header>

  <?  if (isset($_SESSION['username'])) {
      $username = $_SESSION['username'];
      echo "Hello, ".$username;
      echo "<a href='/mycab'>Profile</a>";
      echo "<a href='/login/logout.php'>Log out</a>";
      }
      else {
        echo "<a href='/reg'>Register</a>";
        echo "<a href='/login'>Log in</a>";
      }
  ?>

<main id = 'app' class="main">
      <i class="fas fa-angle-right angle"></i>
      <i class="fas fa-angle-left angle"></i>
    <div class="wrapper cont">
        
     <div class="skills">
        <h1 class = 'skill_title'>{{SKILLS}}</h1>
        <div class="front_end-block">
          <div class="skill-block">
    
            <div data-aos="fade-right" class="slill-logo">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="156px" height="261px" viewBox="0 0 256 361" version="1.1" preserveAspectRatio="xMidYMid">
                <g>
                    <path d="M255.554813,70.7657143 L232.31367,331.125451 L127.843868,360.087912 L23.6617143,331.166242 L0.445186813,70.7657143 L255.554813,70.7657143 L255.554813,70.7657143 Z" fill="#E44D26"/>
                    <path d="M128,337.950242 L212.416703,314.546637 L232.277802,92.0573187 L128,92.0573187 L128,337.950242 L128,337.950242 Z" fill="#F16529"/>
                    <path d="M82.8202198,155.932132 L128,155.932132 L128,123.994725 L47.917011,123.994725 L48.6814945,132.562989 L56.530989,220.572835 L128,220.572835 L128,188.636132 L85.7389011,188.636132 L82.8202198,155.932132 L82.8202198,155.932132 Z" fill="#EBEBEB"/>
                    <path d="M90.0177582,236.54189 L57.957978,236.54189 L62.4323516,286.687648 L127.853011,304.848879 L128,304.808088 L128,271.580132 L127.860044,271.617407 L92.2915165,262.013187 L90.0177582,236.54189 L90.0177582,236.54189 Z" fill="#EBEBEB"/>
                    <path d="M24.1807473,0 L40.4107253,0 L40.4107253,16.0351648 L55.2573187,16.0351648 L55.2573187,0 L71.488,0 L71.488,48.5584176 L55.258022,48.5584176 L55.258022,32.2981978 L40.4114286,32.2981978 L40.4114286,48.5584176 L24.1814505,48.5584176 L24.1814505,0 L24.1807473,0 L24.1807473,0 Z" fill="#000000"/>
                    <path d="M92.8309451,16.1026813 L78.5427692,16.1026813 L78.5427692,0 L123.356835,0 L123.356835,16.1026813 L109.06233,16.1026813 L109.06233,48.5584176 L92.8316484,48.5584176 L92.8316484,16.1026813 L92.8309451,16.1026813 L92.8309451,16.1026813 Z" fill="#000000"/>
                    <path d="M130.469275,0 L147.392703,0 L157.802901,17.061978 L168.202549,0 L185.132308,0 L185.132308,48.5584176 L168.969143,48.5584176 L168.969143,24.4901978 L157.802901,41.7554286 L157.523692,41.7554286 L146.349714,24.4901978 L146.349714,48.5584176 L130.469275,48.5584176 L130.469275,0 L130.469275,0 Z" fill="#000000"/>
                    <path d="M193.20967,0 L209.444571,0 L209.444571,32.5077802 L232.268659,32.5077802 L232.268659,48.5584176 L193.20967,48.5584176 L193.20967,0 L193.20967,0 Z" fill="#000000"/>
                    <path d="M127.889582,220.572835 L167.216527,220.572835 L163.509451,261.992791 L127.889582,271.606857 L127.889582,304.833407 L193.362286,286.687648 L193.842637,281.291956 L201.347516,197.212132 L202.126769,188.636132 L127.889582,188.636132 L127.889582,220.572835 L127.889582,220.572835 Z" fill="#FFFFFF"/>
                    <path d="M127.889582,155.854066 L127.889582,155.932132 L205.032791,155.932132 L205.673495,148.753582 L207.128615,132.562989 L207.892396,123.994725 L127.889582,123.994725 L127.889582,155.854066 L127.889582,155.854066 Z" fill="#FFFFFF"/>
                </g>
            </svg>
            </div>
            <div data-aos="fade-left" class="logo-title">
              <h1>HTML5</h1>
              <div class="hidden">
                <p>
                HTML5 - язык гиппертекстовой разметки
                </p>
              </div>
            </div>
            
          </div>
          <div class="skill-block">
            <div data-aos="fade-right" class="logo-title">
              <h1>CSS3</h1>
              <div class="hidden">
                <p>
                CSS3
                </p>
              </div>
            </div>
            <div data-aos="fade-left" class="slill-logo">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="156px" height="261px" viewBox="0 0 256 361" version="1.1" preserveAspectRatio="xMidYMid">
                <g>
                    <path d="M127.843868,360.087912 L23.6617143,331.166242 L0.445186813,70.7657143 L255.554813,70.7657143 L232.31367,331.125451 L127.843868,360.087912 L127.843868,360.087912 Z" fill="#264DE4"/>
                    <path d="M212.416703,314.546637 L232.277802,92.0573187 L128,92.0573187 L128,337.950242 L212.416703,314.546637 L212.416703,314.546637 Z" fill="#2965F1"/>
                    <path d="M53.6685714,188.636132 L56.530989,220.572835 L128,220.572835 L128,188.636132 L53.6685714,188.636132 L53.6685714,188.636132 Z" fill="#EBEBEB"/>
                    <path d="M47.917011,123.994725 L50.8202198,155.932132 L128,155.932132 L128,123.994725 L47.917011,123.994725 L47.917011,123.994725 Z" fill="#EBEBEB"/>
                    <path d="M128,271.580132 L127.860044,271.617407 L92.2915165,262.013187 L90.0177582,236.54189 L57.957978,236.54189 L62.4323516,286.687648 L127.853011,304.848879 L128,304.808088 L128,271.580132 L128,271.580132 Z" fill="#EBEBEB"/>
                    <path d="M60.4835165,0 L99.1648352,0 L99.1648352,16.1758242 L76.6593407,16.1758242 L76.6593407,32.3516484 L99.1648352,32.3516484 L99.1648352,48.5274725 L60.4835165,48.5274725 L60.4835165,0 L60.4835165,0 Z" fill="#000000"/>
                    <path d="M106.901099,0 L145.582418,0 L145.582418,14.0659341 L123.076923,14.0659341 L123.076923,16.8791209 L145.582418,16.8791209 L145.582418,49.2307692 L106.901099,49.2307692 L106.901099,34.4615385 L129.406593,34.4615385 L129.406593,31.6483516 L106.901099,31.6483516 L106.901099,0 L106.901099,0 Z" fill="#000000"/>
                    <path d="M153.318681,0 L192,0 L192,14.0659341 L169.494505,14.0659341 L169.494505,16.8791209 L192,16.8791209 L192,49.2307692 L153.318681,49.2307692 L153.318681,34.4615385 L175.824176,34.4615385 L175.824176,31.6483516 L153.318681,31.6483516 L153.318681,0 L153.318681,0 Z" fill="#000000"/>
                    <path d="M202.126769,188.636132 L207.892396,123.994725 L127.889582,123.994725 L127.889582,155.932132 L172.892132,155.932132 L169.98611,188.636132 L127.889582,188.636132 L127.889582,220.572835 L167.216527,220.572835 L163.509451,261.992791 L127.889582,271.606857 L127.889582,304.833407 L193.362286,286.687648 L193.842637,281.291956 L201.347516,197.212132 L202.126769,188.636132 L202.126769,188.636132 Z" fill="#FFFFFF"/>
                </g>
            </svg>
            </div>
          </div>
          <div class="skill-block">
            <div data-aos="fade-right" @click = 'count++' class="js slill-logo">
              
            </div>
            <div data-aos="fade-left" class="logo-title">
              <h1 class = 'js-title'>JS</h1>
              <div class="hidden">
                <p>
                  JavaScript
                </p>
              </div>
            </div>
          </div>
        </div>
     </div>
     <div class="back_end-block"></div>
     <div class="about_us">
       <div class="about_title">

       </div>
     </div>
    </div>
  </main>




  <?php
    require_once '/blocks/footer.php';
  ?>


<script type="text/javascript">
$(document).ready(function () {
  $('.nav-mobile').click(function () {
    $('.mob-menu').removeClass('close_menu');
  });
  $('.close').click(function (){
    $('.mob-menu').addClass('close_menu')
  })
  $(window).scroll(function(){
    var sc  = $(this).scrollTop();
    console.log(sc.toFixed(0));
    $('.background').css('transform','translateY('+sc*1+'px)')
    $('.title').css('margin-bottom',sc*-0.1+30+'px')
  });


  $(".load").hide();



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
  });

</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="../JS/first.js"></script>
<script src="../particles.js-master/particles.js"></script>
<script src="../particles.js-master/demo/js/app.js"></script>
</body>
</html>

<!--|  |-->
