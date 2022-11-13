<?php
$servername = "localhost";
$username = "root";
$password = "****";
$dbname = "alunos";

// Criando coneção
$conexao = new mysqli($servername, $username, $password);
// Criando database
$dataBase = "CREATE DATABASE alunos";

$conexao->close();
?>