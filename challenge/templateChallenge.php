<html>

<head>
  <meta charset="utf-8" />
  <title>Desafio Suporte TI</title>
  <link rel="stylesheet" href="templateChallenge.css" type="text/css" />
</head>

<body>
  <h1>O Chamado</h1>
  <form method="post">
    <fieldset>
      <legend>Abrir Solicitação TI</legend>
      <label for="grupo">Grupo Solucionador:</label>
      <select name="nome" id="grupo">
        <option value="aplicacao">Aplicações</option>
        <option value="software">Software</option>
        <option value="hardware">Hardware</option>
        <option value="infraestrutura">Infraestrutura</option>
      </select>
      <label>
        Descrição:
        <textarea name="descricao"></textarea>
      </label>
      <input type="submit" name="submit" value="Gravar"/>
    </fieldset>
  </form>
</body>

</html>