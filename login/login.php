<? session_start(); ?>
<?

  require '../php/conn.php';
  if (isset($_POST['username']) and isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM auth WHERE username='$username'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    //$count = mysqli_num_rows($result);


    if (password_verify($password, $row['password'])) {
      $email = $row['email'];
      $username = $row['username'];

      $_SESSION['username'] = $username;
      $_SESSION['email'] = $email;
      echo 'Successfully logged in. Refresh the page.';

    }
    else {
      echo 'Error';
    }
  }

  mysqli_close($conn);
  ?>
