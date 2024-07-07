<?php 

try {
    require_once ("valide.php");

    $model = new Model();
    $model->user=$_POST['nombre'];
    $model->password=$_POST['contraseña'];
    //$model->pass=$_POST['contraseña'];

    //$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : ''; 
    //$contraseña = (isset($_POST['contraseña'])) ? $_POST['contraseña'] : '';
    $filaControles= $model->Logear();

    if ($filaControles>0) {
        echo "<a>Bienvenido Usuario</a>";
        Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/usuario/usuario.php");
                        
    }else if($filaControles == ""){
        echo "<h1>Usuario o Contraseña vacia</h1>";
    }else {
        echo "<h1>Usuario o Contraseña Incorrectas</h1>";
        Header ("refresh:2; url=http://localhost/Pagina%20Dinamica/VENTAS/usuarios/iniciarsecion.php");
    }

    //$conn =new PDO("sqlsrv:server=DESKTOP-L7G7OCC\SQLEXPRESS;database=evento", "sa", "daniel06");

}  catch (PDOException $e) {
    echo "Error".$e;
}

?>