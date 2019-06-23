<?
  session_start();

  $conn = mysqli_connect('mysql.zzz.com.ua', 'dataserver', 'IL0veP0lit4450');
  $select_db = mysqli_select_db($conn, 'itsrerades');
  $namepost = $_POST["name"];
  $a = $_POST['password'];
  $sqli_select = "SELECT * FROM `monopoly` WHERE name='$namepost'";
  $result = mysqli_query($conn, $sqli_select);
  $row = mysqli_fetch_array($result);

  if ($row['name'] == '') {
    $_SESSION['message'] = "No user found";
  }
  elseif ($a == $row['password']) {
      $_SESSION['message'] = 'DONE';
      $_SESSION['name'] = $row['name'];
      $_SESSION['password'] = $row['password'];
      $_SESSION['balance'] = $row['balance'];
    }
    else {
    $_SESSION['message'] = "Wrong password. ".$a.'!! '.$_POST["password"].' !!'.$row['password'];
    }

  //$_SESSION['message'] = $row['name'].' => '.$row['password'].' => '.$namepost.' => '.$passpost.' =>>>> '.$row['balance'];
  header('Location: index.php')

?>
