<?php
  try {
    $rConnection = pg_connect("host=host.docker.internal port=5432 dbname=local user=postgres password=123");
  } catch (Exception $e) {
    echo $e->getMessage();
  }
