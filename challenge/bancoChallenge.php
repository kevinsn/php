<?php

// Dados de acesso ao banco
define("BD_SERVIDOR","127.0.0.1:3306");
define("BD_USUARIO","root");
define("BD_SENHA","");
define("BD_BANCO","suporte_ti");

function gravar_banco($chamado)
{
  $conexao = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);

  if ($conexao->connect_error) {
    echo "Problema para conectar com o banco de dados. Verifique os dados!";
    $conexao->close();
  } else {
    // echo "Conexão realizada com sucesso";
    // $conexao->close();
    $stmt = $conexao->prepare("INSERT INTO chamado(nome,descricao) VALUES (?,?)");
    $stmt->bind_param('ss', $nome, $descricao);

    $nome = $chamado['nome'];
    $descricao = $chamado['descricao'];

    $stmt->execute();

    $stmt->close();
    $conexao->close();
  }
}