<?php
  try {
    require_once './connection.php';
    if ($rConnection) {
      if ($_POST['search']) {
        $sSqlFilter = sprintf(
          'SELECT * FROM TBPESSOA WHERE PESNOME ILIKE \'%%%s%%\''
          , filter_input(INPUT_POST, 'search', FILTER_SANITIZE_SPECIAL_CHARS)
        );

        $rResult = pg_query($rConnection, $sSqlFilter);
      } else {
        $rResult = pg_query($rConnection, 'SELECT * FROM TBPESSOA');
      }
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }

  $sTr = '
    <tr>
      <td>%s</td>
      <td>%s</td>
      <td>%s</td>
      <td>%s</td>
      <td>%s</td>
      <td>%s</td>
    </tr>
  ';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listar Cadastro</title>

  <style>
    td {
      border: 1px solid black;
      padding: 10px;
    }

    th {
      text-align: left;
    }

    table {
      border-collapse: collapse;
      border: 1px solid black;

      width: 100%;
    }
  </style>
</head>
<body>
  <table>
    <tr>
      <th>Nome</th>
      <th>Sobrenome</th>
      <th>Email</th>
      <th>Senha</th>
      <th>Cidade</th>
      <th>Estado</th>
    </tr>
    <?php
      while ($aRow = pg_fetch_assoc($rResult)) {
        printf(
          $sTr
          , $aRow['pesnome']
          , $aRow['pessobrenome']
          , $aRow['pesemail']
          , $aRow['pespassword']
          , $aRow['pescidade']
          , $aRow['pesestado']
        );
      }

    ?>
  </table>

  <form action="" method="POST">
    <br>
    <label for="search">Pesquisar Nome:</label>
    <input type="text" placeholder="Ex: Irineu da Silva..." name="search">
    <input type="submit" value="Pesquisar">
    <a href="./clean_filter.php">Limpar Filtro</a>
  </form>
</body>
</html>