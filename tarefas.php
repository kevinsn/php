<?php session_start(); ?>
<html>
<head>
  <title>Gerenciador de Tarefas</title>
</head>
<body>
  <h1>Gerenciador de Tarefas</h1>
  <form>
    <fieldset>
      <legend>Nova tarefa</legend>
      <label>
        Tarefa:
        <input type="text" name="nome" />
      </label>
      <input type="submit" value="Cadastrar" />
    </fieldset>
  </form>
  <?php
    // $tamanho = $_GET['nome'];

    // if (isset($_GET['nome']) && strlen($tamanho)> 0) {
    // echo "Nome informado: " . $_GET['nome'];
    // }
  ?>
  <?php
    if (isset($_GET['nome'])) {
      $_SESSION['lista_tarefas'][] = $_GET['nome'];
    }      

    //$tamanhoVar = $_SESSION['lista_tarefas'][0];

    $lista_tarefas = array();

    if (isset($_SESSION['lista_tarefas'])){ //&& strlen($tamanhoVar) > 0) {
      $lista_tarefas = $_SESSION['lista_tarefas'];
    }      
  ?>
  <table>
    <tr>
      <th>Tarefas</th>
    </tr>
    <?php foreach ($lista_tarefas as $tarefa) : ?>
      <tr>
        <td><?php echo $tarefa; ?> </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>