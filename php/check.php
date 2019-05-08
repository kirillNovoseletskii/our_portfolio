<?php

  header('Content-Type: text/html; charset=UTF-8');

  $email = $_POST['email'];
  $message = $_POST['message'];

  $error = "";
  if (trim($email) == '') {
    $error = "email";
  }
  else if (trim($message) == '') {
    $error = "message";
  }
  else if (strlen($message) < 10) {
    $error = "messageNone";
  }

  if ($error != "") {
    header("Location: /feedback?fail=".$error);
    exit();
  }

  $mes = "E-mail: ".$email."\r\nСообщение: ".$message;

  $subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";

  $headers = "From: $email\r\nReply-to: $email\r\nContent-type:text/html;charset=utf-8\r\n";

  mail('itsrerades@gmail.com', $subject, $mes, $headers);

  header("Location: /feedback?fail=none");
?>
