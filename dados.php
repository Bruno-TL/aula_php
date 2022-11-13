<?php

include 'conexao.php';

$sql = "SELECT nome, cidade, matricula FROM alunos.aluno ";
$resultado = $conn->query($sql);

include 'tabela.php';