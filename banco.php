<?php

function gravar_tarefa($tarefa)
{
  $bdServidor = '127.0.0.1:3306';
  $bdUsuario = 'root';
  $bdSenha = '';
  $bdBanco = 'tarefas';

  $conexao = new mysqli($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

  if ($conexao->connect_error) {
    echo "Problema para conectar com o banco de dados. Verifique os dados!";
    $conexao->close();
  } else {
    // echo "Conexão realizada com sucesso";
    // $conexao->close();
    $stmt = $conexao->prepare("INSERT INTO tarefas(nome,descricao,prazo,concluida,prioridade) VALUES (?,?,?,?,?)");
    $stmt->bind_param('sssii', $nome, $descricao, $prazo, $prioridade, $concluida);

    $nome = $tarefa['nome'];
    $descricao = $tarefa['descricao'];
    $prazo = $tarefa['prazo'];
    $prioridade = $tarefa['prioridade'];
    $concluida = $tarefa['concluida'];
    $stmt->execute();

    $stmt->close();
    $conexao->close();
  }
}
