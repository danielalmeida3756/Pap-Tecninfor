<?php	

@mysql_connect('localhost','root','') or die ("<script language='javascript' type='text/javascript'>alert('Não foi possivel conectar a base de dados !');window.location.href='index.php'</script>");
mysql_select_db('tecninfor');

	$username = $_POST['username_registar'];
	$email =  $_POST['email_registar'];
    $password = md5($_POST['password_registar']);
	$repassword = md5 ($_POST ['password_rep']);
		
	if($_POST['Registar']) {
	
	if ($username == NULL) {
		
		echo "<script language='javascript' type=
		s'text/javascript'>alert('Insira o nome de utilizador');window.location.href='login.php';</script>";
		
	}
	
	if ($password == NULL){
		
		echo "<script language='javascript' type='text/javascript'>alert('Insira a password');window.location.href='login.php';</script>";
		
	}
	
	if($repassword == NULL){
		
		echo "<script language='javascript' type='text/javascript'>alert('Repita a password');window.location.href='login.php';</script>";
		
	}
	
	if ($password != $repassword){
		
		echo "<script language='javascript' type='text/javascript'>alert('As passwords não são iguais');window.location.href='login.php';</script>";
		
	}
	

$inserir_dados = mysql_query("INSERT INTO registo (nome,email,pass) VALUES ('$username','$email','$password')");
	if($inserir_dados){
          echo"<script language='javascript' type='text/javascript'>alert('Registo realizado com sucesso !');window.location.href='login.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível fazer o registo ! ');window.location.href='login.php'</script>";
        }

	
	} else {}
	
?>