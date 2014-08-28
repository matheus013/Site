<?php
ob_start();
// Iniciando sessão
session_start();
include 'testeFormularios.php';

//Setando valores das variáves email e senha
$login = testInput($_POST['login']);
$senha = testInput($_POST['senha']);

// Estabelecendo conexão com banco de dados
    include 'connectDB.php';
    
// $query armazena o resultado da consulta feita ao banco de dados
$query = mysql_query("SELECT * FROM usuario WHERE email = '$login' AND senha = '$senha'");

// Verifica se login e usuário são válidos, se sim, redireciona para a página home
if(mysql_num_rows($query) > 0){
    while($user = mysql_fetch_array($query)){
        $_SESSION['login'] = $user['email'];
        $_SESSION['senha'] = $user['senha'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['level'] = $user['level'];
    }
    header('location:home.php');
}

else{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    echo "Erro: Email ou senha incorretos.";
    header('location:index.php');
}

mysql_close();
?>
