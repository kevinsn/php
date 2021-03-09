<?php
  // Exercício 1
  $numeros = array(0 => 10.0, 1 => 7.0, 2 => 8.5, 3 => 7.5, 4 => 9.0, 5 => 8.0, 6 => 7.5, 7 => 9.5, 8 => 9.0, 9 => 10.0);
  $total = 0;
  $media = 0;

  for ($i = 0; $i < count($numeros); $i++) {
    $total += $numeros[$i];
  }
  $media = $total/count($numeros);
  
  print("Exercicío 1 <br>");
  print($media);

  // Exercício 2
  $numeros = array(0 => 10.0, 1 => 7.0, 2 => 8.5, 3 => 7.5, 4 => 9.0);
  $numeroMaior = 0;
  $posicao = 0;
  
  for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] > $numeroMaior){  
      $numeroMaior = $numeros[$i];
      $posicao = $i;
    } 
  }

  print("<br> <br> Exercicío 2 <br>");
  print("O número maior é o $numeroMaior na posição $posicao");

  // Exercício 3
  $idades = array(9, 37, 18, 27, 19);
  $maiores = 0;  
  $menores = 0;

  for ($i = 0; $i < count($idades); $i++) {
    if ($idades[$i] >= 18){  
      $maiores++;
    } else {
      $menores++;
    }
  }

  print("<br> <br> Exercicío 3 <br>");
  print("Maiores de idade: $maiores e menores de idade: $menores");

  // Exercício 4
  $nomes = array("João", "Eduardo", "Yago", "Yelena", "Teodoro");

  rsort($nomes);  

  print("<br> <br> Exercicío 4 <br>");
  print_r($nomes);

  // Exercício 5
  $data = array("dia" => 9, "mes" => "Março", "ano" => 2021);

  print("<br> <br> Exercicío 5 <br>");
  print($data["dia"]. "<br>");
  print($data["mes"]. "<br>");
  print($data["ano"]. "<br>");  
?>