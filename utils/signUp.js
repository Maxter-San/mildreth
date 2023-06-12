function validarNombres(value){
    if (/[^a-zA-ZÀ-ÿ\u00f1\u00d1\s\d<\0]/g.test(value)) {
        return "El texto no puede tener caracteres especiales\n";
    }

    if (/\d/g.test(value)) {
        return "El texto no puede tener números\n";
    }

    return '' ;
}

function validarEdad(value){
    var ToDate = new Date();

    if (new Date(value).getTime() >= ToDate.getTime()){
        return "Selecciona una fecha correcta";
    }

    return '';
}

function validarPassword(value){  
    if(!/(?=(?:.*[A-Z]){1})/g.test(value)){
        return "Debe contener al menos una letra mayúscula\n"
    }
    if(!/(?=(?:.*[a-z]){1})/g.test(value)){
        return "Debe contener al menos una letra minúscula\n"
    }
    if(!/(?=(?:.*[0-9]){1})/g.test(value)){
        return "Debe contener al menos un número";
    }
    if(!/(?=(?:.*[.,\/#!$%\^&\*;:{}=\-_`~()”“…]){1})/g.test(value)){
        return "Debe contener al menos un signo de puntuación";
    }
    if(/(\s)/g.test(value)){
        return "El texto no puede tener espacios";
    }
  
    return '';
}

function validarSignUp(){
    let formNombre = document.getElementById('formNombre');
    let formApellido = document.getElementById('formApellido');
    let formFechaNacimiento = document.getElementById('formFechaNacimiento');
    let formPassword = document.getElementById('formPassword');

    formNombre.setCustomValidity(validarNombres(formNombre.value));
    formApellido.setCustomValidity(validarNombres(formApellido.value));
    formFechaNacimiento.setCustomValidity(validarEdad(formFechaNacimiento.value));
    formPassword.setCustomValidity(validarPassword(formPassword.value));
}