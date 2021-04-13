<?php
  setcookie("nome", "Francisco", time()+3600,"/","",0);
  setcookie("idade", "36", time()+3600,"/","",0);
?>

<html>
  <head>
    <title>Cookies em PHP</title>
  </head>
  <body>
    <?php echo "Envio cookies" ?>
  </body>
</html>