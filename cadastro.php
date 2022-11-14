<?php
include 'conexao.php';
if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $matricula = $_POST['matricula'];
    $query = mysqli_query($conn, "INSERT INTO aluno(nome,cidade,matricula)VALUES('$nome','$cidade','$matricula')");

    if ($query) {
        echo "<h3>Cadastro efetuado com sucesso</h3>";
    } else {
        echo "não cadastrado";
    }
}

?>

<form action="cadastro.php" method="POST">
    <label>Nome:</label>
    <input type="text" name="nome">

    <label>Cidade:</label>
    <input type="text" name="cidade">

    <label>Matricula:</label>
    <input type="text" name="matricula">

    <button name="cadastrar">Cadastrar</button>

</form>