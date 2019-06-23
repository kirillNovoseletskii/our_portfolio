<? session_start() ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Monopoly</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/timer.jquery/0.9.0/timer.jquery.js"></script>
</head>
<body>

  <?php
  session_start();

  $conn = mysqli_connect('mysql.zzz.com.ua', 'dataserver', 'IL0veP0lit4450');
  $select_db = mysqli_select_db($conn, 'itsrerades');

  /*$maxid = 0;
  $row = $this->db->query('SELECT MAX(id) FROM `monopoly`')->row();
  if ($row) {
  $maxid = $row->maxid;
}*/

/*$query = ('SELECT MAX(id) FROM `monopoly`');
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);

if ($row) {
  $maxid = $row->maxid;
}*/

$query = mysqli_query($conn, "SELECT MAX(id) AS 'maxid' FROM monopoly");
$row = mysqli_fetch_array($query);
$maxid = $row['maxid'];

//echo $maxid.' <= ';
echo '<div class="container">
  <div class="row">';
  for ($i=1; $i <= $maxid ; $i++) {
    $sqli_select = "SELECT * FROM `monopoly` WHERE id = '$i'";
    $result = mysqli_query($conn, $sqli_select);
    $row = mysqli_fetch_array($result);
    echo '<div class="col-sm-6" style="margin-top: 1em;"><div class="card" style="width: 18rem;">
    <div class="card-body">
    <p class="card-text-center">'.$row["name"].'
    <p class="btn btn-primary alight-center">'.$row["balance"].'</p>
    </p>
    <form method="post" action="readmin.php"><div class="form-group">
    <input type="text" class="form-control" id="todon" name="todon" autocomplete="off">
    <button type="submit" class="form-control" id="submit" name="button">Go</button>
    <input type="number" readonly class="form-control" name="idfor" value='.$i.' />
    </div>


    </form>
    </div>
    </div>
    </div>';
  }
  echo '</div></div>';


  $conn = mysqli_connect('mysql.zzz.com.ua', 'dataserver', 'IL0veP0lit4450');
  $select_db = mysqli_select_db($conn, 'itsrerades');
  $sqli_select = "SELECT * FROM `monopoly` WHERE name='$name'";
  $result = mysqli_query($conn, $sqli_select);
  $row = mysqli_fetch_array($result);
  ?>

  <script type="text/javascript">


  /*$('#submit').on("click", function() {
    var todon = $('#todon').val();
    var idfor = $('#idfor').val();
    $.ajax({
      url: 'readmin.php',
      cache: false,
      data: { "todon":todon, "idfor":idfor },
      type: post,
      success: function (data) {
        $('#todon').trigger('reset');
        alert(data);
      },
    });
  });*/


  /*setInterval(function() {
  $.ajax({
  url: 'refresh.php',
  cache: false,
  success: function (data) {
  $('#balance').html(data);
}
});
}, 2000);


</script>
</body>
</html>
