<?php 
// session_start inicia a sessão 
session_start(); 
// as variáveis login e senha recebem os dados digitados na página anterior
$matricula = $_POST['email'];
//$senha = $_POST['senha']; 
// conexão com o banco do dedos
include 'conexao.php';
// A variável $result pega as variáveis $email e $senha, faz uma pesquisa na tabela de usuarios
$result = mysql_query("SELECT * FROM administrador WHERE matricula = ".$matricula." ");
if(mysql_num_rows ($result) > 0 ){
$row = mysql_fetch_array($result);
$_SESSION['nome'] = $row['nome']; 
$_SESSION['email'] = $row['email']; 
//$_SESSION['senha'] = $row['senha'];
$_SESSION['matricula'] = $row['matricula'];
$_SESSION['start'] = "logado";
header('location: painel.php'); 
}else{
header('location: index.php'); 
} 
?>



