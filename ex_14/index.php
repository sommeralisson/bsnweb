<?php
  require './model/Usuario.php';

  $oUsuario = new app\model\Usuario("João", "joao123", "senha123");

  $oSessao  = new app\model\Sessao();
  $oSessao->iniciaSessao($oUsuario);
  $oSessao->setDataHoraInicio(new DateTime());
  $oSessao->setDataHoraUltimoAcesso(new DateTime());

  echo "Usuário: " . $oSessao->getUsuarioSessao()->getUserName() . "<br>";
  echo "Login: " . $oSessao->getUsuarioSessao()->getUserLogin() . "<br>";
  echo "Status da sessão: " . $oSessao->getStatus() . "<br>";

  $oSessao->finalizaSessao();
  echo "Status da sessão após finalização: " . $oSessao->getStatus() . "<br>";
?>
