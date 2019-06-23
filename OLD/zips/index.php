<?php

  $goto = $_GET['goto'];

  $location = '/html/main.php';

  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  if ($lang == 'ru') {
    header('Location: '.$location.'?lang=ru&goto='.$goto);
  }
  else if ($lang == 'en') {
    header('Location: '.$location.'?lang=en&goto='.$goto);
  }
  else if ($lang == 'ua') {
    header('Location: '.$location.'?lang=ua&goto='.$goto);
  }
  else {
    header('Location: '.$location.'?lang=en&goto='.$goto);
  }
?>
