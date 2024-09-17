<?php
$servername = "localhost";
$username = "root";
$password = "rafa8523";
$dbname = "db_crud";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexao bd: " . $conn->connect_error);
}
?>