<?php
  namespace app\model;

  class Sessao {
    private $oUsuario;
    private $sSessionId;
    private $sStatus;
    private $xDataHoraInicio;
    private $xDataHoraUltimoAcesso;

    public function iniciaSessao($oUsuario) {
      $this->sSessionId = uniqid();
      $this->sStatus    = 'Ativa';
      $this->oUsuario   = $oUsuario;
    }

    public function finalizaSessao() {
      $this->sStatus = 'Encerrada';
    }

    public function getUsuarioSessao() {
      return $this->oUsuario;
    }

    public function getStatus() {
      return $this->sStatus;
    }

    public function setStatus($sStatus) {
      $this->sStatus = $sStatus;
    }

    public function getSessionId() {
      return $this->sSessionId;
    }

    public function setSessionId($sSessionId) {
      $this->sSessionId = $sSessionId;
    }

    public function getDataHoraInicio() {
      return $this->xDataHoraInicio;
    }
    public function setDataHoraInicio($xDataHoraInicio){
      $this->xDataHoraInicio = $xDataHoraInicio;
    }

    public function getDataHoraUltimoAcesso() {
      return $this->xDataHoraUltimoAcesso;
    }

    public function setDataHoraUltimoAcesso($xDataHoraUltimoAcesso) {
      $this->xDataHoraUltimoAcesso = $xDataHoraUltimoAcesso;
    }
  }
?>
