<?php	

@mysql_connect('localhost','root','') or die ("<script language='javascript' type='text/javascript'>alert('Não foi possivel conectar a base de dados !');window.location.href='index.php'</script>");
mysql_select_db('tecninfor');

	$name = $_POST['produto'];
	$descricao = $_POST['produto_descricao'];
	$sub = $_POST['produto_sub'];
	$imagem = $_FILES['produto_imagem'];
	$preco = $_POST['produdo_preco'];
	
		
	if(isset($_POST['Add_produto'])) {
		
	$extensao = strtolower(substr($_FILES['produto_imagem']['name'],-4));
					$novo_nome = md5(time()) . $extensao;
					$diretorio = "images/";
					
					move_uploaded_file($_FILES['produto_imagem']['tmp_name'], $diretorio.$novo_nome);
	}
	if ($name == NULL) {
		
		echo "<script language='javascript' type='text/javascript'>alert('Insira o nome ');window.location.href='addproduto.php';</script>";
		
	}
	
	if ($descricao == NULL){
		
		echo "<script language='javascript' type='text/javascript'>alert('Insira uma descricao');window.location.href='addproduto.php';</script>";
		
	}
	
	if($sub == NULL){
		
		echo "<script language='javascript' type='text/javascript'>alert('Insira uma sub descricao');window.location.href='addproduto.php';</script>";
		
	}
	if($preco == NULL){
		
		echo "<script language='javascript' type='text/javascript'>alert('Insira um preço');window.location.href='addproduto.php';</script>";
		
	}
	

$inserir_dados = mysql_query("INSERT INTO produtos (nome_prod,descricao_prod,sub_prod,imagem_prod,preco_prod,diretorio_prod) VALUES ('$name','$descricao','$sub','$novo_nome','$preco','$diretorio')");
	if(!$inserir_dados){
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível inserir o produto ! ');window.location.href='listarprodutos.php'</script>";
        }else{
		  echo"<script language='javascript' type='text/javascript'>alert('Produto inserido com sucesso !');window.location.href='listarprodutos.php'</script>";
        }
	
?>