let cerrar = document.querySelectorAll(".close")[0];
let abrir1 = document.querySelectorAll(".btn.verdes.cliente")[0];
let modal = document.querySelectorAll(".modal")[0];
let modalCerrar = document.querySelectorAll(".formulario")[0];

           //VENTANA MODAL

//SECTOR
abrir1.addEventListener("click", function (e) {
    e.preventDefault();

    var id_cliente = $.trim($("#id_cliente").val());
    var cliente_nombre   = $.trim($("#cliente_nombre").val());    
    var cliente_apellido =$.trim($("#cliente_apellido").val());    
    var cliente_sexo     = $.trim($("#cliente_sexo").val());
    var cliente_edad     =$.trim($("#cliente_edad").val());     
    var cliente_telefono =$.trim($("#cliente_telefono").val());  
    var cliente_celular =$.trim($("#cliente_celular").val());  
    var cliente_direccion= $.trim($("#cliente_direccion").val()); 
    var cliente_estado   = $.trim($("#cliente_estado").val());       

    if( cliente_nombre == "" || cliente_apellido == "" || cliente_sexo =="" || cliente_edad =="" ||  cliente_direccion == "" || cliente_estado == ""){
       Swal.fire({
           type:'warning',
           title:'Debes llenar todos los capos',
       });
    }

     $(".titulo h2").css("color", "#cb4a3f");
     $(".titulo h2").text("Registrar Clientes"); 
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

    id_cliente       = parseInt(fila.find('td:eq(0)').text());
    cliente_nombre   = fila.find('td:eq(1)').text();
    cliente_apellido = fila.find('td:eq(2)').text();
    cliente_sexo     = fila.find('td:eq(3)').text();
    cliente_edad     = fila.find('td:eq(4)').text();
    cliente_cedula   = fila.find('td:eq(5)').text();
    cliente_telefono = fila.find('td:eq(6)').text();
    cliente_direccion= fila.find('td:eq(7)').text();
    cliente_correo   = fila.find('td:eq(8)').text();
    cliente_fechanacimiento   = fila.find('td:eq(9)').text();
    cliente_estado    = fila.find('td:eq(10)').text();
    
    $("#id_cliente").val(id_cliente);
       $("#cliente_nombre").val(cliente_nombre);
    $("#cliente_apellido").val(cliente_apellido);
        $("#cliente_sexo").val(cliente_sexo);
        $("#cliente_edad").val(cliente_edad);
        $("#cliente_cedula").val(cliente_cedula);
    $("#cliente_telefono").val(cliente_telefono);
    $("#cliente_direccion").val(cliente_direccion);
        $("#cliente_correo").val(cliente_correo);
        $("#cliente_fechanacimiento").val(cliente_fechanacimiento);
       $("#cliente_estado").val(cliente_estado);
    //opcion = 2; 
    

    $(".titulo h2").css("color", "#28a745");
    $(".titulo h2").text("Editar Cliente");  
    $("#btnModificar").css("display","block"); 
    $("#btn-enviar").css("display","none"); 
    //$("#id_cliente").css("display","none"); 
        
    modalCerrar.style.opacity = "1";
    modalCerrar.style.visibility = "visible";
    modal.classList.toggle("modal-close");
    
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