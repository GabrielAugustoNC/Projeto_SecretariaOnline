<?php
include "classeConexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];
//$senha = md5($_POST['senha']);
$sql = "SELECT email, senha FROM professor WHERE email = '$email' AND senha = '$senha'";
$query = mysql_query($sql);
$resultado = mysql_fetch_assoc($query);

//var_dump($resultado);

$verificaEmail = $resultado['email'];
$verificaSenha = $resultado['senha'];

/*echo "<br>verificaRA: ", $verificaRA;
	echo "<br>verificaSenha: ", $verificaSenha;
	echo "<br>ra: ", $ra;
	echo "<br>senha: ", $senha;*/

if ($verificaEmail == $email and $verificaSenha == $senha) {

	if ($email != "" and $senha != "") {

		$sql_ = "UPDATE professor SET active = '1' where email = '$email'";
		$query_ = mysql_query($sql_);

		header('refresh:1;menuPrincipalProf.php');
	} else {

		echo "<script type='text/javascript'>";

		echo "alert('Por favor, Digite seu Email e Senha!');";

		echo "</script>";


		header('refresh:1;iniProf.php');
	}
} else {

	echo "<script type='text/javascript'>";

	echo "alert('Dados Incorretos');";

	echo "</script>";


	header('refresh:1;iniProf.php');
}

?>

<html>

<head>
	<link href="front/styleProf.css" rel="stylesheet">
</head>

<body>

</body>

</html>