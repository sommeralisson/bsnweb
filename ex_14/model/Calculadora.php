<?php
  class Calculadora {
    public function soma($sValor1, $sValor2) {
      return $sValor1 + $sValor2;
    }
    public function multiplica($sValor1, $sValor2) {
      return $sValor1 * $sValor2;
    }
    public function divide($sValor1, $sValor2) {
      return $sValor1 / $sValor2;
    }
    public function subtrai($sValor1, $sValor2) {
      return $sValor1 - $sValor2;
    }
  }

  $oCalc = new Calculadora();
  echo $oCalc->soma(10, 5) . "<br>";
  echo $oCalc->multiplica(10, 5) . "<br>";
  echo $oCalc->divide(10, 5) . "<br>";
  echo $oCalc->subtrai(10, 5) . "<br>";
?>