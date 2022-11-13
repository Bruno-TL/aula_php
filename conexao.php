<?php

$hostName = "localhost";
$bancoDeDados = "alunos";
$user = "root";
$senha = "1234";

$conn = new mysqli($hostName, $user, $senha, $bancoDeDados);

if ($conn -> connect_errno) {
    echo "Deu ruim pivete doido: (" . $mysqli -> connect_errno. ")" . $mysqli-> connect_errno;
} 