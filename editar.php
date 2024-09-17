<?php
include_once( '_config/conexao_bd.php' );
$id = filter_var( $_GET[ 'k' ], FILTER_SANITIZE_NUMBER_INT );
$result = $conn->query( 'SELECT * FROM tb_users WHERE id='.$id );

if(isset($_GET['msg'])){
    $get_msg = filter_var($_GET[ 'msg' ], FILTER_SANITIZE_SPECIAL_CHARS);
}


if ( $result->num_rows > 0 ) {
    $retorno = $result->fetch_assoc();
    $nome = $retorno[ 'nome' ];
    $email = $retorno[ 'email' ];
}else{
    header("Location: index.php");
}

if(isset($get_msg) && (!empty($get_msg))){ 
    $msg = '<div class="msg_retorno_edicao">'.$get_msg.'</div>';
}else{
    $msg = '';
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

                <?php echo $msg;?>

                <form method="POST" action="_processa/proc_editar.php">
                    <input name="id" type='hidden' value="<?php echo $id;?>">
                    <div class='linha-input'>
                        <label>Nome Completo:</label>
                        <input name="nome" type='text' name="" placeholder='Nome Completo' value="<?php echo $nome;?>">
                    </div>

                    <div class='linha-input'>
                        <label>E-mail:</label>
                        <input name="email" type='text' placeholder='E-mail válido' value="<?php echo $email;?>">
                    </div>

                    <button type="submit" class="btn_padrao" style="margin: 0">Salvar Edição</button>
                    <a href="index.php" class="btn_padrao" style="background: #5e5e5e;margin: 0 5px 0 0;">Voltar</a>
                </form>
            </div>
        </section>
    </body>
    <script src='_assets/js/funcoes.js'></script>
</html>
