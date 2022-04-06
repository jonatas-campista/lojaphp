
   <nav class="navbar navbar-expand-lg bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="buscaprodutos.php">Comprar Produto</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="produtos22.php">Produtos</a>
                </li>
                
                <li class="nav-item">
                    
					    <a class="nav-link" href="faleconosco.php">Fale Conosco</a>
                </li>

            </ul>
            <ul class="navbar-nav mt-2 mt-lg-0">

                <?php
        if(!isset($_SESSION['nomecliente'])){
        ?>
                     <li class="nav-item">
                        <a class="nav-link" href="cadcliente.php"><img src="img/login.png" alt="" >Cadastre-se</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><img src="img/man-user.png" alt="" >Login</a>
                    </li>
                    <?php
        } else{
echo "
          <li class='nav-item'>
              <div class='text-light'> Olá, " . $_SESSION['clientenome']  ." </div>
          </li>
          <li class='nav-item'>
              <a class='nav-link' href=logoff.php>Sair</a>
          </li>";

        }
                    ?>
        <li class="nav-item">        
        <a class="nav-link" href="carrinho.php"><img src="img/carrinho.png" alt="" >Carrinho</a>
        </li> 
		<li class="nav-item"><a class="nav-link" href="admin/login.php"><img src="img/man-user.png" alt="" >Acesso Restrito</a></li>		
			
            </ul>
        </div>
    </div>
</nav>
