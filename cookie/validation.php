<?php
  date_default_timezone_set('America/Sao_Paulo');
  session_start();

  if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: index.php');
    exit();
  }

  $_SESSION['last_request'] = time();

  if (isset($_SESSION['started_session'])) {
    $sSessionTime = time() - $_SESSION['started_session'];
  } else {
    $sSessionTime = 0;
  }

  if (isset($_COOKIE['user']) && isset($_COOKIE['pass'])) {
    printf('O cookie de usuário foi setado: %s <br>', $_COOKIE['user']);
    printf('O cookie de senha foi setado: %s <br>', $_COOKIE['pass']);
  }

  printf(
    'Incio da sessão: %s <br>'
    , date('d/m/Y:h:i:s', $_SESSION['started_session'])
  );

  printf(
    'Última requisição: %s <br>'
    , date('d/m/Y:h:i:s', $_SESSION['last_request'])
  );

  printf(
      'Tempo de sessão: <br> %s minutos <br> %s segundos'
    , round($sSessionTime / 60)
    , $sSessionTime
  );
?>

  <!DOCTYPE html>
  <html>
  <head>
      <title>Página Protegida</title>
  </head>
  <body>
      <h2>Bem-vindo, <?= $_SESSION['user']; ?>!</h2>
      <p>Esta é uma página protegida que só pode ser acessada por usuários autenticados.</p>
      <a href="./logout.php">Sair</a>
  </body>
  </html>
