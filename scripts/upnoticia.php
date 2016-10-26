<?php
session_start(); 
include '../conexao.php';
$titulo=$_POST['titulo'];
$categoria=$_POST['categoria'];
//$pc=$_POST[''];
$palavrasChave=$_POST['palavrasChave'];
$descricao=$_POST['descricao'];
$administrador_matricula=$_SESSION['matricula'];
$data=$_POST['data'];
$hora=$_POST['hora'];
$id = $_POST['id'];

mysql_query("UPDATE cartaz SET titulo='$titulo', texto='$descricao', data='$data', hora='$hora', categoria='$categoria', palavrasChave='$palavrasChave', Administrador_matricula='$administrador_matricula' WHERE idCartaz=".$id."");

	header("Location: ../index_admin.php?acao=listarNoticia");
?>