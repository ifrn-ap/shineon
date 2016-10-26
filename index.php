<?php 
session_start();
include 'views/header_index.php';
include 'conexao.php';
if($_GET['acao']=='noticia') include 'views/noticias.php';
if($_GET['acao']=='assistencia') include 'views/assistencia.php';
if($_GET['acao']=='atividade') include 'views/atividade.php';
if($_GET['acao']=='comunicacao') include 'views/comunicacao.php';
if($_GET['acao']=='enquete') include 'views/enquete.php';
if($_GET['acao']=='esporte') include 'views/esporte.php';
if($_GET['acao']=='saude') include 'views/saude.php';
if($_GET['acao']=='cadastro') include 'views/cadastro.php';
include 'views/footer.php';
?>