<?php
include_once( '../_config/conexao_bd.php' );

$nome = filter_var( $_POST[ 'nome' ], FILTER_SANITIZE_SPECIAL_CHARS );
$email = filter_var( $_POST[ 'email' ], FILTER_SANITIZE_EMAIL );

$sql = "INSERT INTO tb_users (nome, email, data_criado) VALUES ('$nome', '$email', NOW())";
if ($conn->query($sql) === TRUE) {
    // Aqui deve tratar msg personalizada de sucesso e redirecionar
    header( 'Location: ../index.php' );
} else {
    // Aqui deve Tratar msg personalizada de erro e redirecionar
    header( 'Location: ../index.php' );
}
?>