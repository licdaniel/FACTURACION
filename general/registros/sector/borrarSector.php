<?php
    $conexion =new PDO("sqlsrv:server=DESKTOP-L7G7OCC\SQLEXPRESS;database=DBtelefono", "sa", "daniel06");
    
    if ($conexion) {
        //echo "Conexion Exitosa";
    }
    else {
        echo "Error En La Conexion Con El Servidor. <br> />";
    }

    $Borrar_id=$_GET['borrarSector'];

    $borrar = $conexion->prepare("UPDATE sector set sector_estado='Inactivo' where id_sector=$Borrar_id");
    $borrar ->execute();

        if(!$borrar){
			echo"Error En la linea de sql";
		}
		else {
			//echo"<script>alert('Dato borrado')</script>";
            //echo"<script>window.open('../departamento.php')</script>";
			Header("Location: ../sector.php");
		}

?>