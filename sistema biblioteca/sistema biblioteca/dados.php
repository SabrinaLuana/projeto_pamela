<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["erro" => "Conexão falhou: " . $conn->connect_error]));
}

$idade = isset($_GET['idade']) ? (int)$_GET['idade'] : '';

$sql = "SELECT titulo, autor, data_publicacao, data_chegada, genero, sinopse FROM livros";
if (!empty($idade)) {
    $sql .= " WHERE idade = " . $idade;
}

$result = $conn->query($sql);

$livros = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $livros[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($livros, JSON_UNESCAPED_UNICODE);
$conn->close();
?>
