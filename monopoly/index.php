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
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <?php
  if ($_SESSION['name'] == '') {
    echo '<form class="" action="login.php" method="post"><div class="form-group">
    <input type="text" class="form-control form-control-lg" name="name" placeholder="Name">
    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
    <button type="submit" class="btn btn-primary" name="button">Log in</button>
    '.$_SESSION["message"].'
    </div>
    </form>';
  }
  else {
    echo '<div class="card text-center">
      <div class="card-header">
        Monopoly
      </div>
      <div class="card-body">
        <h5 class="card-title">Welcome, '.$_SESSION["name"].'!</h5>
        <p class="card-text" style="font-size: 0.6em;">Your balance right now: </p>
        <p id="balance" style="font-size: 1em;" class="btn btn-primary btn-lg">'.$_SESSION['balance'].'</p>
      </div>
      <div class="card-footer text-muted">
        <a class="btn btn-outline-secondary" href="logout.php">Log out</a>
      </div>
    </div>';
    ?>
    <script type="text/javascript">


    setInterval(function() {
      $.ajax({
        url: 'refresh.php',
        cache: false,
        success: function (data) {
          $('#balance').html(data);
        }
      });
    }, 2000)


    </script><?
  }
  ?>

</body>

</html>
