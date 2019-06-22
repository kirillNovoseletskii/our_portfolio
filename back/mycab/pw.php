<? session_start(); ?>

<?
require_once '../php/conn.php';
$username = $_SESSION['username'];
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
}
?>
