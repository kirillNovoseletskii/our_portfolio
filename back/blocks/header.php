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
