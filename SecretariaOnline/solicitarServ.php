<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="front/style.css" rel="stylesheet">
</head>

<body>

  <div class="navbar navbar-default navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand"><img height="20" alt="Brand" src="front\UniLogo.png"></a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-ex-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active">
            <a href="menuPrincipal.php">Voltar</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <font color="white">
          <h1 class="text-center">Solicitar Serviço</h1>
          <h3 class="text-center">Preencha os campos</h3>
        </font>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-md-12">


        <form method="POST" action="functionService.php">


          <div class="form-group">
            <div class="col-sm-2">
              <font color="white">
                <label for="inputPassword3" class="control-label">RA</label>
              </font>
            </div>
            <div class="col-sm-10">


              <input type="text" name="ra" class="form-control" id="inputPassword3" maxlength="8" placeholder="Digite seu RA" disabled="" value=<?php
                                                                                                                                                include "classeConexao.php";

                                                                                                                                                $sql = "SELECT ra FROM aluno WHERE active = '1'";
                                                                                                                                                $query = mysql_query($sql);
                                                                                                                                                $resultado = mysql_fetch_array($query);

                                                                                                                                                $ra = $resultado['ra'];

                                                                                                                                                echo $ra;

                                                                                                                                                ?>>



            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-2">
              <font color="white">
                <label for="inputPassword3" class="control-label">Escolher Serviço</label>
              </font>
            </div>
            <div class="col-sm-10">
              <select name="selected" class="form-control">
                <option>--Selecione--</option>
                <option>Relatorios e Documentos de Estagio</option>
                <option>Provas Substitutivas</option>
                <option>Material Online e Duvidas</option>
                <option>Solicitar Reuniao com o Coordenador</option>
              </select>
            </div>
          </div>








          <table>
            <tr>
              <td width="100" align="center">
                <a type="submit" class="btn btn-info btn-sm" href="menuPrincipal.php">Cancelar</a>
              </td>
              <td width="210" align="right ">

                <input type="submit" class="btn btn-sm btn-warning" name="cadastro" value="Confirmar"><br>
              </td>
            </tr>
          </table>


        </form>


      </div>
    </div>
  </div>


</body>

</html>