<?php
  try {
    require_once './connection.php';

    print_r($rConnection);

    if ($rConnection) {
      $aDados = array(
        $_POST['campo_primeiro_nome'],
        $_POST['campo_sobrenome'],
        $_POST['campo_email'],
        $_POST['campo_password'],
        $_POST['campo_cidade'],
        $_POST['campo_estado']
      );

      $result = pg_query_params(
        $rConnection,
        "INSERT INTO tbpessoa
                     (pesnome, pessobrenome, pesemail, pespassword, pescidade, pesestado)
              VALUES
                     ($1, $2, $3, $4, $5, $6)",
        $aDados
      );

      if ($result) {
        echo "<br>Dados inseridos com sucesso. <a href='index.php'>Clique para voltar</a>";
      } else {
        echo "<br>Result: " . $row['qtdtabs'];
      }
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }
