<?php
session_start();
unset($_SESSION["usuario_registros"]);
session_destroy();
header("Location: ../general/usuario.php");
//Header ("refresh:1; url=http://localhost/Pagina%20Dinamica/VENTAS/general/usuario/usuario.php");
?>