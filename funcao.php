<?php
  function escreverMensagem() {
    echo "Você é uma pessoa legal, tenha um bom dia!";
  }
  // escreverMensagem();

  // Funções com parâmetro
  function somar($num1, $num2) {
    $sum = $num1 + $num2;
    echo "A soma dos dois número é $sum";
  }
  // somar(10, 20);
  
  function somarComRetorno($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;
  }
  // $retorno = somarComRetorno(50, 20);
  // echo "A soma dos dois número é $retorno";

  function imprimirNome($numero) {
    for($x = 1; $x <= $numero; $x++) {
      echo "Kevin e número $x <br>";
    }
  }
  // imprimirNome("Kevin", 3);

  function validarNumeroPar($x){
    if($x % 2 == 0){
      echo "$x é par";
    }
  }
  // validarNumeroPar(4);

  // Valores padrão
  function xptoPrint($param = 1){
    $echo $param;
  }
  // xptoPrint();

  // Função teste, mudei o nome
  function diminuirValor($valor){
    if($valor != 0){
      echo "Foi chamada a função passando o valor $valor <br>";
      teste($valor - 1);
    }
  }
  // teste(7);

  function fatorial($numero) {
    if($numero == 1) {
      return 1;
    }else if ($numero <= 0){
      return 0;
    }else{
      return $numero * fatorial($numero - 1);
    }
  }
  // echo fatorial(-2);

  // Passagem de parâmetro por referência
  function mais5($numero){
    $numero = $numero + 5;
    echo $numero;
  }
  $xyz = 10;
  // mais5($xyz);
?>