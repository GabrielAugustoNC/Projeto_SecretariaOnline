<html><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
         <link href="front/styleProf.css" rel="stylesheet">
        
    </head><body>
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
                            <a href="logoffProf.php">Sair</a>
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
                                <p><font color="white">Olá,
                                <br><h2>Professor<br></h2>
                                </font>

                                <font color="black">
                                    <?php 

                                     include "classeConexao.php";
                                     $sql ="SELECT nome FROM professor where active = '1'"; 
                                     $query = mysql_query($sql); 
                                     $resultado = mysql_fetch_assoc($query); 
                                     $nome = $resultado[ 'nome']; 

                                     echo "<h2><b>$nome</b></h2>";
                                    
                                    
                                    
                                    ?>
                                    
                            </font>
                    </p></blockquote></div>

                    <div class="col-md-6">
                        <a href = "" class = "btn btn-block btn-warning"><font size="3" color="White">Ver Serviços Pendentes</font></a>
                    </div>

                    <br>

                    <div class="col-md-6">
                       <a href = "" class="btn btn-block btn-danger btn-sm">
                       <font size="3" color="White">Ativar Serviço</font></a>
                    </div>

                    <h3 class="text-center">
                        <font color="white">Serviços Gerenciados:</font>
                    </h3>
                    <br> 

                    <table border = "0" align = "center">
                        <tr>
                                <td width="150px"> 
                                    <h4 class="text-center" align = "right">
                                    <font color="white">Relatórios de Estagio</font>
                                    </h4>
                                </td>

                                <td width="5px">    
                                    <h4 class="text-center">
                                    <font color="white">Provas Substitutivas</font>
                                    </h4>
                                </td>
                        </tr>

                           <tr>
                                <td width="150px"> 
                                     <h4 class="text-center">
                                     <font color="white">Material Online e Dúvidas</font>
                                     </h4>
                                </td>

                                <td>    
                                    <h4 align = "center">
                                    <font color="white">Reunião com Coordenador</font>
                                    </h4>
                                </td>
                        </tr>
                    
                   
                   
                    

                  
                 </div>
            </div>
        </div>
    </body>
</html>