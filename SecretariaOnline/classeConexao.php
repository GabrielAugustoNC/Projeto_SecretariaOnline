<?php

$host = "127.0.0.1"; //computador onde o servidor de banco de dados esta instalado
$user = "root"; //seu usuario para acessar o banco
$pass = ""; //senha do usuario para acessar o banco
$banco = "secretaria"; //banco que deseja acessar

$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco);


if (mysql_error()==""){
	//echo "conexao Ok";
}
?>