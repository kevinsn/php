<?php
session_start();
include "bancoChallenge.php";

if (isset($_POST['submit'])) {
  $chamado = array();
  $chamado['nome'] = $_POST['nome'];

  if (isset($_POST['descricao'])) {
    $chamado['descricao'] = $_POST['descricao'];
  } else {
    $chamado['descricao'] = '';
  }

  gravar_banco($chamado);
}

include "templateChallenge.php";