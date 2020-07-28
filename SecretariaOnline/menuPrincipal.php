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
                        <a href="logoff.php">Sair</a>
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
                            <font color="white">Olá,

                                <?php

                                include "classeConexao.php";
                                $sql = "SELECT nome FROM aluno where active = '1'";
                                $query = mysql_query($sql);
                                $resultado = mysql_fetch_assoc($query);
                                $nome = $resultado['nome'];

                                echo "<h2>$nome</h2>";

                                ?>
                                <br>
                                <br>
                            </font>
                        </p>
                    </blockquote>
                </div>

                <div class="col-md-6">
                    <a href="verServicos.php" class="btn btn-block btn-warning">
                        <font size="3" color="White">Ver Serviços Cadastrados</font>
                    </a>
                </div>

                <br>

                <div class="col-md-6">
                    <a href="solicitarServ.php" class="btn btn-block btn-danger btn-sm">
                        <font size="3" color="White">Solicitar Serviço</font>
                    </a>
                </div>

                <h3 class="text-center">
                    <font color="white">Serviços Disponíveis:</font>
                </h3>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info">
                                    <font color="#0f7be7">
                                        <h4>Relatórios e Documentos de Estágio</h4>
                                    </font>
                                </li>
                                <li class="list-group-item list-group-item-info">
                                    <font color="#0f7be7">
                                        <h4>Provas Substitutivas</h4>
                                    </font>
                                </li>
                                <li class="list-group-item list-group-item-info">
                                    <font color="#0f7be7">
                                        <h4>Material Online e Dúvidas</h4>
                                    </font>
                                </li>
                                <li class="list-group-item list-group-item-info">
                                    <font color="#0f7be7">
                                        <h4>Solicitar Reunião com Coordenador</h4>
                                    </font>
                                </li>
                            </ul>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>