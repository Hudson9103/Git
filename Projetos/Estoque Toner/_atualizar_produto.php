<<<<<<< HEAD
<?php

include 'conexao.php';

$id = $_POST['id'];
$precoUnitario         = $_POST['precoUnitario'];
$quantidade            = $_POST['quantidade'];
$impressoraCompativel  = $_POST['impressoraCompativel'];
$tipo                  = $_POST['tipo'];

$sql ="UPDATE `estoque_toner` SET `precoUnitario`=$precoUnitario,`quantidade`=$quantidade ,`impressoraCompativel`='$impressoraCompativel',`tipo`='$tipo ' WHERE id_estoque = $id";

$atualizar = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="css/Bootstrap.css" >
<script src="https://kit.fontawesome.com/bb5a10233d.js" crossorigin="anonymous"></script>

<div class="container" style="width: 400px">
<center>
    <h3>Atualizado com Sucesso</h3>
    <div style="margin-top: 10px">
    <a href="lista_produtos.php" class="btn btn-success "><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;Voltar</a>
</div>
</center>

</div>
=======
<?php

include 'conexao.php';

$id = $_POST['id'];
$precoUnitario         = $_POST['precoUnitario'];
$quantidade            = $_POST['quantidade'];
$impressoraCompativel  = $_POST['impressoraCompativel'];
$tipo                  = $_POST['tipo'];

$sql ="UPDATE `estoque_toner` SET `precoUnitario`=$precoUnitario,`quantidade`=$quantidade ,`impressoraCompativel`='$impressoraCompativel',`tipo`='$tipo ' WHERE id_estoque = $id";

$atualizar = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="css/Bootstrap.css" >
<script src="https://kit.fontawesome.com/bb5a10233d.js" crossorigin="anonymous"></script>

<div class="container" style="width: 400px">
<center>
    <h3>Atualizado com Sucesso</h3>
    <div style="margin-top: 10px">
    <a href="lista_produtos.php" class="btn btn-success "><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;Voltar</a>
</div>
</center>

</div>
>>>>>>> d894a643b7b8db38132cbf146f571ecb134e9fa2
