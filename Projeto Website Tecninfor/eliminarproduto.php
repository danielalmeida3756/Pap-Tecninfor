<?php
@mysql_connect('localhost','root','') or die ("<script language='javascript' type='text/javascript'>alert('Não foi possivel conectar a base de dados !');window.location.href='index.php'</script>");
mysql_select_db('tecninfor');

$cod = $_GET['cod'];

$apagar= mysql_query("DELETE FROM produtos WHERE id='$cod'");
	if(!$apagar){
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível apagar o produto ! ');window.location.href='listarprodutos.php'</script>";
        }else{
		  echo"<script language='javascript' type='text/javascript'>alert('Produto apagado com sucesso !');window.location.href='listarprodutos.php'</script>";
        }

?>