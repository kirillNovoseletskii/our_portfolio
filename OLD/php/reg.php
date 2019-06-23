<?/*
  require '../php/conn.php';
    $username = $_POST['username'];
    $passwordU = $_POST['password'];
    $email = $_POST['email'];
    $password = password_hash($passwordU, PASSWORD_DEFAULT);

    function genRandStr($length = 10) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
    };

    $randL = genRandStr(16);

    $_SESSION['randl'] = $randL;
    $_SESSION['usernamecheck'] = $username;
    $_SESSION['emailcheck'] = $email;
    $_SESSION['passwordcheck'] = $password;


    $mes = 'Link: http://localhost/check/?id='.$randL;

    mail($email, 'Verify e-mail', $mes);

    $msgOutAuth = 'Message send. Check your e-mail now.';

    /*$query = "INSERT INTO auth (username, password, email) VALUES ('$username', '$password', '$email')";
    $result = mysqli_query($conn, $query);

    if ($result) {
      $msgOutAuth = 'Вы успешно зарегистрированы!';
      $_SESSION['username'] = $username;
    }
    else {
      $msgOutAuth = 'Произошла ошибка на сервере :/ Ваш username уже занят! Оригинальность ;D';
    }
    echo $msgOutAuth;*/
?>
