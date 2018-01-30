<?php
session_start();
$nivel = $_SESSION['permicao'];
	if ($nivel == 0){
		header("Location: index.php");
	}

$host ="localhost";
$login ="root";
$password="";
$dbname ="tecninfor";

$conn = new mysqli($host, $login, $password, $dbname) or print (mysql_error());

 
	$consulta = "SELECT * FROM carrinho ORDER BY id ASC ";
	$resultado_prod = mysqli_query($conn, $consulta);

?>

<meta HTTP-EQUIV='refresh' CONTENT='5;URL=listarencomendas.php'>

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
					<li><a href="compras.php">Carrinho</a></li>
					<p></p>
		
<?php				
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
				<h2>Encomendas realizadas </span></h2>
					<p "> Aqui pode ver as encomendas realizadas pelos utilizadores.</p>
			
<?php

$linha=mysqli_fetch_assoc($resultado_prod);
	
?>

<table class ="table table-striped table-bordered table-condensed table-hover">
<thead>
<tr>
	<td class="text-center"> Codigo</td>
	<td class="text-center"> Nome do utilizador</td>
	<td class="text-center"> Email do utilizador</td>
	<td class="text-center"> Nome do produto</td>
	<td class="text-center"> Preço</td>
	<td class="text-center"> Quantidade</td>
	<td class="text-center"> Estado</td>
	<td class="text-center"> Ação</td>
	</tr>
</thead>
<tbody>
	
<?php
do{
?>
<tr>

<form method="post" name="contact-form" class="contact-form col-lg-offset-4 col-lg-5" action="carrinho.php?estado&cod=<?php echo $linha['id']; ?>">

<td class="text-center"><?php echo $linha['id']?></td>
<td class="text-center"><?php echo $linha['nome_user']?></td>
<td class="text-center"><?php echo $linha['email_user']?></td>
<td class="text-center"><?php echo $linha['nome']?></td>
<td class="text-center"><?php echo $linha['preco']?></td>
<td class="text-center"><?php echo $linha['qtd']?></td>
<td class="text-center">

<select name="estado_prod">
<option value="<?php echo $linha['estado']; ?>" selected><?php echo $linha['estado'] ?></option>

<?php 
	if($linha['estado'] == "Em Processo"){
	?>
	<option value ="Em Analise">Em Analise</option>
	<option value ="Aceite">Aceite</option>
	<option value ="Entregue">Entregue</option>
	<option value ="Pronta">Pronta</option>
	<?php }?>

<?php
	if($linha['estado'] == "Aceite"){
	?>
	<option value ="Em Analise">Em Analise</option>
	<option value ="Em Processo">Em Processo</option>
	<option value ="Entregue">Entregue</option>
	<option value ="Pronta">Pronta</option>
	<?php }?>

<?php
	if($linha['estado'] == "Em Analise"){
	?>
	<option value ="Aceite">Aceite</option>
	<option value ="Em Processo">Em Processo</option>
	<option value ="Entregue">Entregue</option>
	<option value ="Pronta">Pronta</option>	
	<?php }?>

<?php
	if($linha['estado'] == "Entregue"){
	?>
	<option value ="Em Analise">Em Analise</option>
	<option value ="Aceite">Aceite</option>
	<option value ="Em Processo">Em Processo</option>
	<option value ="Pronta">Pronta</option>
	<?php }?>
	
<?php
	if($linha['estado'] == "Pronta"){
	?>
	<option value ="Em Analise">Em Analise</option>
	<option value ="Aceite">Aceite</option>
	<option value ="Entregue">Entregue</option>
	<option value ="Em Processo">Em Processo</option>
	<?php }?>

</select><input type='submit' value="Editar" name='estado' class="btn btn-primary btn-outline" /></td>

</form>	
<td class="text-center"><a href='carrinho.php?remover&cod=<?php echo $linha['id'];?>'>Eliminar</a></td></tr>

<?php
}while($linha=mysqli_fetch_assoc($resultado_prod));
?>
	
</tbody>
</table>		

	<p></p>
	<div class="col-sm-4 col-xs-4 text-center col-lg-offset-3 col-lg-5 col-md-12">
	
							<p class="col-md-12"><a href="areaadmin.php" class="btn btn-primary btn-outline">Voltar</a></p>		
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

