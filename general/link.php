<?php 
    if ($_GET['enlaces']=="inicio") {
        include('index.php');
    }
    elseif ($_GET['enlaces']=="empresa") {
        include('empresa.php');
    }
    elseif ($_GET['enlaces']=="pais") {
        include('pais.php');
    }
    elseif ($_GET['enlaces']=="promotor") {
        include('promotor.php');
    }
    //--------------------------------------------------USUARIOS
    elseif ($_GET['enlaces']=="usuario") {
        include('usuario.php');
    }
    elseif ($_GET['enlaces']=="cliente") {
        include('clientes.php');
    }
    elseif ($_GET['enlaces']=="tipoCliente") {
        include('tipoCliente.php');
    }
    elseif ($_GET['enlaces']=="suplidor") {
        include('suplidor.php');
    }
    elseif ($_GET['enlaces']=="empleados") {
        include('empleados.php');
    }
    //--------------------------------------------------PRODUCTOS
    elseif ($_GET['enlaces']=="productos") {
        include('productos.php');
    }
    elseif ($_GET['enlaces']=="almacen") {
        include('almacen.php');
    }
    elseif ($_GET['enlaces']=="categoria") {
        include('categoria.php');
    }
    elseif ($_GET['enlaces']=="marca") {
        include('marca.php');
    }
    elseif ($_GET['enlaces']=="factura") {
        include('factura.php');
    }
?>