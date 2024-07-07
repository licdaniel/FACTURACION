let cerrar = document.querySelectorAll(".close")[0];
let abrir1 = document.querySelectorAll(".btn.verdes.empleado")[0];
let modal = document.querySelectorAll(".modal")[0];
let modalCerrar = document.querySelectorAll(".formulario")[0];

           //VENTANA MODAL

//SECTOR
abrir1.addEventListener("click", function (e) {
    e.preventDefault();

    var id_empleado = $.trim($("#idempleado").val());
    var id_departamento = $.trim($("#id").val());
    var empleado_nombre   = $.trim($("#nombre").val());    
    var empleado_apellido =$.trim($("#apellido").val());    
    var empleado_sexo     = $.trim($("#sexo").val());
    var empleado_edad     =$.trim($("#edad").val());     
    var empleado_telefono =$.trim($("#telefono").val());  
    var empleado_direccion= $.trim($("#direccion").val()); 
    var empleado_estado   = $.trim($("#estado").val());       

    if(id_departamento.length == "" || empleado_nombre == "" || empleado_apellido == "" || empleado_sexo =="" || empleado_edad =="" || telefono == "" || direccion == "" || estado == ""){
       Swal.fire({
           type:'warning',
           title:'Debes llenar todos los capos',
       });
    }

     $(".titulo h2").css("color", "#cb4a3f");
     $(".titulo h2").text("Registrar Empleado"); 
    $("#btnModificar").css("display","none"); 
    $("#btn-enviar").css("display","block"); 
    $("#idempleado").css("display","none"); 
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

    id_empleado       = parseInt(fila.find('td:eq(0)').text());
    id_departamento   = parseInt(fila.find('td:eq(1)').text());
    empleado_nombre   = fila.find('td:eq(2)').text();
    empleado_apellido = fila.find('td:eq(3)').text();
    empleado_sexo     = fila.find('td:eq(4)').text();
    empleado_edad     = fila.find('td:eq(5)').text();
    empleado_telefono = fila.find('td:eq(6)').text();
    empleado_direccion= fila.find('td:eq(7)').text();
    email             = fila.find('td:eq(8)').text();
    identidad         = fila.find('td:eq(9)').text();
    salario           = fila.find('td:eq(12)').text();
    estado    = fila.find('td:eq(13)').text();
    
    $("#idempleado").val(id_empleado);
           $("#id").val(id_departamento);
       $("#nombre").val(empleado_nombre);
    $("#apellido").val(empleado_apellido);
        $("#sexo").val(empleado_sexo);
        $("#edad").val(empleado_edad);
    $("#telefono").val(empleado_telefono);
    $("#direccion").val(empleado_direccion);
        $("#email").val(email);
    $("#identidad").val(identidad);
    $("#salario").val(salario);
       $("#estado").val(estado);
    //opcion = 2; 
    

    $(".titulo h2").css("color", "#28a745");
    $(".titulo h2").text("Editar Empleado");  
    $("#btnModificar").css("display","block"); 
    $("#btn-enviar").css("display","none"); 
    $("#idempleado").css("display","none"); 
        
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