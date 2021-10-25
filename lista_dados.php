<?php

    require_once "cabecalho.php";
    require_once "conexao.php";
    require_once "funcoes.php";
?>
<main class = "shadow-lg py-3 px-md-5 mb-5 bg-white text-dark rounded border">

<?php
    //criar a string da query
    $query = "SELECT * FROM cliente";
    //executa a query
    $resultado = $con->query($query);
    
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Salario</th>
      <th scope="col">Modalidades</th>
      <th scope="col">Data de criação</th>
      <th scope="col" colspan="2" class="text-center">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($resultado as $value) { ?>
      
    <tr>
      <th scope="row"><?= $value['id'] ?></th>
      <td><?= $value['nome'] ?></td>
      <td><?= $value['email'] ?></td>
      <td><?= date("d/m/Y", strtotime($value['dtnascimento'])) ?></td>
      <td><?= number_format($value['salario'], 2, ',', '.') ?></td>
      <td><?= $value['modalidades'] ?></td>
      <td><?= date("d/m/Y G:i:s", strtotime($value['data_criacao'])) ?></td>
      <td><a href="index.php?id=<?= $value['id']?>" class="btn btn-warning btn-sm">Editar</a></td>
      <td><a href="delete.php?id=<?= $value['id']?>" class="btn btn-danger btn-sm">Deletar</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
      <?php
          pag_inicial_consulta();
      ?>
</main>
<?php
    require_once "rodape.php";
?>;