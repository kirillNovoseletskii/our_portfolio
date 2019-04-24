<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
  $title = "Document";
  require_once "../blocks/head.php";

  $fail = $_GET['fail'];
?>
</head>

<body>

  <?php
    require_once '../blocks/header.php';

    if ($fail == "email") {
			$messageShow = "Incorrect e-mail";
		}
		else if ($fail == "message") {
			$messageShow = "Incorrect message";
		}
		else if ($fail == "messageNone") {
			$messageShow = "Too small message";
		}
		else if ($fail == "none") {
			$messageShow = "Sent";
		}
  ?>

  <main class="main">
    <form method="post" action="../php/check.php">
  <div class="form-group">
    <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <textarea class="form-control" name="message" style="resize: none;" placeholder="Write yout message" aria-label="With textarea"></textarea>
  </div>
  <button type="submit" class="btn btn-secondary">Submit</button>
</form>

  <?php

  echo $messageShow;

  ?>
  </main>



  <!-- SCRIPT && STYLE -->

<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="../JS/first.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</body>
</html>

<!--|  |-->
