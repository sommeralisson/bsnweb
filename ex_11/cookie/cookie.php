<?php
  session_start();

  if (isset($_POST['user']) && isset($_POST['pass'])) {
    $sValidUser = 'abc';
    $sValidPass = '123';

    $sUser = $_POST['user'];
    $sPass = $_POST['pass'];

    if ($sUser === $sValidUser && $sPass === $sValidPass) {
      $_SESSION['authenticated'] = true;
      $_SESSION['user']          = $sUser;
      $_SESSION['pass']          = $sPass;

      setcookie('user', $sUser, time() + 7 * 24 * 60 * 60);
      setcookie('pass', $sPass, time() + 7 * 24 * 60 * 60);

      $_SESSION['started_session'] = time();
      $_SESSION['last_request']    = time();

      header('Location: validation.php');
      exit();
    } else {
      echo "Usuário ou senha inválidos. Tente novamente.";
    }
  } else {
    header('Location: index.php');
  }
?>
