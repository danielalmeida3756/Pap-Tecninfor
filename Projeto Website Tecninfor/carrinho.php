<?php
session_start();

$host ="localhost";
$login ="root";
$password="";
$dbname ="tecninfor";

$conn = new mysqli($host, $login, $password, $dbname) or print (mysql_error());

if(isset($_SESSION['logado'])) {

if(isset($_GET['add'])) {		
	
$id = $_GET['id'];

$user = $_SESSION['nome'];

$procurar_dados_do_user = mysqli_query($conn, "SELECT * FROM registo WHERE nome = '$user'");
$fetch_dados_do_user = mysqli_fetch_array($procurar_dados_do_user);

$email = $fetch_dados_do_user['email'];

$procurar_dado_em_carrinho = mysqli_query($conn, "SELECT * FROM produtos WHERE id = $id");
$fetch_dados_em_carrinho = mysqli_fetch_array($procurar_dado_em_carrinho);

$nome = $fetch_dados_em_carrinho['nome_prod'];
$preco = $fetch_dados_em_carrinho['preco_prod'];
$qtd = $fetch_dados_em_carrinho['quantidade'];

$inserir_dado_em_carrinho = mysqli_query($conn, "INSERT INTO carrinho (cod,nome_user, email_user, nome, preco, qtd) VALUES ('$id','$user','$email','$nome','$preco','$qtd')");
	
header('location: compras.php');
	
}
} else {
	
header('location: compras.php');
	
}

if(isset($_GET['estado'])) {

$id = $_GET['cod'];
$estado_novo = $_POST['estado_prod'];

$inserir_estado = mysqli_query($conn,"UPDATE carrinho SET estado = '$estado_novo' WHERE id='$id'");
	
header('location: listarencomendas.php');
}


if(isset($_GET['eliminar'])) {
	
$id = $_GET['id'];

$apagar = mysqli_query($conn, "DELETE FROM carrinho WHERE id = '$id'");

header('location: compras.php');
	
}

if(isset($_GET['remover'])) {
	
$id = $_GET['cod'];

$apagar = mysqli_query($conn, "DELETE FROM carrinho WHERE id = '$id'");

header('location: listarencomendas.php');
	
}
?>