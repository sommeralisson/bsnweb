<?php
  require './model/Usuario.php';

  require './lib/HtmlTable.php';
  require './lib/HtmlInput.php';

  // $oUsuario = new app\model\Usuario("João", "joao123", "senha123");

  // $oSessao  = new app\model\Sessao();
  // $oSessao->iniciaSessao($oUsuario);
  // $oSessao->setDataHoraInicio(new DateTime());
  // $oSessao->setDataHoraUltimoAcesso(new DateTime());

  // echo "Usuário: " . $oSessao->getUsuarioSessao()->getUserName() . "<br>";
  // echo "Login: " . $oSessao->getUsuarioSessao()->getUserLogin() . "<br>";
  // echo "Status da sessão: " . $oSessao->getStatus() . "<br>";

  // $oSessao->finalizaSessao();
  // echo "Status da sessão após finalização: " . $oSessao->getStatus() . "<br>";

  $table = new \app\lib\HtmlTable('table1', 'table_id', 'border: 1px solid black;', 2, 2);
  $table->addLinha(['Nome', 'Idade']);
  $table->addLinha(['irineu', '30']);

  $input = new \app\lib\HtmlInput('input1', 'input_id', 'width: 200px;', 'Nome:', 'Digite Seu nome...', false);

  echo $table->renderHtml();
  echo $input->renderHtml();
?>
