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
                <a href="index.php">Voltar</a>
              </li>
            </ul>
          </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse"></div>
      </div>
    </div>
   
   <br><br>

      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center">
            <img src="front\UserBlack.png" height="200" width="200" class="img-circle">
          </div>
          <div class="col-md-6">
          <font color = "white">
            <h2 class="text-center">Login do Professor</h2>
          </font>
          </div>
        </div>
      </div>
    <br>
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left">
              <form method="POST" action="classeAcessoProf.php">
                <div class="form-group">
                  <div class="col-sm-2">
                  <font color = "white">
                    <label for="inputEmail3" class="control-label">Email</label>
                    </font>
                  </div>
                  <div class="col-sm-10">
                   <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2">
                  <font color = "white">
                    <label for="inputPassword3" class="control-label">Senha</label>
                    </font>
                  </div>
                  <div class="col-sm-10">
                    <input type="password" name="senha" class="form-control" id="inputPassword3" placeholder="Senha">
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <table>
                      <tbody>
                        <tr>
                          <td align="left" style="width:200px;">
                            <a type="submit" class="btn btn-warning" href="cadastroProf.php">Cadastre-se</a>
                          </td>
                          <td align="right" style="width:200px;">
                            <input type="submit" class="btn btn-block btn-info" name="cadastro" value="Login">
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </form>
            </div>

</body></html>