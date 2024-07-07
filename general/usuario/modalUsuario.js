let cerrar = document.querySelectorAll(".close")[0];
let abrir1 = document.querySelectorAll(".btn.verdes.usuario")[0];
let modal = document.querySelectorAll(".modal")[0];
let modalCerrar = document.querySelectorAll(".formulario")[0];

           //VENTANA MODAL   .datos table .estado.editar

//SECTOR
abrir1.addEventListener("click", function (e) {
    e.preventDefault();

    var id_usuario = $.trim($("#idusuario").val());
    var usuario_nombre   = $.trim($("#usuario_nombre").val());    
    var usuario_apellido =$.trim($("#usuario_apellido").val());    
    var usuario_direccion     = $.trim($("#usuario_direccion").val());
    var usuario_telefono     =$.trim($("#usuario_telefono").val());     
    var usuario              =$.trim($("#usuario").val());  
    var usuario_cargo        = $.trim($("#usuario_cargo").val()); 
    var usuario_estado       = $.trim($("#usuario_estado").val());       

    if(id_usuario.length == "" || usuario_nombre == "" || usuario_apellido == "" || usuario == "" || usuario_direccion == "" || usuario_estado == ""){
       Swal.fire({
           type:'warning',
           title:'Debes llenar todos los capos',
       });
    }

     $(".titulo h2").css("color", "#cb4a3f");
     $(".titulo h2").text("Registrar Usuario"); 
    $("#btnModificar").css("display","none"); 
    $("#btn-enviar").css("display","block"); 
    $("#idusuario").css("display","none");
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
$(document).on("click", ".estado.editar.modificar", function(){
    fila = $(this).closest("tr");

    id_usuario       = parseInt(fila.find('td:eq(0)').text());
    usuario_nombre   = fila.find('td:eq(1)').text();
    usuario_apellido = fila.find('td:eq(2)').text();
    usuario_direccion     = fila.find('td:eq(3)').text();
    usuario           = fila.find('td:eq(4)').text();
    usuario_cargo     = fila.find('td:eq(5)').text();
    usuario_estado    = fila.find('td:eq(6)').text();
    
           $("#codigo").val(id_usuario);
       $("#usuario_nombre").val(usuario_nombre);
     $("#usuario_apellido").val(usuario_apellido);
    $("#usuario_direccion").val(usuario_direccion);
              $("#usuario").val(usuario);
        $("#usuario_cargo").val(usuario_cargo);
       $("#usuario_estado").val(usuario_estado);
    //opcion = 2; 
    

    $(".titulo h2").css("color", "#28a745");
    $(".titulo h2").text("Editar Sector");  
    $("#btnModificar").css("display","block"); 
    $("#btn-enviar").css("display","none"); 
        
    modalCerrar.style.opacity = "1";
    modalCerrar.style.visibility = "visible";
    modal.classList.toggle("modal-close");
    
});

$("#usuario_almacen").change(function(){
    // a la variable x le asigno el value del select con id="seleccionarUsuario"
    var x = $('#usuario_almacen').val();
    // le asigno el valor de x al input con id="id_almacen"
    $('#id_almacen').val(x);
  });

