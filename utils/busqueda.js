function cambiarFiltro(){
    let selectFiltro = document.getElementById('selectFiltro');
    location.href = "./busqueda.php?tipoFiltro=" + selectFiltro.value;
}