<? require_once "../blocks/config.php"; ?>

<!DOCTYPE html>
<head>
<?php
  $title = "Feedback";
  require_once "../blocks/head.php";
?>
</head>

<body>

   <?php
    require_once '../blocks/header.php';
    ?>
</header>

  <main class="main">
    <form method="post" id="formFeedback">
      <div class="form-group">
        <input type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <textarea class="form-control" id="message" name="message" style="resize: none;" placeholder="Write yout message" aria-label="With textarea"></textarea>
      </div>
      <button type="button" id='submit' class="btn btn-secondary">Submit</button>
    </form>
    <div id="messageShow">

    </div>
  </main>

<style>
.main{
  display:flex;
  align-items:flex-start;
}
</style>

  <!-- SCRIPT && STYLE -->

<? require_once '../blocks/footer.php'; ?>
<script type="text/javascript" src="/js/script.js">

</script>
</body>
</html>

<!--|  |-->
