let cerrar = document.querySelectorAll(".close")[0];
let abrir1 = document.querySelectorAll(".btn.verdes.suplidor")[0];
let modal = document.querySelectorAll(".modal")[0];
let modalCerrar = document.querySelectorAll(".formulario")[0];

           //VENTANA MODAL

//SECTOR
abrir1.addEventListener("click", function (e) {
    e.preventDefault();

    var id_suplidor = $.trim($("#id_suplidor").val());
    var suplidor_nombre   = $.trim($("#suplidor_nombre").val());    
    var suplidor_apellido =$.trim($("#suplidor_apellido").val());    
    var suplidor_sexo     = $.trim($("#suplidor_sexo").val());
    var suplidor_edad     =$.trim($("#suplidor_edad").val());     
    var suplidor_telefono =$.trim($("#suplidor_telefono").val());  
    var suplidor_celular =$.trim($("#suplidor_celular").val());  
    var suplidor_direccion= $.trim($("#suplidor_direccion").val()); 
    var suplidor_estado   = $.trim($("#suplidor_estado").val());       

    if( suplidor_nombre == "" || suplidor_apellido == "" || suplidor_sexo =="" || suplidor_edad =="" ||  suplidor_direccion == "" || suplidor_estado == ""){
       Swal.fire({
           type:'warning',
           title:'Debes llenar todos los capos',
       });
    }

     $(".titulo h2").css("color", "#cb4a3f");
     $(".titulo h2").text("Registrar suplidor"); 
    $("#btnModificar").css("display","none"); 
    $("#btn-enviar").css("display","block"); 
    $("#idsuplidor").css("display","none");
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

    id_suplidor       = parseInt(fila.find('td:eq(0)').text());
    suplidor_nombre   = fila.find('td:eq(1)').text();
    suplidor_apellido = fila.find('td:eq(2)').text();
    suplidor_sexo     = fila.find('td:eq(3)').text();
    suplidor_edad     = fila.find('td:eq(4)').text();
    suplidor_cedula   = fila.find('td:eq(5)').text();
    suplidor_telefono = fila.find('td:eq(6)').text();
    suplidor_direccion= fila.find('td:eq(7)').text();
    suplidor_correo   = fila.find('td:eq(8)').text();
    suplidor_fechanacimiento   = fila.find('td:eq(9)').text();
    suplidor_estado    = fila.find('td:eq(10)').text();
    
    $("#id_suplidor").val(id_suplidor);
       $("#suplidor_nombre").val(suplidor_nombre);
    $("#suplidor_apellido").val(suplidor_apellido);
        $("#suplidor_sexo").val(suplidor_sexo);
        $("#suplidor_edad").val(suplidor_edad);
        $("#suplidor_cedula").val(suplidor_cedula);
    $("#suplidor_telefono").val(suplidor_telefono);
    $("#suplidor_direccion").val(suplidor_direccion);
        $("#suplidor_correo").val(suplidor_correo);
        $("#suplidor_fechanacimiento").val(suplidor_fechanacimiento);
       $("#suplidor_estado").val(suplidor_estado);
    //opcion = 2; 
    

    $(".titulo h2").css("color", "#28a745");
    $(".titulo h2").text("Editar Suplidor");  
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