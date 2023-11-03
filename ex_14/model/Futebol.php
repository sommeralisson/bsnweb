<?php
  class Time {
    private $sNome;
    private $sAnoFundacao;
    private $aJogadores = [];

    public function getJogadores() {
        return $this->aJogadores;
    }

    public function addJogador($oJogador) {
        array_push($this->aJogadores, $oJogador);
    }

    public function getNome() {
      return $this->sNome;
    }

    public function setNome($sNome) {
      $this->sNome = $sNome;
    }
  }

  class jogador {
    private $sNome;
    private $sPosicao;

    public function getNome(){
      return $this->sNome;
    }

    public function setNome($sNome){
      $this->sNome = $sNome;
    }

    public function getPosicao(){
      return $this->sPosicao;
    }

    public function setPosicao($sPosicao) {
      $this->sPosicao = $sPosicao;
    }
  }

  $oBrasil = new Time();
  $oBrasil->setNome("Brasil Futsal");

  $oJogador = new jogador();
  $oJogador->setNome("João");
  $oJogador->setPosicao("Goleiro");

  $oBrasil->addJogador($oJogador);

  $oJogador = new jogador();
  $oJogador->setNome("Beto");
  $oJogador->setPosicao("Zagueiro");

  $oBrasil->addJogador($oJogador);

  var_dump($oBrasil);
?>