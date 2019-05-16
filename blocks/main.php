<<<<<<< HEAD
=======
<? require_once "../blocks/config.php"; ?>
>>>>>>> 70744861cd458fa9f440adce061143588785175f

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

  <main class="main">
    <div class="about_us">
      <h1 class="students">We are students, but can do much...</h1>
      <p class="text students">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, nihil ipsam. Praesentium necessitatibus iste aliquid pariatur voluptates cupiditate ipsa quae, cum delectus maiores laborum dicta molestias, aut officia libero dolores consectetur nam neque illo dolore voluptatum eveniet repellat! Iusto, ducimus minus, nam officia, qui consectetur nesciunt maiores veritatis autem amet dolor blanditiis sit obcaecati? Hic ullam ab, magni quae odit illo doloribus perferendis nihil, cumque fugit ut molestiae. Ullam amet praesentium, sit eveniet minima suscipit tenetur! Atque quae architecto repudiandae aliquam aliquid, provident quas commodi sequi accusantium ipsam, omnis tempore.</p>
    <h1 class = 'from'>Where are we from?</h1>
    <p class="text from">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum accusantium doloribus alias sit. Soluta numquam aliquam sint ex laborum quasi error labore perferendis harum, id, doloremque deserunt iure blanditiis laudantium alias. Sit quos, corporis libero voluptate magni ducimus. Eaque, voluptatibus non eos doloremque ad perspiciatis consequuntur nihil quo corrupti a aperiam, placeat quod unde veritatis sint, suscipit architecto ex! Velit quis fugit quia placeat modi eligendi vero dolores architecto. At modi debitis aperiam numquam doloremque quia obcaecati! Quasi veniam exercitationem odio fuga nostrum voluptas possimus, tempora fugiat asperiores delectus laborum saepe eum in esse ut pariatur distinctio a? Blanditiis, voluptatem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quas necessitatibus sit accusamus aliquam, repellat non aut eveniet modi harum quod nemo ad! At quos earum culpa fugit fuga voluptatibus distinctio repudiandae eveniet nostrum pariatur numquam ad magni eos ducimus recusandae cum, magnam saepe ipsam esse nisi eum? Facere, nesciunt enim! Facere veniam voluptatum minima, velit deserunt temporibus tenetur nulla enim a officiis. Asperiores doloribus, suscipit velit maxime, laboriosam corrupti porro obcaecati, voluptates accusantium aspernatur perspiciatis. Dicta soluta commodi vel nostrum, quam expedita dignissimos ipsam incidunt reiciendis quibusdam hic impedit modi quos, blanditiis assumenda officia possimus veniam sunt, neque aperiam.</p>
    </div>

   <div class="skills">
     <h1 class="Our">Our Skills</h1>
    <div class="boxes">
        <div class="box-skill">
            <div class="sphere">
              <h1>FRONT-END</h1>
              <div class="images">
                  <div class="img-skill">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100px" height="100px" viewBox="0 0 256 361" version="1.1" preserveAspectRatio="xMidYMid">
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
                    <div class="img-skill">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100px" height="100px" viewBox="0 0 256 361" version="1.1" preserveAspectRatio="xMidYMid">
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
                    <div class="img-skill">
                      <img src="../images/js-logo.png" width="100px" height="100px">

              </div>
            </div>
            </div>
            <div class="shadow"></div>
        </div>
        <div class="box-skill">
            <div class="sphere">
              <h1>BACK-END</h1>
              <div class="images">
                <div class="img-skill">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100px" height="100px" viewBox="0 0 256 135" version="1.1" preserveAspectRatio="xMidYMid">
                      <defs>
                        <radialGradient id="radialGradient-1" cx="0.8366" cy="-125.811" r="363.0565" gradientTransform="matrix(0.463 0 0 0.463 76.4644 81.9182)" gradientUnits="userSpaceOnUse">
                          <stop offset="0" style="stop-color:#FFFFFF"/>
                          <stop offset="0.5" style="stop-color:#4C6B97"/>
                          <stop offset="1" style="stop-color:#231F20"/>
                        </radialGradient>
                      </defs>
                      <g>
                        <ellipse fill="url(#radialGradient-1)" cx="128" cy="67.3" rx="128" ry="67.3"/>
                        <ellipse fill="#6181B6" cx="128" cy="67.3" rx="123" ry="62.3"/>
                        <g>
                          <path fill="#FFFFFF" d="M152.9,87.5c0,0,6.1-31.4,6.1-31.4c1.4-7.1,0.2-12.4-3.4-15.7c-3.5-3.2-9.5-4.8-18.3-4.8h-10.6l3-15.6     c0.1-0.6,0-1.2-0.4-1.7c-0.4-0.5-0.9-0.7-1.5-0.7h-14.6c-1,0-1.8,0.7-2,1.6l-6.5,33.3c-0.6-3.8-2-7-4.4-9.6     c-4.3-4.9-11-7.4-20.1-7.4H52.1c-1,0-1.8,0.7-2,1.6L37,104.7c-0.1,0.6,0,1.2,0.4,1.7c0.4,0.5,0.9,0.7,1.5,0.7h14.7     c1,0,1.8-0.7,2-1.6l3.2-16.3h10.9c5.7,0,10.6-0.6,14.3-1.8c3.9-1.3,7.4-3.4,10.5-6.3c2.5-2.3,4.6-4.9,6.2-7.7l-2.6,13.5     c-0.1,0.6,0,1.2,0.4,1.7s0.9,0.7,1.5,0.7h14.6c1,0,1.8-0.7,2-1.6l7.2-37h10c4.3,0,5.5,0.8,5.9,1.2c0.3,0.3,0.9,1.5,0.2,5.2     l-5.8,29.9c-0.1,0.6,0,1.2,0.4,1.7c0.4,0.5,0.9,0.7,1.5,0.7H151C151.9,89.1,152.7,88.4,152.9,87.5z M85.3,61.5     c-0.9,4.7-2.6,8.1-5.1,10c-2.5,1.9-6.6,2.9-12,2.9h-6.5l4.7-24.2h8.4c6.2,0,8.7,1.3,9.7,2.4C85.8,54.2,86.1,57.3,85.3,61.5z"/>
                          <path fill="#FFFFFF" d="M215.3,42.9c-4.3-4.9-11-7.4-20.1-7.4h-28.3c-1,0-1.8,0.7-2,1.6l-13.1,67.5c-0.1,0.6,0,1.2,0.4,1.7     c0.4,0.5,0.9,0.7,1.5,0.7h14.7c1,0,1.8-0.7,2-1.6l3.2-16.3h10.9c5.7,0,10.6-0.6,14.3-1.8c3.9-1.3,7.4-3.4,10.5-6.3     c2.6-2.4,4.8-5.1,6.4-8c1.6-2.9,2.8-6.1,3.5-9.6C220.9,54.7,219.6,47.9,215.3,42.9z M200,61.5c-0.9,4.7-2.6,8.1-5.1,10     c-2.5,1.9-6.6,2.9-12,2.9h-6.5l4.7-24.2h8.4c6.2,0,8.7,1.3,9.7,2.4C200.6,54.2,200.9,57.3,200,61.5z"/>
                        </g>
                        <g>
                          <path fill="#000004" d="M74.8,48.2c5.6,0,9.3,1,11.2,3.1c1.9,2.1,2.3,5.6,1.3,10.6c-1,5.2-3,9-5.9,11.2c-2.9,2.2-7.3,3.3-13.2,3.3     h-8.9l5.5-28.2H74.8z M39,105h14.7l3.5-17.9h12.6c5.6,0,10.1-0.6,13.7-1.8c3.6-1.2,6.8-3.1,9.8-5.9c2.5-2.3,4.5-4.8,6-7.5     c1.5-2.7,2.6-5.7,3.2-9c1.6-8,0.4-14.2-3.5-18.7c-3.9-4.5-10.1-6.7-18.6-6.7H52.1L39,105z"/>
                          <path fill="#000004" d="M113.3,19.6h14.6l-3.5,17.9h13c8.2,0,13.8,1.4,16.9,4.3c3.1,2.9,4,7.5,2.8,13.9L151,87.1h-14.8l5.8-29.9     c0.7-3.4,0.4-5.7-0.7-6.9c-1.1-1.2-3.6-1.9-7.3-1.9h-11.7l-7.5,38.7h-14.6L113.3,19.6z"/>
                          <path fill="#000004" d="M189.5,48.2c5.6,0,9.3,1,11.2,3.1c1.9,2.1,2.3,5.6,1.3,10.6c-1,5.2-3,9-5.9,11.2c-2.9,2.2-7.3,3.3-13.2,3.3     h-8.9l5.5-28.2H189.5z M153.7,105h14.7l3.5-17.9h12.6c5.6,0,10.1-0.6,13.7-1.8c3.6-1.2,6.8-3.1,9.8-5.9c2.5-2.3,4.5-4.8,6-7.5     c1.5-2.7,2.6-5.7,3.2-9c1.6-8,0.4-14.2-3.5-18.7c-3.9-4.5-10.1-6.7-18.6-6.7h-28.3L153.7,105z"/>
                        </g>
                      </g>
                    </svg>
                </div>
                <div class="img-skill">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100px" height="100px" viewBox="0 0 256 255" version="1.1" preserveAspectRatio="xMidYMid">
                      <defs>
                          <linearGradient x1="12.9593594%" y1="12.0393928%" x2="79.6388325%" y2="78.2008538%" id="linearGradient-1">
                              <stop stop-color="#387EB8" offset="0%"/>
                              <stop stop-color="#366994" offset="100%"/>
                          </linearGradient>
                          <linearGradient x1="19.127525%" y1="20.5791813%" x2="90.7415328%" y2="88.4290372%" id="linearGradient-2">
                              <stop stop-color="#FFE052" offset="0%"/>
                              <stop stop-color="#FFC331" offset="100%"/>
                          </linearGradient>
                      </defs>
                      <g>
                          <path d="M126.915866,0.0722755491 C62.0835831,0.0722801733 66.1321288,28.1874648 66.1321288,28.1874648 L66.2044043,57.3145115 L128.072276,57.3145115 L128.072276,66.0598532 L41.6307171,66.0598532 C41.6307171,66.0598532 0.144551098,61.3549438 0.144551098,126.771315 C0.144546474,192.187673 36.3546019,189.867871 36.3546019,189.867871 L57.9649915,189.867871 L57.9649915,159.51214 C57.9649915,159.51214 56.8001363,123.302089 93.5968379,123.302089 L154.95878,123.302089 C154.95878,123.302089 189.434218,123.859386 189.434218,89.9830604 L189.434218,33.9695088 C189.434218,33.9695041 194.668541,0.0722755491 126.915866,0.0722755491 L126.915866,0.0722755491 L126.915866,0.0722755491 Z M92.8018069,19.6589497 C98.9572068,19.6589452 103.932242,24.6339846 103.932242,30.7893845 C103.932246,36.9447844 98.9572068,41.9198193 92.8018069,41.9198193 C86.646407,41.9198239 81.6713721,36.9447844 81.6713721,30.7893845 C81.6713674,24.6339846 86.646407,19.6589497 92.8018069,19.6589497 L92.8018069,19.6589497 L92.8018069,19.6589497 Z" fill="url(#linearGradient-1)"/>
                          <path d="M128.757101,254.126271 C193.589403,254.126271 189.540839,226.011081 189.540839,226.011081 L189.468564,196.884035 L127.600692,196.884035 L127.600692,188.138693 L214.042251,188.138693 C214.042251,188.138693 255.528417,192.843589 255.528417,127.427208 C255.52844,62.0108566 219.318366,64.3306589 219.318366,64.3306589 L197.707976,64.3306589 L197.707976,94.6863832 C197.707976,94.6863832 198.87285,130.896434 162.07613,130.896434 L100.714182,130.896434 C100.714182,130.896434 66.238745,130.339138 66.238745,164.215486 L66.238745,220.229038 C66.238745,220.229038 61.0044225,254.126271 128.757101,254.126271 L128.757101,254.126271 L128.757101,254.126271 Z M162.87116,234.539597 C156.715759,234.539597 151.740726,229.564564 151.740726,223.409162 C151.740726,217.253759 156.715759,212.278727 162.87116,212.278727 C169.026563,212.278727 174.001595,217.253759 174.001595,223.409162 C174.001618,229.564564 169.026563,234.539597 162.87116,234.539597 L162.87116,234.539597 L162.87116,234.539597 Z" fill="url(#linearGradient-2)"/>
                      </g>
                  </svg>
                </div>
              </div>
            </div>
            <div class="shadow"></div>
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


</body>
</html>

<!--|  |-->
