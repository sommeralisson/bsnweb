<?php
  class Computador {
    private $sEstadoAtual;
    function __construct() {
      $this->sEstadoAtual = "Desligado";
    }
    public function liga() {
      $this->sEstadoAtual = "Ligado";
    }
    public function desliga() {
      $this->sEstadoAtual = "Desligado";
    }
    public function getEstadoAtual() {
      return $this->sEstadoAtual;
    }
  }

  $oComp = new Computador();

  echo "Estado Atual: " . $oComp->getEstadoAtual() . "<br>";
  $oComp->liga();
  echo "Estado Atual: " . $oComp->getEstadoAtual() . "<br>";
  $oComp->desliga();
  echo "Estado Atual: " . $oComp->getEstadoAtual();
?>