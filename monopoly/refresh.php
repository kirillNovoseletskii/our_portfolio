<?
  session_start();

  $conn = mysqli_connect('mysql.zzz.com.ua', 'dataserver', 'IL0veP0lit4450');
  $select_db = mysqli_select_db($conn, 'itsrerades');
  $name = $_SESSION['name'];
  $sqli_select = "SELECT `balance` FROM `monopoly` WHERE name='$name'";
  $result = mysqli_query($conn, $sqli_select);
  $row = mysqli_fetch_array($result);
  echo $row['balance'];
