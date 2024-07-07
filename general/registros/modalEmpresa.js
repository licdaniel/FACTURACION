let cerrar = document.querySelectorAll(".close")[0];
let abrir1 = document.querySelectorAll(".btn.verdes.empresa")[0];
let modal = document.querySelectorAll(".modal")[0];
let modalCerrar = document.querySelectorAll(".formulario")[0];

           //VENTANA MODAL

//SECTOR
abrir1.addEventListener("click", function (e) {
    e.preventDefault();

    $(".titulo h2").css("color", "#cb4a3f");
    $(".titulo h2").text("Actualizar Los Datos De La Empresa"); 
    $("#btnModificar").css("display","none"); 
    $("#btn-enviar").css("display","block"); 
    $("#idcliente").css("display","none");
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

var fila; //capturar la fila para editar o borrar el registro
//-------------------------------------------------------------BOTNON EDITAR
//botón EDITAR    
$(document).on("click", ".estado.editar", function(){
    fila = $(this).closest("tr");

    empresa_nombre       = fila.find('td:eq(0)').text();
    empresa_nombrecia    = fila.find('td:eq(1)').text();
    empresa_direccion    = fila.find('td:eq(2)').text();
    empresa_rnc          = fila.find('td:eq(3)').text();
    empresa_telefono     = fila.find('td:eq(4)').text();
    empresa_ciudad       = fila.find('td:eq(5)').text();
    empresa_correo       = fila.find('td:eq(6)').text();
    empresa_itbis        = fila.find('td:eq(7)').text();
    empresa_ley          = parseInt(fila.find('td:eq(8)').text());
    
    $("#empresa_nombre").val(empresa_nombre);
       $("#nombrecia").val(empresa_nombrecia);
    $("#empresa_direccion").val(empresa_direccion);
        $("#empresa_rnc").val(empresa_rnc);
        $("#empresa_telefono").val(empresa_telefono);
        $("#empresa_ciudad").val(empresa_ciudad);
    $("#empresa_correo").val(empresa_correo);
    $("#empresa_impuesto").val(empresa_itbis);
    $("#empresa_ley").val(empresa_ley);
    //opcion = 2; 
    

    $(".titulo h2").css("color", "#28a745");
    $(".titulo h2").text("Actualizar Los Datos De La Empresa"); 
    $("#btnModificar").css("display","block"); 
    $("#btn-enviar").css("display","none"); 
    //$("#id_cliente").css("display","none"); 
        
    modalCerrar.style.opacity = "1";
    modalCerrar.style.visibility = "visible";
    modal.classList.toggle("modal-close");
    
});

