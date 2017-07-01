<?php
include "classeConexao.php";
             $sql = "UPDATE aluno SET active = '0' where active = '1'";
             $query = mysql_query($sql);
             
            header('refresh:1;index.php');

?>

<html>
  <head>
  <link href="front/style.css" rel="stylesheet">
  </head>
  <body>
    
  </body>
</html>