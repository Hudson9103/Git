<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="css/Bootstrap.css" >
    <script src="https://kit.fontawesome.com/bb5a10233d.js" crossorigin="anonymous"></script>

    <style type="text/css">

#tamanhoContainer{
    width: 510px;
    height: 550px;
    margin-top: 40px;
    padding: 20px;
    background-color: #046a38;
    font-weight: bold;
    color: #FFFFFF;
   -moz-border-radius:10px;-webkit-border-radius:10px; border-radius:10px;
}

th{
    font-weight: bold;
    color: #FFFFFF;
    text-align: center;
}

td{
    font-weight: bold;
    color: #FFFFFF;
    text-align: center;
}


</style>

</head>
<body >

<div class="container" id="tamanho Container" style="margin-top: 10px; background-color: #046a38; ">
<center>
    <h3 style="font-weight: bold; color: #FFFFFF; padding-top: 10px"> Lista de Produtos </h3>
</center>
    <br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Modelo</th>
      <th scope="col">Preço Unitário</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Impressora Compativel</th>
      <th scope="col">Tipo</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
   
        <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `estoque_toner`";
            $busca = mysqli_query($conexao,$sql);

            // cada linha que a consulta acha ele vai armagenar na arry para lista
            while ($array = mysqli_fetch_array($busca)) {

                $id_estoque = $array['id_estoque'];
                $modelo = $array['modelo'];
                $precoUnitario = $array['precoUnitario'];
                $quantidade = $array['quantidade'];
                $impressoraCompativel = $array['impressoraCompativel'];
                $tipo = $array['tipo'];
        ?>
    <tr>
      <td><?php echo $modelo ?></td>
      <td><?php echo $precoUnitario ?></td>
      <td><?php echo $quantidade ?></td>
      <td><?php echo $impressoraCompativel ?></td>
      <td><?php echo $tipo ?></td>
      <td><a class="btn btn-success btn-sm" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
          <a class="btn btn-success btn-sm" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Deletar</a></td>

    <?php } ?>

    </tr>
   
</table>

</div>

<div style="text-align: left; margin-left: 110px ">
<a href="index.php" role="buttom" class="btn btn-success"><i class="fas fa-undo"></i>&nbsp; Menu </a>
<a href="adicionar_produto.php" role="buttom" class="btn btn-success"><i class="fas fa-external-link-alt"></i>&nbsp;Cadastra Novo Item </a>
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
=======
<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="css/Bootstrap.css" >
    <script src="https://kit.fontawesome.com/bb5a10233d.js" crossorigin="anonymous"></script>

    <style type="text/css">

#tamanhoContainer{
    width: 510px;
    height: 550px;
    margin-top: 40px;
    padding: 20px;
    background-color: #046a38;
    font-weight: bold;
    color: #FFFFFF;
   -moz-border-radius:10px;-webkit-border-radius:10px; border-radius:10px;
}

th{
    font-weight: bold;
    color: #FFFFFF;
    text-align: center;
}

td{
    font-weight: bold;
    color: #FFFFFF;
    text-align: center;
}


</style>

</head>
<body >

<div class="container" id="tamanho Container" style="margin-top: 10px; background-color: #046a38; ">
<center>
    <h3 style="font-weight: bold; color: #FFFFFF; padding-top: 10px"> Lista de Produtos </h3>
</center>
    <br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Modelo</th>
      <th scope="col">Preço Unitário</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Impressora Compativel</th>
      <th scope="col">Tipo</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
   
        <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `estoque_toner`";
            $busca = mysqli_query($conexao,$sql);

            // cada linha que a consulta acha ele vai armagenar na arry para lista
            while ($array = mysqli_fetch_array($busca)) {

                $id_estoque = $array['id_estoque'];
                $modelo = $array['modelo'];
                $precoUnitario = $array['precoUnitario'];
                $quantidade = $array['quantidade'];
                $impressoraCompativel = $array['impressoraCompativel'];
                $tipo = $array['tipo'];
        ?>
    <tr>
      <td><?php echo $modelo ?></td>
      <td><?php echo $precoUnitario ?></td>
      <td><?php echo $quantidade ?></td>
      <td><?php echo $impressoraCompativel ?></td>
      <td><?php echo $tipo ?></td>
      <td><a class="btn btn-success btn-sm" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
          <a class="btn btn-success btn-sm" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Deletar</a></td>

    <?php } ?>

    </tr>
   
</table>

</div>

<div style="text-align: left; margin-left: 110px ">
<a href="index.php" role="buttom" class="btn btn-success"><i class="fas fa-undo"></i>&nbsp; Menu </a>
<a href="adicionar_produto.php" role="buttom" class="btn btn-success"><i class="fas fa-external-link-alt"></i>&nbsp;Cadastra Novo Item </a>
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
>>>>>>> d894a643b7b8db38132cbf146f571ecb134e9fa2
</html>