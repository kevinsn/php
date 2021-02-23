<?php

$prova1 = 7;
$prova2 = 5;

$nota = ($prova1 + $prova2) / 2;

if ($nota < 3)
{
  $desempenho = "Péssimo";
} 
elseif ($nota < 5)
{
  $desempenho = "Ruim";
}
elseif ($nota < 7)
{
  $desempenho = "Regular";
}
elseif ($nota < 9)
{
  $desempenho = "Bom";
}
else
{
  $desempenho = "Excelente";
}

echo $desempenho . ", nota: " . $nota . "<br>";

$recuperacao = true;

if ($nota >= 7 || $recuperacao == true) 
{
  echo "Passou de ano!";
}

?>