 <?php

  include "classeConexao.php";
  $combo = $_POST['selected'];
  $cod_serv = 0;

  switch ($combo) {
    case 'Relatorios e Documentos de Estagio':
      $cod_serv = 1;
      break;

    case 'Provas Substitutivas':
      $cod_serv = 2;
      break;

    case 'Material Online e Duvidas':
      $cod_serv = 3;
      break;

    case 'Solicitar Reuniao com o Coordenador':
      $cod_serv = 4;
      break;
    default:

      echo "<script type='text/javascript'>";

      echo "alert('Serviço Inválido!');";

      echo "</script>";

      break;
  }

  $sql_ = "SELECT ra FROM aluno WHERE active = '1'";
  $query_ = mysql_query($sql_);
  $resultado_ = mysql_fetch_array($query_);

  $ra = $resultado_['ra'];



  $sqlVerifica = mysql_query("SELECT cod_serv FROM andamento WHERE ra_aluno = '$ra' AND cod_serv = '$cod_serv'");
  $sqlResult = mysql_fetch_array($sqlVerifica);

  $verificacao = $sqlResult['cod_serv'];


  if ($verificacao != $cod_serv) {




    $sql = mysql_query("SELECT * FROM fila WHERE cod_serv = '$cod_serv'");

    $resultado = mysql_fetch_assoc($sql);

    //var_dump($resultado);

    $num_fila = $resultado['numero'] + 1;

    //echo "num_fila: " . $num_fila;

    $sql_UPDATE = mysql_query("UPDATE fila SET numero = '$num_fila' WHERE cod_serv = '$cod_serv'");


    $sql_prazo = mysql_query("SELECT prazo FROM servico WHERE cod = '$cod_serv'");
    $prazoArray = mysql_fetch_array($sql_prazo);

    $prazo = $prazoArray['prazo'];





    $sql_insert = mysql_query("INSERT INTO andamento(ra_aluno,cod_serv,num_fila,prazo) 
      	                         VALUES ('$ra', '$cod_serv','$num_fila','$prazo') ");
    mysql_error();



    if (mysql_error() == null or mysql_error() == "") {

      echo "<script type='text/javascript'>";

      echo "alert('Serviço Adicionado!');";

      echo "</script>";

      header('refresh:1;menuPrincipal.php');
    } else {

      echo "<script type='text/javascript'>";

      echo "alert('Erro no Cadastro!'); <br>";

      echo mysql_error();

      echo "</script>";

      header('refresh:1;solicitarServ.php');
    }
  } else {

    echo "<script type='text/javascript'>";

    echo "alert('Serviço já Existente!');";

    echo mysql_error();

    echo "</script>";

    header('refresh:1;solicitarServ.php');
  }

  ?>


 <html>

 <head>
   <link href="front/style.css" rel="stylesheet">
 </head>

 <body>

 </body>

 </html>