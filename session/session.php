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
