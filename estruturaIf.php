<?php
// $t = date("H");

// echo $t;

/*
if ($t < "24") {
  echo "Have a good day!";
}
*/

// $idade = 19;

// if ($idade >= 18){
//   echo "Maior de idade.";
// }

// $media = 7;

// if ($media >= 7){
//   echo "Aprovado!";
// }
// else 
// {
//   echo "Reprovado...";
// }

$a = 15;
$b = 9;
$maior; // Não precisa instanciar esta variável no PHP

if ($a > $b){
  $maior = $a;
}
else 
{
  $maior = $b;
}

echo "Número maior é: " . $maior . "<br>";

// Ternário
$v = 2;
$r = (1 == $v) ? 100: 1;

echo $r;

?>