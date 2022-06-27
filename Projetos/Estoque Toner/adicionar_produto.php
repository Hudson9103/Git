<<<<<<< HEAD
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

    <form action="_inserir_produto.php" method="post">

        <div class="mb-3">
            <label>Modelo</label>
            <input type="text" class="form-control" name="modelo" placeholder="Insira o Modelo" autocomplete="off">
        </div>

        <div class="mb-3">
            <label>Preço Unitário</label>
            <input type="int" class="form-control" name="precoUnitario" placeholder="Insira o Valor R$" autocomplete="off">
        </div>

        <div class="mb-3">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="quantidade" placeholder="Insira a Quantidade" autocomplete="off">
        </div>

        <div class="mb-3">
            <label>Impressora Compativel</label>
            <input type="text"   class="form-control" name="impressoraCompativel" placeholder="Insira Impressora Compativel" autocomplete="off">
        </div>

        <div>
            <label>Tipo</label> 
            <select class="form-control" name="tipo" aria-label="selecione o Tipo" >
                <option></option>
                <option>TONER</option>
                <option>CARTUCHO</option>
                <option>TINTA</option>
            </select>
        </div>
        <br>

        <div style="text-align: right;">
            <button type="submit" class="btn btn-success "><i class="fas fa-external-link-alt"></i>&nbsp;Cadastrar</button>
            <a href="index.php" role="buttom" class="btn btn-success"><i class="fas fa-undo"></i>&nbsp; Menu </a>
            <a href="lista_produtos.php" class="btn btn-success ">Lista de Produtos</a>
        </div>
</div>


    </form>


<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
=======
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

    <form action="_inserir_produto.php" method="post">

        <div class="mb-3">
            <label>Modelo</label>
            <input type="text" class="form-control" name="modelo" placeholder="Insira o Modelo" autocomplete="off">
        </div>

        <div class="mb-3">
            <label>Preço Unitário</label>
            <input type="int" class="form-control" name="precoUnitario" placeholder="Insira o Valor R$" autocomplete="off">
        </div>

        <div class="mb-3">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="quantidade" placeholder="Insira a Quantidade" autocomplete="off">
        </div>

        <div class="mb-3">
            <label>Impressora Compativel</label>
            <input type="text"   class="form-control" name="impressoraCompativel" placeholder="Insira Impressora Compativel" autocomplete="off">
        </div>

        <div>
            <label>Tipo</label> 
            <select class="form-control" name="tipo" aria-label="selecione o Tipo" >
                <option></option>
                <option>TONER</option>
                <option>CARTUCHO</option>
                <option>TINTA</option>
            </select>
        </div>
        <br>

        <div style="text-align: right;">
            <button type="submit" class="btn btn-success "><i class="fas fa-external-link-alt"></i>&nbsp;Cadastrar</button>
            <a href="index.php" role="buttom" class="btn btn-success"><i class="fas fa-undo"></i>&nbsp; Menu </a>
            <a href="lista_produtos.php" class="btn btn-success ">Lista de Produtos</a>
        </div>
</div>


    </form>


<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
>>>>>>> d894a643b7b8db38132cbf146f571ecb134e9fa2
</html>