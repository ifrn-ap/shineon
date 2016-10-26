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
$dir = '../img/'; // Diretório que vai receber o arquivo.
$tmpName = $_FILES['arquivo']['tmp_name']; // Recebe o arquivo temporário.
$name = $_FILES['arquivo']['name']; // Recebe o nome do arquivo.	
move_uploaded_file($tmpName, $dir . $name);
$caminho = 'img/'.$_FILES['arquivo']['name'];

$sql = mysql_query("INSERT INTO cartaz(titulo, texto, anexo, data, hora, categoria, palavrasChave, Administrador_matricula) VALUES('$titulo','$descricao','$caminho','$data','$hora','$categoria','$palavrasChave','$administrador_matricula')");
if($sql){
	header("Location: ../index_admin.php?acao=inserirNoticia");
}else{
	mysql_erro($sql);
}
?>