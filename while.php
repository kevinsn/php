<?php
$x = 1;

// while($x <= 100) {
//   echo "O número é: $x <br>";
//   $x++;
// }

// Números pares:

while($x <= 500) {
  if ($x % 2 == 0) {
    echo "The number is: $x <br>";
  }
  $x++;
}

// Não irá entrar no while:

$y = 1001;

while ($y <= 1000) {
  echo "The number is: $x <br>";
  $y++;
}

?>