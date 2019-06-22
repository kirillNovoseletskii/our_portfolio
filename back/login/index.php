<? require_once "../blocks/config.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php
    $title = "Document";
    require_once "../blocks/head.php";
  ?>
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  <script type="text/javascript" src="../js/login.js"></script>
</head>

  </head>
  <body>

    <? //require_once '../blocks/header.php'; ?>




    <?/*

      require '../php/conn.php';
      if (isset($_POST['username']) and isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM auth WHERE username='$username'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $row = mysqli_fetch_array($result);
        //$count = mysqli_num_rows($result);


        if (password_verify($password, $row['password'])) {
          $_SESSION['username'] = $username;
          $_SESSION['email'] = $email;
          echo "Successfully logged in.";

        }
        else {
          echo 'Error';
        }
      }*/
      if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo "Hello, ".$username."!<br />";
        echo "You are already logged in. <a href='logout.php'>Log out?</a>";
      }
      else {
        ?><form method="post">

          <input type="text" id='username' name="username" placeholder="Username" required/>
          <input type="password" id="password" name="password" placeholder="Password" required/>
          <button type="button" id='submit'>Log in</button>
        </form><?
      }
    ?>

<div id="messageShow">

</div>

  <?
  //Фигня какая-то с футером :/  Чекни, убери комент ниже
  //require_once '../blocks/footer.php'; ?>
  </body>
</html>
