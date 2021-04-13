<?php
session_start();
$_SESSION["nome"] = "Nome"; 

if(isset($_SESSION["contador"])){
  $_SESSION["contador"] += 1; 
}else{
  $_SESSION["contador"] = 1; 
}

$msg = "Quantidade de acesso " . $_SESSION["contador"];
?>

<html>
  <head>
    <title>PHP Session</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php echo $msg?>
  </body>
</html>