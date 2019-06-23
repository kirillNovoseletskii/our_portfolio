<? require_once '../blocks/config.php'; ?>
<head>
  <?php
    $title = "My Cabinet";
    require_once "../blocks/head.php";
  ?>

</head>
<body>
<?
  /*require_once '../php/conn.php';
  $username = $_SESSION["username"];
  $query = "SELECT * FROM auth WHERE username='$username'";
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $row = mysqli_fetch_array($result);

  $email = $row['email'];

  if (isset($_POST['opw']) && isset($_POST['newpw1']) && isset($_POST['newpw2'])) {
    if ($_POST['newpw1'] == $_POST['newpw2']) {
      $opw = $_POST['opw'];
      $newpw1 = $_POST['newpw1'];
      $newpw2 = $_POST['newpw2'];
      //echo $opw." ".$newpw1." ".$newpw2." ".$row['password']." end" ;
      if (password_verify($opw, $row['password'])) {
        $passwordU = password_hash($newpw1, PASSWORD_DEFAULT);
        $id = $row['id'];
        $query = "UPDATE auth SET password = '$passwordU' WHERE id='$id'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        if (!$result) {
          echo "Something went wrong";
        }
        else {
          echo "Updated successfully.";
        }
      }
      else {
        echo "Wrong password";
      }
    }
    else {
      echo "Passwords are different.";
    }
  }*/

?>
<div class="container">
  <p>
    Your username: <?=$_SESSION['username']?>
  </p>
  <p>
    Your e-mail: <?=$_SESSION['email']?>
  </p>
  <div id='changepw'>
    <form method="post" id='formPw'>
      <input type="password" placeholder="Old password" id="opw" name="opw" />
      <input type="password" placeholder="New password" id="newpw1" name="newpw1" />
      <input type="password" placeholder="New password again" id="newpw2" name="newpw2" />
      <button type="button" id="submit">Change</button>
    </form>
    <br />
    <div id="messageShow">

    </div>
  </div>

</div>

<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script type="text/javascript" src="../js/mycab.js"></script>

</body>

<!--<script type="text/javascript">


</script>-->
