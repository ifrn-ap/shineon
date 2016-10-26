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
    <div class="sidebar" data-color="orange" data-image="assets/img/sidebar-4.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="painel.html" class="simple-text">
                    Shine It On
                </a>
            </div>
            <ul class="nav">
                <li class=<?php if($_GET['acao']=='inserirNoticia') echo 'active'; ?>>
                    <a href="index_admin.php?acao=inserirNoticia">
                        <i class="pe-7s-paperclip"></i>
                        <p>Inserir Notícia</p>
                    </a>
                </li>
                <li class=<?php if($_GET['acao']=='listarNoticia') echo 'active'; ?>>
                    <a href="index_admin.php?acao=listarNoticia">
                        <i class="pe-7s-browser"></i>
                        <p>Listar Notícias</p>
                    </a>
                </li>
                <li class=<?php if($_GET['acao']=='inserirEnquete') echo 'active'; ?>>
                    <a href="painel.php?acao=inserirEnquete">
                        <i class="pe-7s-graph2"></i>
                        <p>Inserir Enquente</p>
                                            </a>
                </li>
                <li class=<?php if($_GET['acao']=='listarEnquete') echo 'active'; ?>>
                    <a href="painel.php?acao=listarEnquete">
                        <i class="pe-7s-news-paper"></i>
                        <p>Listar Enquetes</p>
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
                            <a href="logout.php" class= "pe-7s-close" >
                               Sair
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
