<?php
include_once( '_config/conexao_bd.php' );
$id = filter_var($_GET['k'], FILTER_SANITIZE_NUMBER_INT);

if (isset($id) && !empty($id)) {
    $result = $conn->query('SELECT * FROM tb_users WHERE id=' . $id);
    if ($result->num_rows > 0) {
        $retorno = $result->fetch_assoc();
        $nome = $retorno['nome'];
        $email = $retorno['email'];
    } else {
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
}
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
        <section class = 'content-form'>
            <div class='card-form'>
                <div id="retorno_ajax"></div>
                <input id="edit_id" name="id" type='hidden' value="<?php echo $id; ?>">
                <div class='linha-input'>
                    <label>Nome Completo:</label>
                    <input id="edit_nome" name="nome" type='text' name="" placeholder='Nome Completo' value="<?php echo $nome; ?>">
                </div>

                <div class='linha-input'>
                    <label>E-mail:</label>
                    <input id="edit_email" name="email" type='text' placeholder='E-mail válido' value="<?php echo $email; ?>">
                </div>

                <button onclick="editar_usuario()" class="btn_padrao" style="margin: 0">Salvar Edição</button>
                <a href="index.php" class="btn_padrao" style="background: #5e5e5e;margin: 0 5px 0 0;">Voltar</a>
            </div>
        </section>
    </body>
    <script src='_assets/js/funcoes.js'></script>
</html>
