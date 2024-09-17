//function excluir_usuario(id) {
//    if (confirm("Deseja mesmo excluir este usuário?")) {
//        window.location.href = '_processa/proc_excluir.php?id=' + id
//    }
//}


function excluir_usuario(id) {
    var retorno_ajax = document.getElementById('retorno_ajax');
    var linha_usuario = document.querySelector('[data-id="linha_user_' + id + '"]');

    if (confirm("Deseja mesmo excluir este usuário?")) {
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "_processa/proc_excluir.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("id=" + id);
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText == 1) {
                    retorno_ajax.innerHTML = '<div class="retorno_ajax_success">Usuario <b>ID ' + id + ' </b> deletado com sucesso</div>';
                    linha_usuario.remove();
                } else if (this.responseText < 0) {
                    retorno_ajax.innerHTML = '<div class="retorno_ajax_error">Erro ao deletar Usuario <b>ID ' + id + ' </b></div>';
                } else {
                    retorno_ajax.innerHTML = '<div class="retorno_ajax_error">Erro desconhecido</div>';
                }

                setTimeout(function () {
                    retorno_ajax.innerHTML = '';
                }, 2500);
            }
        }
    }
}
 

function cadastrar_usuario() {
    var retorno_ajax = document.getElementById('retorno_ajax');
    var nome = document.getElementById('nome_user');
    var email = document.getElementById('email_user');
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "_processa/proc_cadastrar.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("nome=" + nome.value + "&email=" + email.value);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == 1) {
                retorno_ajax.innerHTML = '<div class="retorno_ajax_success">Usuario cadastrado com sucesso</div>';
            } else if (this.responseText < 0) {
                retorno_ajax.innerHTML = '<div class="retorno_ajax_error">Erro ao cadastrar usuario</div>';
            } else {
                retorno_ajax.innerHTML = '<div class="retorno_ajax_error">Erro desconhecido</div>';
            }

            nome.value = '';
            email.value = '';

            setTimeout(function () {
                retorno_ajax.innerHTML = '';
            }, 2500);
        }
    }
}




function editar_usuario() {
    var retorno_ajax = document.getElementById('retorno_ajax');
    var id = document.getElementById('edit_id');
    var nome = document.getElementById('edit_nome');
    var email = document.getElementById('edit_email');
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "_processa/proc_editar.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id=" + id.value + "&nome=" + nome.value + "&email=" + email.value);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == 1) {
                retorno_ajax.innerHTML = '<div class="retorno_ajax_success">Usuario editado com sucesso</div>';
            } else if (this.responseText < 0) {
                retorno_ajax.innerHTML = '<div class="retorno_ajax_error">Erro ao editar usuario</div>';
            } else {
                retorno_ajax.innerHTML = '<div class="retorno_ajax_error">Erro desconhecido</div>';
            }

            setTimeout(function () {
                retorno_ajax.innerHTML = '';
            }, 2500);
        }
    }
}