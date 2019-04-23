<?php
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  if ($lang == 'ru') {
    header('Location: /html/main.php?lang=ru');
  }
  else if ($lang == 'en') {
    header('Location: /html/main.php?lang=en');
  }
  else if ($lang == 'ua') {
    header('Location: /html/main.php?lang=ua');
  }
  else {
    header('Location: /html/main.php?lang=en');
  }
?>
