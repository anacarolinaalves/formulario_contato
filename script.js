
function validarFormulario() {
    var nome = document.getElementById('nome').value.trim();
    var email = document.getElementById('email').value.trim();
    var mensagem = document.getElementById('mensagem').value.trim();
    var isValid = true;

    // Limpa mensagens de erro
    document.getElementById('errorNome').innerHTML = "";
    document.getElementById('errorEmail').innerHTML = "";
    document.getElementById('errorMensagem').innerHTML = "";

    // Validação do campo Nome
    if (nome === "") {
        document.getElementById('errorNome').innerHTML = "Por favor, preencha o campo Nome.";
        isValid = false;
    }

    // Validação do campo E-mail
    if (email === "") {
        document.getElementById('errorEmail').innerHTML = "Por favor, preencha o campo E-mail.";
        isValid = false;
    }

    // Validação do campo Mensagem
    if (mensagem === "") {
        document.getElementById('errorMensagem').innerHTML = "Por favor, preencha o campo Mensagem.";
        isValid = false;
    }

    return isValid;
}
