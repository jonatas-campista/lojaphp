<?php
session_start();
?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
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

  
   
     <hr>











<?php

include "conexao2.php";
?>
<section class="container-fluid">
  <div class="container" style="width:100%;">
 <br><br>
 <h1> Produtos</h1>
	<div class="row">
		<!--Imagens diretas do banco-->       
        <?php
        $stmt = $conexao->prepare("SELECT * FROM produto");
        if ($stmt->execute()) {
            while ($row = $stmt->fetch()) {
        ?>
		
		<div class="col-sm-3">
			<div class="thumbnail">
              <img src="fotos/<?php echo $row['imagem'] ?>" alt="<?php echo $row['imagem'] ?>" style="height:150px;width:50%;">
              <div class="caption text-center">
                <h3>Descrição<?php echo $row['descricao'] ?></h3>
                <p><br/><strong>Categoria</strong>: <?php echo $row['categoria'] ?><br><br>
				<strong>Preço</strong>:  <?php echo "R$ ";
			   echo $row['preco']; ?>
               </p>
              </div>
          </div>
         </div>
      
        <?php
            }
        }
        ?>
     </div>
	 </div>
   <?php include "footer.php";?>