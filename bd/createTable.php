<?php

// Criando tabela
$servername = "localhost";
$username = "root";
$password = "****";
$dbname = "alunos";

// Create connection
$conexao = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conexao->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$table = "CREATE TABLE if not exists aluno (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(30) NOT NULL,
cidade VARCHAR(30) NOT NULL,
matricula INT NOT NULL
)";

if ($conexao->query($table) === TRUE) {
  echo "Tabela criada com sucesso";
} else {
  echo "Erro ao criar a tabela: " . $conexao->error;
}

// Inserindo dados na tabela
$InserindoDados = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conexao->query($InserindoDados) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $InserindoDados . "<br>" . $conexao->error;
}

$conexao->close();
?>
