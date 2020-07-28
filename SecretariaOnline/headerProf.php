 <?php
  include "classeConexao.php";

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  // $senha = md5($_POST['senha']);


  if ($nome != "" and $senha != "" and $email != "") {

    $sql = mysql_query("INSERT INTO professor(email,nome, senha) values ('$email', '$nome','$senha') ");
    mysql_error();



    if (mysql_error() == null or mysql_error() == "") {

      echo "<script type='text/javascript'>";

      echo "alert('Cadastrado Efetuado! Faça seu Login.');";

      echo "</script>";

      header('refresh:1;iniProf.php');
    } else {


      echo "<script type='text/javascript'>";

      echo "alert('RA já Cadastrado!');";

      echo "</script>";

      header('refresh:1;cadastroProf.php');
    }
  } else {

    echo "<script type='text/javascript'>";

    echo "alert('Preencha o Formulário de Cadastro!');";

    echo "</script>";

    header('refresh:1;cadastroProf.php');
  }



  ?>

 <html>

 <head>
   <link href="front/estiloProf.css" rel="stylesheet">
 </head>

 <body>

 </body>

 </html>