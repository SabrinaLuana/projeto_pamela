<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca";  // Nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter os dados do formulário
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$datapubli = $_POST['datapublicacao'];
$datache = $_POST['datachegada'];
$genero = $_POST['genero'];
$sinopse = $_POST['sinopse'];

// Inserir dados no banco
$sql = "INSERT INTO livros (titulo, autor, data_publicacao, data_chegada, genero, sinopse)
VALUES ('$titulo', '$autor', '$datapubli', '$datache', '$genero', '$sinopse')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro salvo com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
