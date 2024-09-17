<?php

include_once('../_config/conexao_bd.php');

$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
$sql = "DELETE FROM tb_users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo 1;
} else {
    echo 0;
}
?>