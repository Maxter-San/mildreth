function onChangeCobrar(){
    let selectCobro = document.getElementById('selectCobro');
    let formPrecio = document.getElementById('formPrecio');

    if(selectCobro.value == 1){
        formPrecio.disabled = false;     
    }else{
        formPrecio.disabled = true;
        formPrecio.value = null;
    }
}

function countCheckCategories(){
    let varFormControlCategory= document.getElementById('numCheckCategory');
    let varFormCheckCategory= document.getElementsByClassName('checkCategories');

    var group = varFormCheckCategory;
    var counter = 0;
    for (var i=0; i<group.length; i++) {
        if (group[i].checked) {
            counter++;
        }
    }
    varFormControlCategory.value = counter;
}

function mayorACero(value){
    if(value == "" || value == 0) {
        return "Selecciona al menos una categoría (en caso de no haber favor de crear una)\n"
    }

    return '';
}

function validarCurso(){
    let numCheckCategory= document.getElementById('numCheckCategory');
    let selectCobro = document.getElementById('selectCobro');
    selectCobro.setCustomValidity(mayorACero(numCheckCategory.value));
}