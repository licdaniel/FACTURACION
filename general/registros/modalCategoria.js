let cerrar = document.querySelectorAll(".close")[0];
let abrir1 = document.querySelectorAll(".btn.verdes.categoria")[0];
let modal = document.querySelectorAll(".modal")[0];
let modalCerrar = document.querySelectorAll(".formulario")[0];

           //VENTANA MODAL   .datos table .estado.editar

//SECTOR
abrir1.addEventListener("click", function (e) {
    e.preventDefault();

    var id_categoria = $.trim($("#id_categoria").val());
    var categoria_nombre   = $.trim($("#categoria_nombre").val());       

    if(categoria_nombre == "" ){
       Swal.fire({
           type:'warning',
           title:'Debes llenar todos los capos',
       });
    }

     $(".titulo h2").css("color", "#cb4a3f");
     $(".titulo h2").text("Registrar Categoria"); 
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

    id_categoria       = parseInt(fila.find('td:eq(0)').text());
    categoria_nombre   = fila.find('td:eq(1)').text();
    
           $("#id_categoria").val(id_categoria);
       $("#categoria_nombre").val(categoria_nombre);
    //opcion = 2; 
    

    $(".titulo h2").css("color", "#28a745");
    $(".titulo h2").text("Editar Categoria");  
    $("#btnModificar").css("display","block"); 
    $("#btn-enviar").css("display","none"); 
        
    modalCerrar.style.opacity = "1";
    modalCerrar.style.visibility = "visible";
    modal.classList.toggle("modal-close");
    
});
