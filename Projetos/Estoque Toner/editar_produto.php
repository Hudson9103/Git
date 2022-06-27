<<<<<<< HEAD
<?php

include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro</title>
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

     #cabeca{
        text-align: center;
        font-family: Arial;
        color: #FFFFFF;
        font-weight: bold;
     }

     </style>
	
</head>

<body>


<div class="container" id="tamanhoContainer" >

    <h4 id="cabeca">Cadastro Toner</h4>

    <form action="_atualizar_produto.php" method="post">

     <?php

    //ira lista tudo que tenha o ID
     $sql="SELECT * FROM `estoque_toner` WHERE id_estoque = $id";
     $buscar = mysqli_query($conexao,$sql);
     while($array = mysqli_fetch_array($buscar)){
                $id_estoque = $array['id_estoque'];
                $modelo = $array['modelo'];
                $precoUnitario = $array['precoUnitario'];
                $quantidade = $array['quantidade'];
                $impressoraCompativel = $array['impressoraCompativel'];
                $tipo = $array['tipo'];
     

     ?>

        <div class="mb-3">
            <label>Modelo</label>
            <input type="text" class="form-control" name="modelo" value="<?php echo $modelo ?>" disabled>
            <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
        </div>

        <div class="mb-3">
            <label>Preço Unitário</label>
            <input type="int" class="form-control" name="precoUnitario" value="<?php echo $precoUnitario ?>">
        </div>

        <div class="mb-3">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
        </div>

        <div class="mb-3">
            <label>Impressora Compativel</label>
            <input type="text"   class="form-control" name="impressoraCompativel" value="<?php echo $impressoraCompativel ?>">
        </div>

        <div>
            <label>Tipo</label> 
            <select class="form-control" name="tipo" aria-label="selecione o Tipo"> 
                <option>TONER</option>
                <option>CARTUCHO</option>
                <option>TINTA</option>
            </select>
        </div>
        <br>

        <div style="text-align: right;">
            <button type="submit" class="btn btn-success "><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;Atualizar</button>
        </div>
</div>

<?php } ?>
    </form>


<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
=======
<?php

include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro</title>
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

     #cabeca{
        text-align: center;
        font-family: Arial;
        color: #FFFFFF;
        font-weight: bold;
     }

     </style>
	
</head>

<body>


<div class="container" id="tamanhoContainer" >

    <h4 id="cabeca">Cadastro Toner</h4>

    <form action="_atualizar_produto.php" method="post">

     <?php

    //ira lista tudo que tenha o ID
     $sql="SELECT * FROM `estoque_toner` WHERE id_estoque = $id";
     $buscar = mysqli_query($conexao,$sql);
     while($array = mysqli_fetch_array($buscar)){
                $id_estoque = $array['id_estoque'];
                $modelo = $array['modelo'];
                $precoUnitario = $array['precoUnitario'];
                $quantidade = $array['quantidade'];
                $impressoraCompativel = $array['impressoraCompativel'];
                $tipo = $array['tipo'];
     

     ?>

        <div class="mb-3">
            <label>Modelo</label>
            <input type="text" class="form-control" name="modelo" value="<?php echo $modelo ?>" disabled>
            <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
        </div>

        <div class="mb-3">
            <label>Preço Unitário</label>
            <input type="int" class="form-control" name="precoUnitario" value="<?php echo $precoUnitario ?>">
        </div>

        <div class="mb-3">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
        </div>

        <div class="mb-3">
            <label>Impressora Compativel</label>
            <input type="text"   class="form-control" name="impressoraCompativel" value="<?php echo $impressoraCompativel ?>">
        </div>

        <div>
            <label>Tipo</label> 
            <select class="form-control" name="tipo" aria-label="selecione o Tipo"> 
                <option>TONER</option>
                <option>CARTUCHO</option>
                <option>TINTA</option>
            </select>
        </div>
        <br>

        <div style="text-align: right;">
            <button type="submit" class="btn btn-success "><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;Atualizar</button>
        </div>
</div>

<?php } ?>
    </form>


<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
>>>>>>> d894a643b7b8db38132cbf146f571ecb134e9fa2
</html>