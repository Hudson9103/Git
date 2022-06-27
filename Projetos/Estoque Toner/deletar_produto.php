<<<<<<< HEAD
<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque_toner` WHERE id_estoque = $id";
$deletar = mysqli_query($conexao,$sql)
?>

<link rel="stylesheet" href="css/Bootstrap.css" >
<script src="https://kit.fontawesome.com/bb5a10233d.js" crossorigin="anonymous"></script>

<div class="container" style="width: 400px">
<center>
    <h3>Deletado com Sucesso</h3>
    <div style="margin-top: 10px">
    <a href="lista_produtos.php" class="btn btn-success "><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;Voltar</a>
</div>
</center>

=======
<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque_toner` WHERE id_estoque = $id";
$deletar = mysqli_query($conexao,$sql)
?>

<link rel="stylesheet" href="css/Bootstrap.css" >
<script src="https://kit.fontawesome.com/bb5a10233d.js" crossorigin="anonymous"></script>

<div class="container" style="width: 400px">
<center>
    <h3>Deletado com Sucesso</h3>
    <div style="margin-top: 10px">
    <a href="lista_produtos.php" class="btn btn-success "><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;Voltar</a>
</div>
</center>

>>>>>>> d894a643b7b8db38132cbf146f571ecb134e9fa2
</div>