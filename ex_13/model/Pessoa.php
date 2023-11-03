<?php
    namespace app\model;

    require_once 'Endereco.php';
    require_once 'Contato.php';

    class Pessoa {
      private $nome;
      private $sobreNome;
      private $dataNascimento;
      private $cpfCnpj;
      private $tipo;
      private $telefone;
      private $endereco;

      public function __construct() {
        $this->inicializaClasse();
      }

      public function toJson() {
        return json_encode(get_object_vars($this));
      }

      public function saveJson() {
        $sNameFile = sprintf('./%s.json', $this->getNome());
        file_put_contents($sNameFile, $this->toJson());
      }

      private function inicializaClasse() {
        $this->tipo = 1;
        $this->telefone = new \app\model\Contato;
        $this->endereco = new \app\model\Endereco;
      }

      public function getDataNascimento() {
        return $this->dataNascimento;
      }

      public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
      }

      public function getNomeCompleto() {
        return $this->nome . " " . $this->sobreNome;
      }

      public function getIdade() {
        if(isset($this->dataNascimento)) {
          $idade = $this->dataNascimento->diff( new \DateTime( date('Y-m-d') ) );
          return $idade->y;
        }
        return false;
      }

      public function getTelefone() {
        return $this->telefone;
      }

      public function getEndereco() {
        return $this->endereco;
      }

      public function getNome() {
        return $this->nome;
      }

      public function setNome($nome) {
        $this->nome = $nome;
      }

      public function getSobreNome() {
        return $this->sobreNome;
      }

      public function setSobreNome($sobreNome) {
        $this->sobreNome = $sobreNome;
      }
    }
?>