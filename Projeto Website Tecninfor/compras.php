<?php
session_start();

$host ="localhost";
$login ="root";
$password="";
$dbname ="tecninfor";

$conn = new mysqli($host, $login, $password, $dbname) or print (mysql_error());

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tecninfor</title>
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
					<li> <a href="index.php">Home</a></li>
					<li><a href="artigos.php">Artigos</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="contatos.php">Contatos</a></li>
					<li class="fh5co-active"><a href="compras.php">Carrinho </a></li>
					<p></p>
		
<?php
 
//Verifico se o usuário está logado no sistema
	if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
		header("Location: login.php");
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
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Carrinho </span></h2>
				
					<p class="animate-box" data-animate-effect="fadeInLeft"> Aqui pode ver as suas encomendas.</p>
				<div class="row animate-box" data-animate-effect="fadeInLeft">
					
<?php

$procurar_dados = mysqli_query($conn, "SELECT * FROM carrinho WHERE nome_user = '".$_SESSION['nome']."'");
$fetch_dados = mysqli_fetch_array($procurar_dados);
$rows_dados = mysqli_num_rows($procurar_dados);


if($rows_dados <= 0) {
	
echo "<script language='javascript' type='text/javascript'>alert('Não existe produtos no carrinho! ');window.location.href='artigos.php'</script>";

} else {

?>
<table class ='table table-striped table-bordered table-condensed table-hover'>
<thead>
<tr>
	<td class="text-center"> Codigo</td>
	<td class="text-center"> Nome</td>
	<td class="text-center"> Preço</td>
	<td class="text-center"> Quantidade</td>
	<td class="text-center"> Estado</td>
	<td class="text-center"> Ação</td>
</tr>	
</thead>
<?php
do {
?>
<tbody>

<td class="text-center"><?php echo $fetch_dados['id'] ?></td>
<td class="text-center"><?php echo $fetch_dados['nome'] ?></td>
<td class="text-center"><?php echo $fetch_dados['preco']?> €</td>
<td class="text-center"><?php echo $fetch_dados['qtd']?></td>
<td class="text-center"><?php echo $fetch_dados['estado']?></td>
<td class="text-center"><a href='carrinho.php?eliminar&id=<?php echo $fetch_dados['id'];?>'>Retirar</a></td></tr>

<?php
} while($fetch_dados = mysqli_fetch_array($procurar_dados));}
?>

</tbody>
  
</table>
  

					</div><p class="animate-box" data-animate-effect="fadeInLeft"> Quando as suas encomendas estiverem prontas será contatado via Email, para poder levantar as mesmas, na nossa loja.</p>
					</div>
					<div class="clearfix visible-md-block"></div>
					
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