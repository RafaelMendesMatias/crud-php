<?php

include_once( '../_config/conexao_bd.php' );

$nome = filter_var($_POST['nome'], FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$sql = "INSERT INTO tb_users (nome, email, data_criado) VALUES ('$nome', '$email', NOW())";
if ($conn->query($sql) === TRUE) {
    echo 1;
} else {
    echo 0;
}
?>