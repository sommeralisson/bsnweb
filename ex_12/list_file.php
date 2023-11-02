<?php
  $sPathFile = './dados.txt';

  if (file_exists($sPathFile)) {
    $aFile = file('./dados.txt');

    $aCabecalho = explode(';', $aFile[0]);
    $aDados     = [];
    $aHtmlDados = [];

    for($i = 0; $i < count($aFile); $i++) {
      if ($i === 0) {
        continue;
      }

      $aDados[] = explode(';', str_replace('"', '', $aFile[$i]));
    }

    foreach($aCabecalho as $sRowCabecalho) {
      $aHtmlCabecalho[] = sprintf(
        '<th>%s</th>'
        , $sRowCabecalho
      );
    }

    foreach($aDados as $aRowDados) {
      $aHtmlDados[] = '<tr>';

      foreach($aRowDados as $sDado) {
        $aHtmlDados[] = sprintf(
          '<td>%s</td>'
          , $sDado
        );
      }

      $aHtmlDados[] = '</tr>';
    }

  } else {
    print('Arquivo não encontrado!');
  }
?>

<!DOCTYPE html>
  <html lang="pt-BR">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 12 - PHP Pers. Disco - Exercício 2 </title>

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
      <?php
        print_r(implode(' ', $aHtmlCabecalho));
        print_r(implode(' ', $aHtmlDados));
      ?>
    </table>
  </body>
</html>