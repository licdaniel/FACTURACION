let cerrar = document.querySelectorAll(".close")[0];
let abrir1 = document.querySelectorAll(".btn.verdes.promotor")[0];
let modal = document.querySelectorAll(".modal")[0];
let modalCerrar = document.querySelectorAll(".formulario")[0];

           //VENTANA MODAL

//SECTOR
abrir1.addEventListener("click", function (e) {
    e.preventDefault();

    var id_vendedor = $.trim($("#id_vendedor").val());
    var vendedor_nombre   = $.trim($("#vendedor_nombre").val());    
    var vendedor_apellido =$.trim($("#vendedor_apellido").val());   
    var vendedor_telefono =$.trim($("#vendedor_telefono").val());  
    var vendedor_celular =$.trim($("#vendedor_celular").val());  
    var vendedor_direccion= $.trim($("#vendedor_direccion").val()); 
    var vendedor_estado   = $.trim($("#vendedor_estado").val());       

    if( vendedor_nombre == "" || vendedor_apellido == "" ||   vendedor_direccion == "" || vendedor_estado == ""){
       Swal.fire({
           type:'warning',
           title:'Debes llenar todos los campos',
       });
    }

     $(".titulo h2").css("color", "#cb4a3f");
     $(".titulo h2").text("Registro"); 
    $("#btnModificar").css("display","none"); 
    $("#btn-enviar").css("display","block"); 
    //$("#id_vendedor").css("display","none");
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

    id_vendedor       = parseInt(fila.find('td:eq(0)').text());
    vendedor_nombre   = fila.find('td:eq(1)').text();
    vendedor_apellido = fila.find('td:eq(2)').text();
    vendedor_cedula   = fila.find('td:eq(3)').text();
    vendedor_telefono = fila.find('td:eq(4)').text();
    vendedor_celular = fila.find('td:eq(5)').text();
    vendedor_direccion= fila.find('td:eq(6)').text();
    vendedor_correo   = fila.find('td:eq(7)').text();
    vendedor_comision   = parseInt(fila.find('td:eq(8)').text());
    vendedor_estado    = fila.find('td:eq(9)').text();
    
    $("#id_vendedor").val(id_vendedor);
       $("#vendedor_nombre").val(vendedor_nombre);
    $("#vendedor_apellido").val(vendedor_apellido);
        $("#vendedor_cedula").val(vendedor_cedula);
    $("#vendedor_telefono").val(vendedor_telefono);
    $("#vendedor_celular").val(vendedor_celular);
    $("#vendedor_direccion").val(vendedor_direccion);
        $("#vendedor_correo").val(vendedor_correo);
        $("#vendedor_comision").val(vendedor_comision);
       $("#vendedor_estado").val(vendedor_estado);
    //opcion = 2; 
    

    $(".titulo h2").css("color", "#28a745");
    $(".titulo h2").text("Modificar Registro");  
    $("#btnModificar").css("display","block"); 
    $("#btn-enviar").css("display","none"); 
    //$("#id_vendedor").css("display","block"); 
        
    modalCerrar.style.opacity = "1";
    modalCerrar.style.visibility = "visible";
    modal.classList.toggle("modal-close");
    
});
