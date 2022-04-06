<?php
session_start();
include('conexao.php');
$sql = "select * from produto";
//fazer o filtro de acordo com o campo do banco de dados escolhido
$sql2 = "SELECT * FROM produto";
$resultado2 = mysqli_query($conexao,$sql2);
$resultado = mysqli_query($conexao,$sql);
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/biblioteca.css">
    <title>Comércio </title>
</head>
<body>
    <?php
        include ('menu.php');
    ?>
<div class="container">
<br> <br> <br>   
        <hr>
        <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
          <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
         <div class="carousel-inner">
             <div class="carousel-item active">
                <img class="d-block w-100" src="img/j1.png"  width=500 height= 260 alt="First slide">
             </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/j2.jpg" width=500 height= 260 alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/j3.jpg"width=500 height= 260  alt="Third slide">
            </div>
			<div class="carousel-item">
               <img class="d-block w-100" src="img/j5.jpg"width=500 height= 260  alt="Third slide">
            </div>
         </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
   </div>
    <div class="frase container">
                <h3>Conheça os produtos mais comprados</h3>
                <hr>
    </div>
        <section class="container">
            <div class="row">
                <?php
                $i = 1;
                do {
                    ($dados = mysqli_fetch_array($resultado)); 
                ?>     
    <div class="col-lg-2 container">
       <div class="foto">
        <a href="produtop.php?codproduto=<?= $dados['codproduto']; ?>">
        <img src="fotos/<?= $dados['imagem']; ?>" alt="" class="img-fluid"></a>
      </div>
      <div class="descricao">
      <h5><?php echo $dados['descricao']; ?> </h5>
     <p><?php echo $dados['categoria']; ?></p>
	 <p><?php echo "R$ ";
			   echo $dados['preco']; ?></p>
    </div></div>
                
    <?php
       $i++;
         } while ($i<10);
       ?>
     </div>
    </section>
    <section class="container row-fluid">
      <div class="frase">
        <h3>Produtos para se inspirar no dia a dia</h3>
         <hr>
         <div class="row">
          <?php
          $i = 1;
          do {
          ($dados = mysqli_fetch_array($resultado2)); 
          ?>
           <div class="col-lg-2 container">
              <div class="foto">
                <a href="produtop.php?codproduto=<?= $dados['codproduto']; ?>">
                <img src="fotos/<?= $dados['imagem']; ?>" alt="" class="img-fluid"></a>
             </div>
            <div class="descricao">
              <h5><?php echo $dados['descricao']; ?></h5>
              <p><?php echo $dados['categoria']; ?></p>
			  <p><?php echo "R$ ";
			   echo $dados['preco']; ?></p>
                            </div>
                        </div>
                
                <?php
                    $i++;
                        } while ($i<6);
                ?>

            </div>
            </div>


        </section>

   <script>
   /*
        <script src="https://code.jquery.com/jquery.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	*/</script>
		<script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js" ></script>
        <script src="js/bootstrap.min.js"></script>

<?php include "footer.php";?>

</body>

</html>
