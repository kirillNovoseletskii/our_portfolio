<?
  header('Content-Type: text/html; charset=UTF-8');

  $lang = $_GET['lang'];
  if ($lang == 'ru') {
    require_once 'mainru.php';
  }
  else if ($lang == 'en') {
    require_once 'mainen.php';
  }
  else if ($lang == 'ua') {
    require_once 'mainua.php';
  }
  else {
    require_once 'mainen.php';
  }
