<?php 
session_start();
include 'views/header_admin.php';
include 'conexao.php';
if($_GET['acao']=='inserirNoticia') include 'views/inserirNoticia.php';
if($_GET['acao']=='atualizarNoticia') include 'views/atualizarNoticia.php';
if($_GET['acao']=='listarNoticia') include 'views/listarNoticia.php';
if($_GET['acao']=='deleteNoticia') include 'views/deleteNoticia.php';
if($_GET['acao']=='inserirEnquete') include 'views/inserirEnquete.php';
if($_GET['acao']=='listarEnquete') include 'views/listarEnquete.php';
include 'views/footer.php';
?>