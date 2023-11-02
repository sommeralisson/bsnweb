<?php
  session_start();

  if (isset($_SESSION['authenticated']) || $_SESSION['authenticated'] == true) {
    session_destroy();

    header("Location: index.php");
  }
?>
