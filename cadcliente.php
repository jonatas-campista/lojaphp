<?php
session_start();
?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/biblioteca.css">
    <title></title>
</head>

<body>

    <?php
        include ('menu.php');
    ?>
<section class="container-fluid">
    
    <br>
	<div class="container">
	<br><br><br><br>
	<form action="gravarcliente.php" method="POST" id="fcadastro">
	<div class="container">
	<div class="form-group">
	<h1>Cadastro de Cliente</h1>
	Nome:<br><input type=text class="form-control"  name="nome"><br>
		Endereço:<br><input type=text class="form-control"  name="endereco"><br>
			CEP:<br><input type=text class="form-control"  name="cep"><br>
				Telefone:<br><input type=text class="form-control"  name="telefone"><br>
					CPF:<br><input type=text class="form-control"  name="cpf"><br>
	E-mail:<br><input type=text class="form-control"name="email"><br>
	
	Senha:<br><input type="password"class="form-control" name="senha"><br>
	
	<input class="btn-danger"type="reset" value="Limpar">
	<input class="btn-success"type="submit" value="Enviar">
	</div>
	</form>
</div>
</div>
<?php include "footer.php";?>