<html>
  <head>
    <meta charset="utf-8" />
    <title>Lista de Contatos</title>
    <link rel="stylesheet" href="tarefas.css" type="text/css" />
  </head>
  <body>
    <h1>Lista de Contatos</h1>
    <form>
      <fieldset>
        <legend>Novo contato</legend>
        <label>
          Nome do contato:
          <input required type="text" name="nome" />
        </label>
        <label>
          Telefone:
          <input required type="tel" name="telefone" />
        </label>
        <label>
          E-mail:
          <input required type="email" name="email" />
        </label>
        <label>
          Data de nascimento (Opcional):
          <input type="date" name="data-de-nascimento" />
        </label>
        <label>
          Descrição (Opcional):
          <textarea name="descricao"></textarea>
        </label>
          <fieldset>
          <legend>Favorito?</legend>
        <label>
          <input type="radio" name="favorito" value="sim" checked />
          Sim
          <input type="radio" name="favorito" value="nao" />
          Não
        </label>
          </fieldset>
        <input type="submit" value="Cadastrar" />        
      </fieldset>
    </form>
    <table>
      <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Nascimento</th>
        <th>Descrição</th>
        <th>Favorito?</th>
      </tr>
      <?php foreach ($lista_contatos as $contato) : ?>
        <tr>
          <td><?php echo $contato['nome']; ?> </td>
          <td><?php echo $contato['telefone']; ?> </td>
          <td><?php echo $contato['email']; ?> </td>
          <td><?php echo $contato['data-de-nascimento']; ?> </td>
          <td><?php echo $contato['descricao']; ?> </td>
          <td><?php echo $contato['favorito']; ?> </td>
        </tr>
      <?php endforeach; ?>
      <?php $lista_contatos = array(); ?>
    </table>
  </body>
</html>

