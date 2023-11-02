<?php
  session_start();

  if (isset($_SESSION['authenticated']) || $_SESSION['authenticated'] == true) {
    session_destroy();

    setcookie("user", "", time() - 3600);
    setcookie("pass", "", time() - 3600);

    header("Location: index.php");
  }

?>
