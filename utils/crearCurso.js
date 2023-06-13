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