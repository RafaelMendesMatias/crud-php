function excluir_usuario(id) {
    if (confirm("Deseja mesmo excluir este usuário?")) {
        window.location.href = '_processa/proc_excluir.php?id=' + id
    }
}