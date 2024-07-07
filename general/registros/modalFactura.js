let cerrar = document.querySelectorAll(".close")[0];
let abrir1 = document.querySelectorAll(".btn-busqueda")[0];
let modal = document.querySelectorAll(".modal-tabla")[0];
let modalCerrar = document.querySelectorAll(".formulario")[0];
var fila; //capturar la fila para editar o borrar el registro



$(document).on("click", "#calcular", function (e) {
    e.preventDefault(0);
        //tasa de impuesto
    var tasa = 12;
    var cantidad = $("input[name=cantidad]").val();
    
    //monto a calcular el impuesto
    var monto = $("input[name=totalbruto]").val();
    
    //calculo del impuesto
    var iva = (monto * cantidad) * 0.03;
    var cant_totalneto = (monto * cantidad);
    
    //se carga el iva en el campo correspondien te
    $("input[name=itbis]").val(iva);
    
    //se carga el total en el campo correspondiente
    $("input[name=totalneto]").val(parseInt(cant_totalneto)+parseInt(iva));

});

           //VENTANA MODAL

//SECTOR
abrir1.addEventListener("click", function (e) {
    e.preventDefault(); 
    $("#formulario").trigger("reset");

    modalCerrar.style.opacity = "1";
    modalCerrar.style.visibility = "visible";
    modal.classList.toggle("modal-close");
});


cerrar.addEventListener("click", function (e) {  //---------------------------------------BOTON PARA CERRAR EL MODAL
    modal.classList.toggle("modal-close");

    setTimeout(function () {
        modalCerrar.style.opacity = "0";
        modalCerrar.style.visibility = "hidden";
    },700)
})

window.addEventListener("click", function (e) {   //--------------------------------------PARA CUANDO SE LE DE CLICK FUERA DEL FORMULARIO SE CLOSE
    if (e.target==modalCerrar) {
        modal.classList.toggle("modal-close");

    setTimeout(function () {
        modalCerrar.style.opacity = "0";
        modalCerrar.style.visibility = "hidden";
    },700)
    }
});

//-------------------------------------------------------------BOTNON EDITAR    
$(document).on("click", ".estado.editar", function(){
    fila = $(this).closest("tr");

    id_producto        = parseInt(fila.find('td:eq(0)').text());
    producto_nombre    = fila.find('td:eq(2)').text();
    producto_monto     = fila.find('td:eq(5)').text();
    producto_fecha     = fila.find('td:eq(6)').text();
    producto_estado    = fila.find('td:eq(8)').text();
    
    $("#codigo").val(id_producto);
    $("#producto").val(producto_nombre);
    $("#totalbruto").val(producto_monto);
    $("#fecha").val(producto_fecha);
       $("#estado").val(producto_estado);
    
    modal.classList.toggle("modal-close");

    setTimeout(function () {
        modalCerrar.style.opacity = "0";
        modalCerrar.style.visibility = "hidden";
    },700)
    
});

$(document).on("click", "#btnBorrar", function(){    
    fila = $(this);
    id_municipio = parseInt($(this).closest("tr").find('td:eq(1)').text());
    opcion = 3 
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id_municipio+"?");
    if (respuesta) {
        Swal.fire({
            type:'warning',
            title:'Registro borrado.!',
        });
    }
});