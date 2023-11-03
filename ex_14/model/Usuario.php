<?php
  namespace app\model;

  require 'Sessao.php';

  class Usuario {
    private $userName;
    private $userLogin;
    private $userPass;

    public function __construct($userName, $userLogin, $userPass) {
      $this->userName  = $userName;
      $this->userLogin = $userLogin;
      $this->userPass  = $userPass;
    }

    public function getUserName() {
      return $this->userName;
    }

    public function getUserLogin() {
      return $this->userLogin;
    }

    public function getUserPass() {
      return $this->userPass;
    }

    public function setUserName($userName) {
      $this->userName = $userName;
    }

    public function setUserLogin($userLogin) {
      $this->userLogin = $userLogin;
    }

    public function setUserPass($userPass) {
      $this->userPass = $userPass;
    }
  }
?>
