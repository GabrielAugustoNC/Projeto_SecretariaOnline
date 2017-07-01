<?php 
	include "classeConexao.php";

	$ra = $_POST['ra']; 
	$senha = $_POST['senha'];
	//$senha = md5($_POST['senha']);
	$sql = "SELECT ra, senha FROM aluno WHERE ra = '$ra' AND senha = '$senha'";
	$query = mysql_query($sql);
	$resultado = mysql_fetch_assoc($query);
  	
	//var_dump($resultado);

	$verificaRA = $resultado['ra']; 
	$verificaSenha = $resultado['senha'];

	/*echo "<br>verificaRA: ", $verificaRA;
	echo "<br>verificaSenha: ", $verificaSenha;
	echo "<br>ra: ", $ra;
	echo "<br>senha: ", $senha;*/
  	
 if ($verificaRA == $ra and $verificaSenha == $senha){

 		if($ra != "" and $senha != "") {

      $sql_ = "UPDATE aluno SET active = '1' where ra = '$ra'";
      $query_ = mysql_query($sql_);

 			header('refresh:1;menuPrincipal.php');
 		}
 		else{

 			echo "<script type='text/javascript'>";

        	echo "alert('Por favor, Digite seu RA e Senha!');";

        	echo "</script>";


        	header('refresh:1;ini.php');
 		}
  		
  	
  	}

    else if ($ra == "admin" and $senha == "admin"){
          header('refresh:1;menuPrincipal.php');
    }

    else {
  			
  		echo "<script type='text/javascript'>";

        echo "alert('Dados Incorretos');";

        echo "</script>";


        header('refresh:1;ini.php');
  	}  

?>

<html>
	<head>
  <link href="front/style.css" rel="stylesheet">
  </head>
  <body>
  	
  </body>
</html>
