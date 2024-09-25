<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Definir o modo de erro para exceções
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com o banco de dados realizada com sucesso";
} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

// Código para inserir, atualizar, deletar e selecionar dados do banco de dados
// ...
?>