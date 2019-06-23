<?
$idfor = $_POST['idfor'];
$todon = $_POST['todon'];
if ($todon == '') {
  header("Location: index.php");
  die();
}

$conn = mysqli_connect('mysql.zzz.com.ua', 'dataserver', 'IL0veP0lit4450');
$select_db = mysqli_select_db($conn, 'itsrerades');
$sqli_select = "SELECT `balance` FROM `monopoly` WHERE id='$idfor'";
$result = mysqli_query($conn, $sqli_select);
$row = mysqli_fetch_array($result);

$balance = $row['balance'];

$todos = strtok($todon, ' ');
$num = substr($todon, 2);
if ($todos == '+') {
  $nb = $balance + $num;
}
elseif ($todos == '-') {
  $nb = $balance - $num;
}
else {
  $nb = $todos;
}


$sql = "UPDATE `monopoly` SET `balance`='$nb' WHERE id='$idfor'";
$result = mysqli_query($conn, $sql);
header("Location: index.php");
?>
