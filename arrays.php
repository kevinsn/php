<?php

  // $frutas = array("laranja", "melancia", "abacaxi");

  // print_r($frutas);

  // Índice não precisa ser contínuo, neste exemplo abaixo começa na segunda posição (posição 1)
  // $carros[1] = "Volvo";
  // $carros[2] = "BMW";
  // $carros[3] = "Toyota";

  // print_r($carros);

  // Concatendo array ao texto
  // $carros = array("Volvo", "BMW", "Toyota");

  // echo "Eu gosto de $carros[0], $carros[1] e $carros[2].";

  // Imprimindo array utilizando for
  // $carros = array("Volvo", "BMW", "Toyota", "Ford");

  // $tamanho = count($carros);

  // for($x = 0; $x < $tamanho; $x++)  {
  //   echo "$carros[$x]<br>";
  // }

  // Abaixo índice diferenciado
  // $laticinios = array("queijo" => 10.0, "presunto" => 10.9, "mortadela" => 4.3);

  // print_r($laticinios);

  // $jogo = array
  // (
  //   array(1, "Zé", 11),
  //   array(2, "José", 4),
  //   array(1, "Zeca", 22),
  // );

  // for ($linha = 0; $linha < 3; $linha++) {
  //   for ($coluna = 0; $coluna < 3; $coluna++) {
  //     echo $jogo[$linha][$coluna]." ";
  //   }
  //   echo "<br/> \n";
  //  }   

  // $mulheres = array(1 => array(1 => "Amanda", 2 => "Poliana", 3 => "Carol"),
  //                    2 => array(1 => "Ana", 2 => "Beatriz", 3 => "Natalia"),
  //                    3 => array(1 => "Erika", 2 => "Adriana", 3 => "Paula")
  // );

  // for ($i = 1; $i < 4; $i++) {
  //   for ($j = 1; $j < 4; $j++) {
  //     echo $mulheres[$i][$j]." ";
  //   }
  //   echo "<br/> \n";
  // }

  $frutas = array(0 => array(0 => "melancia", 1 => "manga"),
                  1 => array(0 => "abacaxi", 1 => "manga")
  );

  for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
      echo $frutas[$i][$j]." ";
    }
    echo "<br/> \n";
  }

?>