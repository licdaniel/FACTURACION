let cerrar = document.querySelectorAll(".close")[0];
let abrir1 = document.querySelectorAll(".btn.verdes.almacen")[0];
let modal = document.querySelectorAll(".modal")[0];
let modalCerrar = document.querySelectorAll(".formulario")[0];

           //VENTANA MODAL

//SECTOR
abrir1.addEventListener("click", function (e) {
    e.preventDefault();

    var idproducto = $.trim($("#idproducto").val());
    var producto_descripcion         = $.trim($("#producto_descripcion").val());    
    var producto_costo         =$.trim($("#producto_costo").val());    
    var productos_minimo = $.trim($("#productos_minimo").val());
    var producto_precio1    =$.trim($("#producto_precio1").val());     
    var producto_cantidad =$.trim($("#producto_cantidad").val());  
    var id_impuesto   = $.trim($("#id_impuesto").val()); 
    var controlinventario     = $.trim($("#controlinventario").val());       
    var estado     = $.trim($("#estado").val());  

    if(producto_descripcion == "" || producto_costo == ""  || producto_precio1 =="" || producto_cantidad == "" || id_impuesto == "" || controlinventario == "" || estado == ""){
        Swal.fire({
            type:'warning',
            title:'Debes llenar todos los campos',
        });
    }

     $(".titulo h2").css("color", "#cb4a3f");
     $(".titulo h2").text("Registrar Productos"); 
    $("#btnModificar").css("display","none"); 
    $("#btn-enviar").css("display","block"); 
    $("#idalmacen").css("display","none"); 
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

    idproducto        = parseInt(fila.find('td:eq(0)').text());
    producto_descripcion    = fila.find('td:eq(1)').text();
    id_categorias    = parseInt(fila.find('td:eq(2)').text());
    producto_precio1     = parseInt(fila.find('td:eq(3)').text());
    producto_precio2       = parseInt(fila.find('td:eq(4)').text());
    producto_precio3         = parseInt(fila.find('td:eq(5)').text());
    producto_costo = fila.find('td:eq(6)').text();
    productos_minimo    = fila.find('td:eq(7)').text();
    producto_cantidad        = fila.find('td:eq(8)').text();
    producto_fechaentrada    = fila.find('td:eq(9)').text();
    producto_fechacreacion        = fila.find('td:eq(8)').text();
    id_impuesto    = fila.find('td:eq(10)').text();
    controlinventario        = fila.find('td:eq(11)').text();
    estado    = fila.find('td:eq(12)').text();
    
    $("#idproducto").val(idproducto);
    $("#producto_descripcion").val(producto_descripcion);
    $("#id_categorias").val(id_categorias );
    $("#producto_costo").val(producto_costo);
    $("#productos_minimo").val(productos_minimo);
        $("#producto_precio1").val(producto_precio1);
        $("#producto_precio2").val(producto_precio2);
        $("#producto_precio3").val(producto_precio3);
        $("#producto_cantidad").val(producto_cantidad);
        $("#producto_fechaentrada").val(producto_fechaentrada);
        $("#producto_fechacreacion").val(producto_fechacreacion);
        $("#id_impuesto").val(id_impuesto);
        $("#controlinventario").val(controlinventario);
        $("#estado").val(estado);
    //opcion = 2; 
    

    $(".titulo h2").css("color", "#28a745");
    $(".titulo h2").text("Editadon Producto");  
    $("#btnModificar").css("display","block"); 
    $("#btn-enviar").css("display","none"); 
    $("#idalmacen").css("display","none"); 
        
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