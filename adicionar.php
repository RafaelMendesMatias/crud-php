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
                <form method="POST" action="_processa/proc_cadastrar.php">
                    <input name="id" type='hidden' value="<?php echo $id;?>">
                    <div class='linha-input'>
                        <label>Nome Completo:</label>
                        <input name="nome" type="text" name="" placeholder="Nome Completo">
                    </div>

                    <div class="linha-input">
                        <label>E-mail:</label>
                        <input name="email" type="text" placeholder="E-mail válido">
                    </div>

                    <button type="submit" class="btn_padrao" style="margin: 0">Adicionar Usuário</button>
                    <a href="index.php" class="btn_padrao" style="background: #5e5e5e;margin: 0 5px 0 0;">Voltar</a>
                </form>
            </div>
        </section>
    </body>
    <script src='_assets/js/funcoes.js'></script>
</html>
