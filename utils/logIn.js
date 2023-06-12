function validarCampoVacio(value){
    if(value == "") {
        return "Completa este campo\n"
    }

    return '';
}

function validarLogIn(){
    let varUsername = document.getElementById('formUsuario');
    let varPassword = document.getElementById('formPassword');
    let varRemember = document.getElementById('checkRecordar');

    varUsername.setCustomValidity(validarCampoVacio(varUsername.value));
    varPassword.setCustomValidity(validarCampoVacio(varPassword.value));
}