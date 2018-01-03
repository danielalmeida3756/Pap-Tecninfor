<?php 
session_start();

$login = $_POST['name'];
$senha = MD5($_POST['pass']);

@mysql_connect('localhost','root','') or die ("<script language='javascript' type='text/javascript'>alert('Não foi possivel conectar a base de dados !');window.location.href='index.php'</script>");
mysql_select_db('tecninfor');

$result = mysql_query("SELECT * FROM registo WHERE nome = '$login' AND pass = '$senha'");
$resultado_fetch = mysql_fetch_array($result);
$contagem = mysql_num_rows($result);
        
      if($contagem <= 0){
		  
			echo"<script language='javascript' type='text/javascript'>alert('Login não existente na base de dados, por favor inscreva-se !');window.location.href='registo.php'</script>";
			$_SESSION["logado"] = False;
		  
        }else{
	
			$_SESSION['nome'] = $login;
			$_SESSION['pass'] = $senha;
			
			$_SESSION["logado"] = TRUE;

		$nivel=$resultado_fetch['permicao'];
		$_SESSION['permicao'] = $nivel;
		
		if ($nivel <= 0 ){
			echo"<script language='javascript' type='text/javascript'>alert('Login feito com sucesso !');window.location.href='index.php'</script>";
		}else{
			echo"<script language='javascript' type='text/javascript'>alert('Login feito com sucesso ! Entrando na área de administrador!');window.location.href='areaadmin.php'</script>";
		}
		
		}
      
		$_SESSION["user"] = $_POST["login"];
		
?>