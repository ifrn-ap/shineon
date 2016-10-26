<?php
session_start(); 
include '../conexao.php';
$nome=$_POST['nome'];
$preferencia=$_POST['preferencia'];
$email=$_POST['email'];
//$pc=$_POST[''];


$sql = mysql_query("INSERT INTO usuario(nome, preferencia, email) VALUES('$nome','$preferencia','$email')");
if($sql){

	header("Location: ../index.php?acao=cadastro");
}else{
	mysql_erro($sql);
}
?>