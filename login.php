<?php
session_start();

$msg = $_SESSION["nome"];
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