<?php
    require_once('../../conexion/conexion.php');

    if ($conexion) {
        //echo "Conexion Exitosa";
    }
    else {
        echo "Error En La Conexion Con El Servidor. <br> />";
    }

    $id_cliente=$_GET['borrarCliente'];

    $borrar = $conexion->prepare("UPDATE t_cliente set cliente_estado='Inactivo' where id_cliente=$id_cliente");
    $borrar ->execute();

        if(!$borrar){
			echo"Error En la linea de sql";
		}
		else {
			//echo"<script>alert('Dato borrado')</script>";
            //echo"<script>window.open('../departamento.php')</script>";
			Header ("refresh:1; http://localhost/Pagina%20Dinamica/VENTAS/general/link.php?enlaces=cliente#");
		}

?>