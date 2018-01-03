<?php
@mysql_connect('localhost','root','') or die ("<script language='javascript' type='text/javascript'>alert('Não foi possivel conectar a base de dados !');window.location.href='index.php'</script>");
mysql_select_db('tecninfor');

$permissao = $_POST['permissao'];
$id = $_GET['cod'];

	$inserir_permissao = mysql_query("UPDATE registo SET permicao = '$permissao' WHERE id='$id'");
		if(!$inserir_permissao){
			echo"<script language='javascript' type='text/javascript'>alert('Não foi possível alterar a permissao ! ');window.location.href='listarutilizadores.php'</script>";
        }else{
		   echo"<script language='javascript' type='text/javascript'>alert('Permissao alterada com sucesso !');window.location.href='listarutilizadores.php'</script>";
        }

?>