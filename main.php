<? session_start(); ?>

<!DOCTYPE html>
<head>
<?php
  $title = "Document";
?>

<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
<meta charset="UTF-8">
<link rel="stylesheet" href="../styles/first.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?=$title?></title>

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


  <header class="header">
    <?php /*

      $url = $_SERVER['REQUEST_URI'];

      $goto = strtok($url, '?');

      $goto = substr($goto, 0, -1);

      $goto = substr($goto, 1);

      #$goto = strtok($goto, '/');

      if ($goto == "") $goto = 'main';

    */
    ?>


    <div class="mob-menu close_menu">
      <div class="close">
        <span class="close_line"></span>
        <span class="close_line"></span>
      </div>
      <div class="links">
          <ul class="nav-menu-mob">
              <li><a href="/" class = 'mob_link'>MAIN</a></li>
              <li><a href="#" class = 'mob_link'>PROJECTS</a></li>
              <li><a href="#" class = 'mob_link'>FEEDBACK</a></li>
              <li><a href="#" class = 'mob_link'>CONTACTS</a></li>
            </ul>
      </div>

    </div>
    <div class="parallax">
      <div class="background"></div>
    </div>
    <header class="header">
      <h1 class="mob-title">PORTFOLIO</h1>
      <div class="nav-mobile">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>
      <ul class="nav">
        <li><a href="/" class = 'header_link'>MAIN</a></li>
        <li><a href="#" class = 'header_link'>PROJECTS</a></li>
        <li><a href="/feedback" class = 'header_link'>FEEDBACK</a></li>
        <li><a href="#" class = 'header_link'>CONTACTS</a></li>
      </ul>



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
      <div class="wrapper cont">
       <div class="skills">
          <h1 class = 'skill_title'>SKILLS</h1>
          <div class="txt skill-text">
            <p class="txt first">
              Lorem ipsum, dolor sit<br>
              amet consectetur adipisicing elit.
              Aut architecto officiis consectetur
              animi fuga, fugit nisi omnis unde,
              aperiam eum blanditiis tempore duc<br>
              imus, ipsa doloribus! Dolor commodi
              numquam ipsa illum repellat consecte
              tur maiores illo corrupti, voluptas
            <br> placeat maxime sapiente facere! Consequatur assumenda earum ex vitae hic magnam soluta porro vel aspernatur, ratione nisi dolorem facere. Voluptatem necessitatibus, ipsam laboriosam harum, tenetur dignissimos labore eos, explicabo numquam modi consequatur aspernatur sequi? Maxime dicta eius nulla odio quod ipsam porro, repellendus aliquam accusantium consequatur quibusdam suscipit quisquam soluta at atque culpa eos quaerat nihil harum quo tempore quidem reiciendis commodi repellat? Error.
            </p>
            <br>
            <p class="txt second">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut architecto officiis consectetur animi fuga, fugit nisi omnis unde, aperiam eum blanditiis tempore ducimus, ipsa doloribus! Dolor commodi numquam ipsa illum repellat consectetur maiores illo corrupti, voluptas placeat maxime sapiente facere! Consequatur assumenda earum ex vitae hic magnam soluta porro vel aspernatur, ratione nisi dolorem facere. Voluptatem necessitatibus, ipsam laboriosam harum, tenetur dignissimos labore eos, explicabo numquam modi consequatur aspernatur sequi? Maxime dicta eius nulla odio quod ipsam porro, repellendus aliquam accusantium consequatur quibusdam suscipit quisquam soluta at atque culpa eos quaerat nihil harum quo tempore quidem reiciendis commodi repellat? Error.
              </p>
          </div>
       </div>
      </div>
    </main>




<footer class="footer">
    <ul class="soc">
      <li class="soc_item"><a href="#"><i class="fab fa-github"></i></a></li>
      <li class="soc_item"><a href="#"><i class="fab fa-vk"></i></a></li>
      <li class="soc_item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
      <li class="soc_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
      <li class="soc_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
    </ul>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  <script src="../JS/first.js"></script>
  <script src="../particles.js-master/particles.js"></script>
  <script src="../particles.js-master/demo/js/app.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</footer>


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
