

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Cliente</title>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script>
   /*
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		*/
</script>		
		 <link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<script>
			//Ao carregar a pagina
			$(document).ready(function(){
				$("#fcadastro").validate(); //aplicando a validação ao form #fcadastro
			});
		</script>
		<style>
			Label.error{
					color: red;
					font-size: 12px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h1>Cadastro de Cliente</h1>
			<form action="gravarcliente.php" method="post" id="fcadastro">
				<label>Nome:<br>
					<input type="text" name="nome" class="required" id="nome">
				</label><br>
				<label>	Endereço:<br>
					<input type="text" name="endereco" class="required" id="endereco">
				</label><br>
				<label>Telefone:<br>
					<input type="text" name="telefone" class="required" id="telefone">
				</label><br>
				<label>CEP:<br>
					<input type="text" name="cep" class="required" id="cep">
				</label><br>
					<label>CPF:<br>
					<input type="text" name="cpf" class="required" id="cpf">
				</label><br>
				</label><br>
					<label>E-mail:<br>
					<input type="text" name="email" class="required" id="email">
				</label><br>
				<label>
					Senha:<br>
					<input type="password" name="senha" class="required" id="senha">
				</label>
				<br>
				<input type="submit" value="Cadastrar" class="btn-primary">
				<input type="reset" value="Limpar" class="btn-prim">
			</form>
			
		</div>
	</body>
</html>

