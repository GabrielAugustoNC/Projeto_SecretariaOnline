          <?php 
                include "classeConexao.php";

                $nome = $_POST['nome'];
                $ra = $_POST['ra'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
               // $senha = md5($_POST['senha']);
                $contato = $_POST['contato'];

                if ($ra != "" and $nome != "" and $senha != ""){

                $sql = mysql_query("INSERT INTO aluno(RA,nome,email,senha,contato) values ('$ra', '$nome', '$email','$senha','$contato') ");
                mysql_error();



                      if (mysql_error() == null or mysql_error() == "" ){
                         
                          header( 'Location: confirmaCadastro.php');

                       } else{

                    
                          echo"<script type='text/javascript'>";

                          echo "alert('RA já Cadastrado!');";

                          echo "</script>";
                  
                }

                }else{
                    
                    echo"<script type='text/javascript'>";

                    echo "alert('Preencha o Formulário de Cadastro!');";

                    echo "</script>";

                  
                }

                 header('refresh:1;cadastro.php');

?>

<html>
  <head>
  <link href="front/style.css" rel="stylesheet">
  </head>
  <body>
    
  </body>
</html>