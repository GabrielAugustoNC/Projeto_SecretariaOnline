<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="front/estilo.css" rel="stylesheet">
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
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <blockquote>
                        <font color="white">
                        </font>
                        <p>
                            <font color="#030133">Veja Aqui,

                                <h2> Seus Serviços </h2>


                            </font>
                        </p>
                    </blockquote>
                </div>


                <br>

                <font color="#030133">

                    <!-- Relatorios e Doc. de Estagio -->

                    <h3>Relatorios e Doc. de Estagio</h3>

                    <?php
                    include 'classeConexao.php';

                    $verifica_serv = "";

                    $ra_sql = "SELECT RA FROM aluno where active = '1'";
                    $ra_query = mysql_query($ra_sql);
                    $ra_result = mysql_fetch_assoc($ra_query);
                    $ra = $ra_result['RA'];


                    $verifica_sql = "SELECT cod_serv FROM andamento where ra_aluno = '$ra' AND cod_serv = '1'";
                    $verifica_query = mysql_query($verifica_sql);
                    $verifica_result = mysql_fetch_assoc($verifica_query);
                    $verifica_serv = $verifica_result['cod_serv'];




                    if ($verifica_serv != "" or $verifica_serv != null) {


                        $andamento_sql = mysql_query(
                            "SELECT * FROM andamento where 
                                         ra_aluno = '$ra' AND 
                                         cod_serv = '$verifica_serv'"
                        );
                        $andamento_result = mysql_fetch_assoc($andamento_sql);

                        $cod = $andamento_result['cod'];
                        $numFila = $andamento_result['num_fila'];
                        $status = $andamento_result['status'];
                        $prazo = $andamento_result['prazo'];


                        echo

                            "<h4><font color = '#e6e6e6'>" .
                                "Código: &nbsp;" . $cod .  "&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .
                                "RA: &nbsp;" . $ra .
                                "<br>________________________________________<br>" .
                                "Cod. Serviço: &nbsp;" . $verifica_serv .
                                "<br>________________________________________<br>" .
                                "Número na Fila: &nbsp;" . $numFila .
                                "<br>________________________________________<br>" .
                                "Status: &nbsp;" . $status .
                                "<br>________________________________________<br>" .
                                "Prazo: &nbsp;" . $prazo . "&nbsp;&nbsp;&nbsp;Dias" .
                                "<br>" . "</font></h4>";
                    } else {

                        echo "<h4><font color = '#d80703'>Nenhum Serviço Encontrado!</font></h4>";
                    }

                    ?>

                    <!-- Provas Substitutivas -->

                    <h3>Provas Substitutivas</h3>

                    <?php
                    include 'classeConexao.php';

                    $verifica_serv = "";

                    $ra_sql = "SELECT RA FROM aluno where active = '1'";
                    $ra_query = mysql_query($ra_sql);
                    $ra_result = mysql_fetch_assoc($ra_query);
                    $ra = $ra_result['RA'];


                    $verifica_sql = "SELECT cod_serv FROM andamento where ra_aluno = '$ra' AND cod_serv = '2'";
                    $verifica_query = mysql_query($verifica_sql);
                    $verifica_result = mysql_fetch_assoc($verifica_query);
                    $verifica_serv = $verifica_result['cod_serv'];




                    if ($verifica_serv != "" or $verifica_serv != null) {


                        $andamento_sql = mysql_query(
                            "SELECT * FROM andamento where 
                                         ra_aluno = '$ra' AND 
                                         cod_serv = '$verifica_serv'"
                        );
                        $andamento_result = mysql_fetch_assoc($andamento_sql);

                        $cod = $andamento_result['cod'];
                        $numFila = $andamento_result['num_fila'];
                        $status = $andamento_result['status'];
                        $prazo = $andamento_result['prazo'];


                        echo

                            "<h4><font color = '#e6e6e6'>" .
                                "Código: &nbsp;" . $cod .  "&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .
                                "RA: &nbsp;" . $ra .
                                "<br>________________________________________<br>" .
                                "Cod. Serviço: &nbsp;" . $verifica_serv .
                                "<br>________________________________________<br>" .
                                "Número na Fila: &nbsp;" . $numFila .
                                "<br>________________________________________<br>" .
                                "Status: &nbsp;" . $status .
                                "<br>________________________________________<br>" .
                                "Prazo: &nbsp;" . $prazo . "&nbsp;&nbsp;&nbsp;Dias" .
                                "<br>" . "</font></h4>";
                    } else {

                        echo "<h4><font color = '#d80703'>Nenhum Serviço Encontrado!</font></h4>";
                    }

                    ?>


                    <!-- Material Online e Duvidas -->

                    <h3>Material Online e Dúvidas</h3>

                    <?php
                    include 'classeConexao.php';

                    $verifica_serv = "";

                    $ra_sql = "SELECT RA FROM aluno where active = '1'";
                    $ra_query = mysql_query($ra_sql);
                    $ra_result = mysql_fetch_assoc($ra_query);
                    $ra = $ra_result['RA'];


                    $verifica_sql = "SELECT cod_serv FROM andamento where ra_aluno = '$ra' AND cod_serv = '3'";
                    $verifica_query = mysql_query($verifica_sql);
                    $verifica_result = mysql_fetch_assoc($verifica_query);
                    $verifica_serv = $verifica_result['cod_serv'];




                    if ($verifica_serv != "" or $verifica_serv != null) {


                        $andamento_sql = mysql_query(
                            "SELECT * FROM andamento where 
                                         ra_aluno = '$ra' AND 
                                         cod_serv = '$verifica_serv'"
                        );
                        $andamento_result = mysql_fetch_assoc($andamento_sql);

                        $cod = $andamento_result['cod'];
                        $numFila = $andamento_result['num_fila'];
                        $status = $andamento_result['status'];
                        $prazo = $andamento_result['prazo'];


                        echo

                            "<h4><font color = '#e6e6e6'>" .
                                "Código: &nbsp;" . $cod .  "&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .
                                "RA: &nbsp;" . $ra .
                                "<br>________________________________________<br>" .
                                "Cod. Serviço: &nbsp;" . $verifica_serv .
                                "<br>________________________________________<br>" .
                                "Número na Fila: &nbsp;" . $numFila .
                                "<br>________________________________________<br>" .
                                "Status: &nbsp;" . $status .
                                "<br>________________________________________<br>" .
                                "Prazo: &nbsp;" . $prazo . "&nbsp;&nbsp;&nbsp;Dias" .
                                "<br>" . "</font></h4>";
                    } else {

                        echo "<h4><font color = '#d80703'>Nenhum Serviço Encontrado!</font></h4>";
                    }

                    ?>



                    <!-- Solicitar Reuniao com o Coordenador -->

                    <h3>Reunião com o Coordenador</h3>

                    <?php
                    include 'classeConexao.php';

                    $verifica_serv = "";

                    $ra_sql = "SELECT RA FROM aluno where active = '1'";
                    $ra_query = mysql_query($ra_sql);
                    $ra_result = mysql_fetch_assoc($ra_query);
                    $ra = $ra_result['RA'];


                    $verifica_sql = "SELECT cod_serv FROM andamento where ra_aluno = '$ra' AND cod_serv = '4'";
                    $verifica_query = mysql_query($verifica_sql);
                    $verifica_result = mysql_fetch_assoc($verifica_query);
                    $verifica_serv = $verifica_result['cod_serv'];




                    if ($verifica_serv != "" or $verifica_serv != null) {


                        $andamento_sql = mysql_query(
                            "SELECT * FROM andamento where 
                                         ra_aluno = '$ra' AND 
                                         cod_serv = '$verifica_serv'"
                        );
                        $andamento_result = mysql_fetch_assoc($andamento_sql);

                        $cod = $andamento_result['cod'];
                        $numFila = $andamento_result['num_fila'];
                        $status = $andamento_result['status'];
                        $prazo = $andamento_result['prazo'];


                        echo

                            "<h4><font color = '#e6e6e6'>" .
                                "Código: &nbsp;" . $cod .  "&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .
                                "RA: &nbsp;" . $ra .
                                "<br>________________________________________<br>" .
                                "Cod. Serviço: &nbsp;" . $verifica_serv .
                                "<br>________________________________________<br>" .
                                "Número na Fila: &nbsp;" . $numFila .
                                "<br>________________________________________<br>" .
                                "Status: &nbsp;" . $status .
                                "<br>________________________________________<br>" .
                                "Prazo: &nbsp;" . $prazo . "&nbsp;&nbsp;&nbsp;Dias" .
                                "<br>" . "</font></h4>";
                    } else {

                        echo "<h4><font color = '#d80703'>Nenhum Serviço Encontrado!</font></h4>";
                    }

                    ?>





                    <br><br>
                </font>
                <div class="col-md-6">
                    <a href="menuPrincipal.php" class="btn btn-block btn-danger btn-sm">
                        <font size="3" color="White">Voltar</font>
                    </a>
                </div>



            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>