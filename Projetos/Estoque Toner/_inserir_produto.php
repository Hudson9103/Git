<<<<<<< HEAD
<?php

//incluindo o arquivo de conexão do banco de dados
include 'conexao.php';

$modelo                = $_POST['modelo']; //recebe o valor atribuido
$precoUnitario         = $_POST['precoUnitario'];
$quantidade            = $_POST['quantidade'];
$impressoraCompativel  = $_POST['impressoraCompativel'];
$tipo                  = $_POST['tipo'];


$sql = "INSERT INTO `estoque_toner`(`modelo`, `precoUnitario`, `quantidade`, `impressoraCompativel`, `tipo`) VALUES ('$modelo', $precoUnitario,
     $quantidade,'$impressoraCompativel','$tipo')";

//conecta ao BD e depois da o comando de inserção
$inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/Bootstrap.css" >
<div class="container" style="width: 500px; margin-top: 20px;">

<center>
    <h4>Produto Adicionado com Sucesso!</h4>
</center>
    <div style="padding-top 20px">
        <center>
            <a href="index.php" role="buttom" class="btn btn-success"> Cadastrar Novo Item </a>
            <a href="lista_produtos.php" role="buttom" class="btn btn-success"> Itens Cadastrados </a>
        </center>
    </div>
=======
<?php

//incluindo o arquivo de conexão do banco de dados
include 'conexao.php';

$modelo                = $_POST['modelo']; //recebe o valor atribuido
$precoUnitario         = $_POST['precoUnitario'];
$quantidade            = $_POST['quantidade'];
$impressoraCompativel  = $_POST['impressoraCompativel'];
$tipo                  = $_POST['tipo'];


$sql = "INSERT INTO `estoque_toner`(`modelo`, `precoUnitario`, `quantidade`, `impressoraCompativel`, `tipo`) VALUES ('$modelo', $precoUnitario,
     $quantidade,'$impressoraCompativel','$tipo')";

//conecta ao BD e depois da o comando de inserção
$inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/Bootstrap.css" >
<div class="container" style="width: 500px; margin-top: 20px;">

<center>
    <h4>Produto Adicionado com Sucesso!</h4>
</center>
    <div style="padding-top 20px">
        <center>
            <a href="index.php" role="buttom" class="btn btn-success"> Cadastrar Novo Item </a>
            <a href="lista_produtos.php" role="buttom" class="btn btn-success"> Itens Cadastrados </a>
        </center>
    </div>
>>>>>>> d894a643b7b8db38132cbf146f571ecb134e9fa2
</div>