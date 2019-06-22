<?
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
  $title = "Verify";
  require_once "../blocks/head.php";
?>
  </head>
  <body>

    <?
      require '../php/conn.php';
      //require '../reg/index.php';


      $username = $_SESSION['usernamecheck'];
      $passwordU = $_SESSION['passwordcheck'];
      $email = $_SESSION['emailcheck'];
      $password = password_hash($passwordU, PASSWORD_DEFAULT);
      $link = $_GET['id'];
      if ($link == '' && $_SESSION['randl'] == '') {
        die('404 Not Found');
      }
      if ($link == $_SESSION['randl']) {
        $query = "INSERT INTO auth (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($conn, $query);

        if ($result) {
          $msgOutAuth = 'You are registered.';
          $_SESSION['usernamecheck'] = '';
          $_SESSION['passwordcheck'] = '';
          $_SESSION['emailcheck'] = '';
          $_SESSION['randl'] = '';
          $_SESSION['username'] = $username;
          $_SESSION['email'] = $email;
        }
        else {
          $msgOutAuth = 'Fatal error. This username might be already busy. Try another one.';
        }
      }
      else {
        echo "404 Not Found";
      }
    ?>


    <div class="">
      <?=$msgOutAuth?>
    </div>

  </body>
</html>
