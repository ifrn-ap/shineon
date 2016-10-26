<?php if(!isset($_GET['acao'])) $_GET[ 'acao']='noticia'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Shine It On</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-4.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php" class="simple-text">
                    Shine It On
                </a>
            </div>
            <ul class="nav">
                <li class=<?php if($_GET['acao']=='noticia') echo 'active'; ?>>
                    <a href="index.php?acao=noticia">
                        <i class="pe-7s-clock"></i>
                        <p>Últimas Notícias</p>
                    </a>
                </li>
                <li class=<?php if($_GET['acao']=='assistencia') echo 'active'; ?>>
                    <a href="index.php?acao=assistencia">
                        <i class="pe-7s-users"></i>
                        <p>Assistência Social</p>
                    </a>
                </li>
                <li class=<?php if($_GET['acao']=='atividade') echo 'active'; ?>>
                    <a href="index.php?acao=atividade">
                        <i class="pe-7s-notebook"></i>
                        <p>Atividades Estudantis</p>
                    </a>
                </li>
                <li class=<?php if($_GET['acao']=='comunicacao') echo 'active'; ?>>
                    <a href="index.php?acao=comunicacao">
                        <i class="pe-7s-speaker"></i>
                        <p>Comunicação</p>
                    </a>
                </li>
                <li class=<?php if($_GET['acao']=='esporte') echo 'active'; ?>>
                    <a href="index.php?acao=esporte">
                        <i class="pe-7s-ball"></i>
                        <p>Esporte</p>
                    </a>
                </li>
                <li class=<?php if($_GET['acao']=='saude') echo 'active'; ?>>
                    <a href="index.php?acao=saude">
                        <i class="pe-7s-like"></i>
                        <p>Saúde</p>
                    </a>
                </li>
                <li class=<?php if($_GET['acao']=='cadastro') echo 'active'; ?>>
                    <a href="index.php?acao=cadastro">
                        <i class="pe-7s-more"></i>
                        <p>Cadastre-se aqui</p>
                    </a>
                </li>

                <li class="active-pro">
                    <a href="http://portal.ifrn.edu.br/campus/apodi">
                        <i class="pe-7s-rocket"></i>
                        <p>IFRN OFICIAL</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Acesso do Administrador</h4>
      </div>
      <br/>
      <div class="modal-body">
            <form role="form" method="POST" action="login.php">
                <div class="form-group">
                    <label for="matricula">
                        Matrícula
                    </label>
                    <input type="matricula" placeholder="Digite o sua matrícula" class="form-control" name="email">
                </div>
                <!-- <div class="form-group">f    
                     
                    <label for="senha">
                        Senha
                     </label>
                    <input type="password" placeholder="Digite sua senha" class="form-control" name="senha">
                </div> -->
            <div class="text-center">
                <br/>
                <button type="submit" class="btn btn-primary">
                    Acessar
                </button>
            </div>
            </form>
            <br/>
      </div>
    </div>

  </div>
</div>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Mural</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                                       
                        <li>
                           <a >
                                <i class="pe-7s-ribbon"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li>
                            <a href="#" class= "pe-7s-lock" data-toggle="modal" data-target="#myModal">
                               Administrador
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
