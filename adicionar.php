<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Crud PHP</title>
        <link rel = "stylesheet" href = "_assets/css/estilo.css">
    </head>
    <body>
        <section class = "content-form">
            <div class="card-form">
                <div id="retorno_ajax"></div>
                <div class="linha-input">
                    <label>Nome Completo:</label> 
                    <input id="nome_user" name="nome" type="text" name="" placeholder="Nome Completo">
                </div>

                <div class="linha-input"> 
                    <label>E-mail:</label>
                    <input id="email_user" name="email" type="text" placeholder="E-mail válido">
                </div>

                <button onclick="cadastrar_usuario()" class="btn_padrao" style="margin: 0">Adicionar Usuário</button>
                <a href="index.php" class="btn_padrao" style="background: #5e5e5e; margin: 0 5px 0 0;">Voltar</a>
            </div>
        </section>
    </body> 
    <script src="_assets/js/funcoes.js"></script>
</html>
