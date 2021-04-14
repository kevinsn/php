<?php
session_start();

if (isset($_GET['nome']) && $_GET['nome'] != '') {
  $contato = array();
  $contato['nome'] = $_GET['nome'];

  $contato['telefone'] = $_GET['telefone'];
  $contato['email'] = $_GET['email'];

  if (isset($_GET['data-de-nascimento'])) {
    $contato['data-de-nascimento'] = $_GET['data-de-nascimento'];
  } else {
    $contato['data-de-nascimento'] = '';
  }

  if (isset($_GET['descricao'])) {
    $contato['descricao'] = $_GET['descricao'];
  } else {
    $contato['descricao'] = '';
  }

  $contato['favorito'] = $_GET['favorito'];

  $_SESSION['lista_contatos'][] = $contato;
}

if (isset($_SESSION['lista_contatos'])) {
  $lista_contatos = $_SESSION['lista_contatos'];
} else {
  $lista_contatos = array();
}

include "template-lista_de_contatos.php";

?>
