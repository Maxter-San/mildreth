function validarPDF(value){
    let validation = '';

    for (let index = 0; index < value.length; index++) {

        let itemValue = value.item(index).name;
        
        idxDot = itemValue.lastIndexOf(".") + 1,
        extFile = itemValue.substr(idxDot, itemValue.length).toLowerCase();

        if (extFile=="pdf"){
            //validation = validation + " " + value.item(index).name;
        }else{
            return "Solo se permiten archivos PDF";
        }
 
    }

    return validation;
}

function validarImagen(value){
    let validation = '';

    for (let index = 0; index < value.length; index++) {

        let itemValue = value.item(index).name;
        
        idxDot = itemValue.lastIndexOf(".") + 1,
        extFile = itemValue.substr(idxDot, itemValue.length).toLowerCase();

        if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){
            //validation = validation + " " + value.item(index).name;
        }else{
            return "Solo se permiten archivos jpg/jpeg y png";
        }
 
    }

    return validation;
}

function validarVideo(value){
    let validation = '';

    for (let index = 0; index < value.length; index++) {

        let itemValue = value.item(index).name;
        
        idxDot = itemValue.lastIndexOf(".") + 1,
        extFile = itemValue.substr(idxDot, itemValue.length).toLowerCase();

        if (extFile=="mp4"){
            //validation = validation + " " + value.item(index).name;
        }else{
            return "Solo se permiten archivos mp4";
        }
 
    }

    return validation;
}

function validarCrearNivel(){
    let formPDF = document.getElementById('formPDF');
    //var formLink = document.getElementById('formLink').value.split('\n');
    let formImagen = document.getElementById('formImagen');
    let formVideo = document.getElementById('formVideo');

    formPDF.setCustomValidity(validarPDF(formPDF.files));
    formImagen.setCustomValidity(validarImagen(formImagen.files));
    formVideo.setCustomValidity(validarVideo(formVideo.files));
}