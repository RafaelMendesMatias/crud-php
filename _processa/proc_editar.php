<?php

include_once( '../_config/conexao_bd.php' );

$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
$nome = filter_var($_POST['nome'], FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$sql = "UPDATE tb_users SET nome='$nome', email='$email' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo 1;
} else {
    echo 0;
}
?>