<?php
include_once( '_config/conexao_bd.php' );
$result = $conn->query('SELECT * FROM tb_users ORDER BY id DESC');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = 'UTF-8'>
        <meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
        <title>Crud PHP</title>
        <link rel = 'stylesheet' href = '_assets/css/estilo.css'>
    </head>
    <body>
        <div style="width: 100%; display: flex; align-items: center; justify-content: flex-end; margin-bottom: 15px;">
            <div id="retorno_ajax"></div>
            <a href="adicionar.php" class="btn_padrao" style="margin: 0 0 0 25px;">Novo Usuario</a>
        </div>
        <div id="retorno_users_deleted">
            <?php
            if ($result->num_rows > 0) {
                echo '<div class="tabela-usuarios">
                <div class="tabela-cabecalho">
                    <div class="celula-tabela celula-tabela-id">ID</div>
                    <div class="celula-tabela celula-tabela-name">Nome</div>
                    <div class="celula-tabela celula-tabela-email">E-mail</div>
                    <div class="celula-tabela celula-tabela-date">Data Cadastro</div>
                    <div class="celula-tabela celula-tabela-actions">Ações</div>
                </div>';

                while ($retorno = $result->fetch_assoc()) {
                    $id = $retorno['id'];
                    $nome_completo = $retorno['nome'];
                    $primeiro_nome = explode(' ', $nome_completo)[0];
                    $email = $retorno['email'];
                    $data_criado = date('d/m/Y', strtotime($retorno['data_criado']));

                    echo '<div class="linha-tabela" data-id="linha_user_' . $id . '">
                <div class="celula-tabela celula-tabela-id">' . $id . '</div>
                <div class="celula-tabela celula-tabela-name">' . $nome_completo . '</div>
                <div class="celula-tabela celula-tabela-email">' . $email . '</div>
                <div class="celula-tabela celula-tabela-date">' . $data_criado . '</div>
                <div class="celula-tabela celula-tabela-actions">
                <a href="editar.php?k=' . $id . '" class="btn btn-editar">Editar</a>
                <button class="btn btn-deletar" onclick="excluir_usuario(' . $id . ');">Excluir</button>
                </div>
            </div>';
                }
            } else {
                echo "<h1 style='text-align: center; color: #472c8a'>Nenhum usuario cadastrado.</h1>";
            }
            ?>
        </div>
    </body>
    <script src = "_assets/js/funcoes.js"></script>
</html>