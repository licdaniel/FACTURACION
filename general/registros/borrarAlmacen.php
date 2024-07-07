<?php
    //$conexion =new PDO("sqlsrv:server=DESKTOP-L7G7OCC\SQLEXPRESS;database=DBtelefono", "sa", "daniel06");
    require_once('../../conexion/conexion.php');

    if ($conexion) {
        //echo "Conexion Exitosa";
    }
    else {
        echo "Error En La Conexion Con El Servidor. <br> />";
    }

    $id_almacen=$_GET['borrarAlmacen'];

    $borrar = $conexion->prepare("UPDATE t_almacen set almacen_estado='Inactivo' where id_almacen=$id_almacen");
    $borrar ->execute();

        if(!$borrar){
			echo"Error En la linea de sql";
		}
		else {
			//echo"<script>alert('Dato borrado')</script>";
            //echo"<script>window.open('../departamento.php')</script>";
			Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/almacen.php");
		}

?>