let cerrar = document.querySelectorAll(".close")[0];
let abrir1 = document.querySelectorAll(".btn.verdes.tipoCliente")[0];
let modal = document.querySelectorAll(".modal")[0];
let modalCerrar = document.querySelectorAll(".formulario")[0];

           //VENTANA MODAL   .datos table .estado.editar

//SECTOR
abrir1.addEventListener("click", function (e) {
    e.preventDefault();

     $(".titulo h2").css("color", "#cb4a3f");
     $(".titulo h2").text("Registrar"); 
    $("#btnModificar").css("display","none"); 
    $("#btn-enviar").css("display","block"); 
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

    id_tipoCliente       = parseInt(fila.find('td:eq(0)').text());
    tipoCliente_nombre   = fila.find('td:eq(1)').text();
    
    $("#tipoCliente_codigo").val(id_tipoCliente);
    $("#tipoCliente_nombre").val(tipoCliente_nombre);
    
    //opcion = 2; 
    

    $(".titulo h2").css("color", "#28a745");
    $(".titulo h2").text("Editar REgistro");  
    $("#btnModificar").css("display","block"); 
    $("#btn-enviar").css("display","none"); 
    //$("#id_cliente").css("display","none"); 
        
    modalCerrar.style.opacity = "1";
    modalCerrar.style.visibility = "visible";
    modal.classList.toggle("modal-close");
    
});
