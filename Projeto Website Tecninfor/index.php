
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tecninfor </title>
	<link rel="shotcut icon" href="favicon.png" type="image/x.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Loja de reparações e venda de produtos informaticos" />
	<meta name="keywords" content="reparação, smartphone, tablet, computador, software, tinteiros, toners" />
	<meta name="author" content="DanielAlmeida" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="index.php"><img src="images/logo.png" alt="Erro ao carregar a imagem !"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li class="fh5co-active"><a href="index.php">Home</a></li>
					<li><a href="artigos.php">Artigos</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="contatos.php">Contatos</a></li>
					<li><a href="compras.php">Carrinho</a></li>
					<p></p>
					
			
<?php
//INICIO A SESSÃO
session_start();
 
//Verifico se o usuário está logado no sistema
	if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
    	echo "<li>Não tem sessão iniciada</li>";
		echo '<small><a href="login.php?token='.md5(session_id()).'">Entrar</a></small>';
	}
	else {
    	echo "<li>Olá, ".$_SESSION["nome"]."</li>";
		echo '<small><a href="logout.php?token='.md5(session_id()).'">Sair</a></small>';
	}
					
?>	

			</ul></nav>

		</aside>

		<div id="fh5co-main">

			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Bem Vindo <span>Ao Website da Tecninfor</span></h2>
				<div class="row animate-box" data-animate-effect="fadeInLeft">
<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
			</div>
			
			
			<div class="fh5co-testimonial" >
				<div class="fh5co-narrow-content">
					<div class="owl-carousel-fullwidth animate-box" data-animate-effect="fadeInLeft">
		            <div class="item">
		            	
		              	<p class="text-center quote">&ldquo; Fundada no dia 1 de abril de 2015, esta loja, em Avintes, repara todo o tipo de produtos eletrónicos.  &rdquo; </p>
		            </div>
		            <div class="item">
		            	
		              	<p class="text-center quote">&ldquo; Revenda de programas de faturação para o seu negócio ! &rdquo;<cite class="author"></p>
		            </div>
		          </div>
				</div>
			</div>

			
			<div class="fh5co-cards">
				<div class="fh5co-narrow-content">
					<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Novidades</h2>

					<div class="fh5co-flex-wrap">
						<div class="fh5co-card animate-box" data-animate-effect="fadeInLeft">
							<h5>Novos produtos na loja</h5>
							<p>A loja online tem novos produtos á venda.</p>
							<p><a href="artigos.php" class="btn btn-md btn-primary">Ir para os artigos</a></p>
						</div>
						<div class="fh5co-card animate-box" data-animate-effect="fadeInLeft">
							<h5>Promoções</h5>
							<p> Estamos com artigos em promoção.</p>
							<p><a href="promocoes.php" class="btn btn-md btn-primary">Ler mais</a></p>
						</div>

					</div>	
					
				</div>
			</div>

			<div class="fh5co-narrow-content">
				<div class="row">
					<div class="col-md-4 animate-box col-lg-12" data-animate-effect="fadeInLeft">
						<h1 class="fh5co-heading-colored">Programas de faturação para o seu negocio !</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box col-lg-4" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead">Para mais informações sobre valores e os diferentes tipos de programas entre em contato conosco.</p>
						<p><a href="contatos.php" class="btn btn-primary btn-outline">Contate-nos</a></p>
					</div>
					<div class="col-md-7 col-md-push-1">
						<div class="row">
							<div class="col-md-6 animate-box col-lg-11" data-animate-effect="fadeInLeft">
							  <p>Temos diferentes programas de faturação para o seu negocio. Estes programas são obrigatórios para quem tem um estabelecimento aberto ao publico. Os mesmos devem estar devidamente atualizados. </p>
							</div>
						</div>		
					</div>
				</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

