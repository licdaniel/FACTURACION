let cerrar = document.querySelectorAll(".close")[0];
let abrir1 = document.querySelectorAll(".btn.verdes.clientes")[0];
let modal = document.querySelectorAll(".modal")[0];
let modalCerrar = document.querySelectorAll(".formulario")[0];

           //VENTANA MODAL

//SECTOR
abrir1.addEventListener("click", function (e) {
    e.preventDefault();

    var id_vendedor = $.trim($("#id_vendedor").val());
    var vendedor_nombre   = $.trim($("#vendedor_nombre").val());    
    var vendedor_apellido =$.trim($("#vendedor_apellido").val());    
    var vendedor_sexo     = $.trim($("#vendedor_sexo").val());
    var vendedor_edad     =$.trim($("#vendedor_edad").val());     
    var vendedor_telefono =$.trim($("#vendedor_telefono").val());  
    var vendedor_celular =$.trim($("#vendedor_celular").val());  
    var vendedor_direccion= $.trim($("#vendedor_direccion").val()); 
    var vendedor_estado   = $.trim($("#vendedor_estado").val());       

    if( vendedor_nombre == "" || vendedor_apellido == "" || vendedor_sexo =="" || vendedor_edad =="" ||  vendedor_direccion == "" || vendedor_estado == ""){
       Swal.fire({
           type:'warning',
           title:'Debes llenar todos los capos',
       });
    }

     $(".titulo h2").css("color", "#cb4a3f");
     $(".titulo h2").text("Registro"); 
    $("#btnModificar").css("display","none"); 
    $("#btn-enviar").css("display","block"); 
    $("#id_vendedor").css("display","none");
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

    id_cliente       = parseInt(fila.find('td:eq(0)').text());
    cliente_nombre   = fila.find('td:eq(1)').text();
    cliente_apellido = fila.find('td:eq(2)').text();
    cliente_sexo     = fila.find('td:eq(3)').text();
    cliente_edad     = parseInt(fila.find('td:eq(4)').text());
    cliente_cedula   = fila.find('td:eq(5)').text();
    cliente_telefono = fila.find('td:eq(6)').text();
    cliente_celular = fila.find('td:eq(7)').text();
    cliente_direccion= fila.find('td:eq(8)').text();
    cliente_correo   = fila.find('td:eq(9)').text();
    cliente_fechanacimiento   = fila.find('td:eq(10)').text();
    cliente_estado    = fila.find('td:eq(11)').text();
    
    $("#id_cliente").val(id_cliente);
       $("#cliente_nombre").val(cliente_nombre);
    $("#cliente_apellido").val(cliente_apellido);
        $("#cliente_sexo").val(cliente_sexo);
        $("#cliente_edad").val(cliente_edad);
        $("#cliente_cedula").val(cliente_cedula);
    $("#cliente_telefono").val(cliente_telefono);
    $("#cliente_celular").val(cliente_celular);
    $("#cliente_direccion").val(cliente_direccion);
        $("#cliente_correo").val(cliente_correo);
        $("#cliente_fechanacimiento").val(cliente_fechanacimiento);
       $("#cliente_estado").val(cliente_estado);
    //opcion = 2; 
    

    $(".titulo h2").css("color", "#28a745");
    $(".titulo h2").text("Modificar Registro");  
    $("#btnModificar").css("display","block"); 
    $("#btn-enviar").css("display","none"); 
    //$("#id_cliente").css("display","none"); 
        
    modalCerrar.style.opacity = "1";
    modalCerrar.style.visibility = "visible";
    modal.classList.toggle("modal-close");
    
});
