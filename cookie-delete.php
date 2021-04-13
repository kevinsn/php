<?php
  setcookie("nome", "", time()+3600,"/","",0);
  setcookie("idade", "", time()+3600,"/","",0);
?>

<html>
  <head>
    <title>Cookies em PHP</title>
  </head>
  <body>
    <?php echo "Deletando cookies" ?>
  </body>
</html>