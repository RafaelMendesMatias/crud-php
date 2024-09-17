<?php
include_once('../_config/conexao_bd.php');

$id = $_GET['id'];
$sql = "DELETE FROM tb_users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    // Redirecionar para index.php na raiz do projeto
    header('Location: ../index.php');
} else {
    // Redirecionar para uma página de erro ou mensagem personalizada
    header('Location: ../index.php');
}
?>