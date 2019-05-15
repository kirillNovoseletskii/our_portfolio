<? session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
  $title = "Document";
  require_once "../blocks/head.php";

?>
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script type="text/javascript" src="../js/reg.js"></script>
  </head>
  <body>
    <? require_once '../blocks/header.php'; ?>

    <?
      require '../php/conn.php';
      if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $passwordU = $_POST['password'];
        $email = $_POST['email'];
        //$password = password_hash($passwordU, PASSWORD_DEFAULT);

        function genRandStr($length = 10) {
          $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
          $charactersLength = strlen($characters);
          $randomString = '';
          for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
          }
          return $randomString;
        };

        $randL = genRandStr(16);

        $_SESSION['randl'] = $randL;
        $_SESSION['usernamecheck'] = $username;
        $_SESSION['emailcheck'] = $email;
        $_SESSION['passwordcheck'] = $passwordU;


        $mes = 'Link: http://localhost/check/?id='.$randL;

        mail($email, 'Verify e-mail', $mes);

        $msgOutAuth = 'Message send. Check your e-mail now.';

        /*$query = "INSERT INTO auth (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($conn, $query);

        if ($result) {
          $msgOutAuth = 'Вы успешно зарегистрированы!';
          $_SESSION['username'] = $username;
        }
        else {
          $msgOutAuth = 'Произошла ошибка на сервере :/ Ваш username уже занят! Оригинальность ;D';
        }*/
      }
    ?>



    <?=$msgOutAuth?>

  <?  if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo "Hello, ".$username;
        echo "Вы уже вошли. <a href='../login/logout.php'>Выйти?</a>";
      }
      else {
        ?><form method="post" id="formReg">

          <input type="text" id="username" name="username" placeholder="Username" required/>
          <input type="email" id="email" name="email" placeholder="E-mail" required/>
          <input type="password" id="password" name="password" placeholder="Password" required/>
          <button type="button" id="submit">Register</button>

        </form>
        <div id="messageShow">

        </div><?
      }
  ?>

    <? mysqli_close($conn);
    //require_once "../blocks/footer.php"; ?>
  </body>
</html>
