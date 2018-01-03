<?php
@mysql_connect('localhost','root','') or die ("<script language='javascript' type='text/javascript'>alert('Não foi possivel conectar a base de dados !');window.location.href='index.php'</script>");
mysql_select_db('tecninfor');

$nome = $_POST['produto'];
$descricao = $_POST['produto_descricao'];
$sub = $_POST['produto_sub'];
$preco = $_POST['produto_preco'];
$imagem = $_POST['produto_imagem'];
$id = $_GET['cod'];

	$editar_produto = mysql_query("UPDATE produtos SET nome_prod = '$nome',descricao_prod = '$descricao',sub_prod = '$sub',preco_prod = '$preco', imagem_prod = '$imagem' WHERE id='$id'");
	
		if(!$editar_produto){
			echo"<script language='javascript' type='text/javascript'>alert('Não foi possível alterar o produto ! ');window.location.href='listarprodutos.php'</script>";
        }else{
		   echo"<script language='javascript' type='text/javascript'>alert('Produto alterado com sucesso !');window.location.href='listarprodutos.php'</script>";
        }

?>