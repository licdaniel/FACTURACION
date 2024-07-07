let cerrar = document.querySelectorAll(".close")[0];
//let abrir = document.querySelectorAll(".btn.verdes.añadir")[0];
let abrir1 = document.querySelectorAll(".btn.verdes.sector")[0];
let modal = document.querySelectorAll(".modal")[0];
let modalCerrar = document.querySelectorAll(".formulario")[0];

           //VENTANA MODAL

//SECTOR
abrir1.addEventListener("click", function (e) {
    e.preventDefault();
    
    var id_municipio = $.trim($("#id").val());    
    var nombre =$.trim($("#nombre").val());    
    var direccion = $.trim($("#direccion").val());    
    var telefono =$.trim($("#telefono").val());  
    var director = $.trim($("#director").val()); 
    var estado = $.trim($("#estado").val());       

    if(id_municipio.length == "" || nombre == "" || direccion == "" || telefono == "" || director == "" || estado == ""){
       Swal.fire({
           type:'warning',
           title:'Debes llenar todos los capos',
       });
    }

     $(".titulo h2").css("color", "#cb4a3f");
     $(".titulo h2").text("Registrar Sector"); 
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
$(document).on("click", ".estado.editar.modificar", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    id_municipio = parseInt(fila.find('td:eq(1)').text());
    nombre    = fila.find('td:eq(2)').text();
    direccion = fila.find('td:eq(3)').text();
    telefono  = fila.find('td:eq(4)').text();
    director  = fila.find('td:eq(5)').text();
    estado    = fila.find('td:eq(6)').text();
    
           $("#id").val(id_municipio);
       $("#nombre").val(nombre);
    $("#direccion").val(direccion);
     $("#telefono").val(telefono);
     $("#director").val(director);
       $("#estado").val(estado);
    
    

    $(".titulo h2").css("color", "#28a745");
    $(".titulo h2").text("Editar Sector");  
    $("#btnModificar").css("display","block"); 
    $("#btn-enviar").css("display","none"); 
        
    modalCerrar.style.opacity = "1";
    modalCerrar.style.visibility = "visible";
    modal.classList.toggle("modal-close");
    
});

$(document).on("click", "#btnBorrar", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(1)').text());
    opcion = 3 
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "../conexion/modificarSector.php",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                //tablaPersonas.row(fila.parents('tr')).remove().draw();
            }
        });
    } 
});
/*
$(document).on("click", "#btnModificar", function(){
    //e.preventDefault();   
    id        = $.trim($("#id").val()); 
    nombre    = $.trim($("#nombre").val());
    direccion = $.trim($("#direccion").val());
    telefono  = $.trim($("#telefono").val());
    director  = $.trim($("#director").val());    
    estado    = $.trim($("#estado").val());

    $.ajax({
        url: "../conexion/modificarSector.php",
        type: "POST",
        dataType: "json",
        data: {id:id, nombre:nombre, direccion:direccion, telefono:telefono, director:director, estado:estado, opcion:opcion},
        success: function(data){  
            console.log(data);
            id        = data[0].id;            
            nombre    = data[0].nombre;
            direccion = data[0].direccion;
            telefono  = data[0].telefono;
            director  = data[0].director;
            estado    = data[0].estado;
            if(opcion == 1){$("#tablaPersonas").row.add([id,nombre,direccion,telefono,director,estado]).draw();}
                else{$("#tablaPersonas").row(fila).data([id,nombre,direccion,telefono,director,estado]).draw();}          
        }        
    });
    //$("#modalCRUD").modal("hide");    
    
}); */