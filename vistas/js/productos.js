


function seleccionar(){
    var buscarPor = $("#slProducto").val();
    $("#busquedaPor").val(buscarPor);
    window.location = "index.php?ruta=productos&item="+buscarPor;
}