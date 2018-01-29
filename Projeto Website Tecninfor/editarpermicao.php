<?php
session_start();

$host ="localhost";
$login ="root";
$password="";
$dbname ="tecninfor";

$conn = new mysqli($host, $login, $password, $dbname) or print (mysql_error());

if(isset($_GET['editar'])) {
	
$permissao_editar = $_POST['permissao_user'];

$id = $_GET['cod'];

	$inserir_permissao = mysqli_query($conn,"UPDATE registo SET permicao = '$permissao_editar' WHERE id='$id'");

	header('location: listarutilizadores.php');
}

?>