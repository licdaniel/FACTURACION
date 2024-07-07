<?php
session_start();
        require('../conexion/conexion.php');
        require_once('../conexion/configuracion.php');
        require_once('get_funcion.php')

/*        
if($_SESSION["usuario_registros"] === null){
    header("Location: ../conexion/index.php");
}


require_once('../../conexion/conexion.php');
        require_once('../../conexion/configuracion.php');

if($_SESSION["usuario_registros"] === null){
    header("Location: ../../usuarios/iniciarsecion.php");
}*/


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda || DR</title>
    <link rel="stylesheet" href="../css/formularioM.css">
    <link rel="stylesheet" href="../css/menuS.css">
    <!---Alert----->
    <link rel="stylesheet" href="../plugins/sweetalert2.min.css">
</head>
<body>
    <div class="container">
        <div class="navegacion">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon logo"><ion-icon name="business"></ion-icon> <ion-icon name="walk-outline"></ion-icon></span>
                        
                        <span class="title logo"><?php echo $empresa; ?></span>
                    </a>
                </li>

                <li>
                    <a href="index.php" class="inicio" value="btn-inicio">
                    <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
                        <span class="title">Inicio</ion-icon></span>
                    </a>
                </li>
                <li><!---------------------------------------------------------------PRIMERA-LISTA-------------------->
                    <a href="link.php?enlaces=inicio" class="inicio" value="btn-inicio">
                        <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
                        <span class="title">Registros De Datos</ion-icon></span>
                        <span class="icon active"><ion-icon name="caret-forward-outline"></ion-icon></span>
                    </a>
                    <ul class="sub-menu "><!-------SUB-MENUs---------->

                        <?php if (isset($_SESSION['usuario_registros']) && $_SESSION['s_cargo'] == "ADMIN") {?>
                            <li>
                                <a href="link.php?enlaces=usuario">
                                    <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                                    <span class="title">Usuarios</span>
                                </a>
                            </li>
                        <?php } ?>   
                        <li>
                            <a href="link.php?enlaces=cliente" class="">
                                <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
                                <span class="title">Cliente</span>
                                <span class="icon active"><ion-icon name="caret-forward-outline"></ion-icon></span>
                            </a>
                            <ul class="sub-menu"><!------SUB-MENU------>
                                <li>
                                    <a href="link.php?enlaces=pais">
                                        <span class="icon"><ion-icon name="location-outline"></ion-icon></span>
                                        <span class="title">Pais</span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="../diccionariodatos/provincia.php">
                                        <span class="icon"><ion-icon name="location-outline"></ion-icon></span>
                                        <span class="title">Provincia</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../diccionariodatos/ciudad.php">
                                        <span class="icon"><ion-icon name="location-outline"></ion-icon></span>
                                        <span class="title">Ciudad</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../diccionariodatos/municipio.php" class="" value="btn-municipio">
                                        <span class="icon"><ion-icon name="location-outline"></ion-icon></span>
                                        <span class="title">Municipio</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../registros/sector.php" class="" value="btn-sector">
                                    <span class="icon"><ion-icon name="location-outline"></ion-icon></span>
                                        <span class="title">Sector</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="link.php?enlaces=tipoCliente">
                                <span class="icon"><ion-icon name="location-outline"></ion-icon></span>
                                <span class="title">Tipo Cliente</span>
                            </a>
                        </li>

                        <!---------------------------------------------------------------SUPLIDOR-------------------->
                        <li>
                            <a href="link.php?enlaces=suplidor">
                                <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                                <span class="title">Suplidor</span>
                            </a>
                        </li>

                        <!---------------------------------------------------------------EMPLEADOS-------------------->
                        <?php if ($_SESSION['s_cargo'] == "ADMIN" or  $_SESSION['s_cargo'] == "EJECUTIVO") {?>
                            <li>
                                <a href="link.php?enlaces=promotor">
                                    <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
                                    <span class="title">Promotor</span>
                                </a>
                            </li>
                        <?php } ?> 

                        <!---------------------------------------------------------------INVENTARIO-------------------->
                        <li>
                            <a href="#" class="productos" value="btn-productos">
                                <span class="icon"><ion-icon name="cart-outline"></ion-icon></span>
                                <span class="title">Inventario</span>
                                <span class="icon active"><ion-icon name="caret-forward-outline"></ion-icon></span>
                            </a>
                            <ul class="sub-menu"><!------SUB-MENU------>
                                <li>
                                    <a href="link.php?enlaces=almacen" class="almacen" value="btn-almacen">
                                        <span class="icon"><ion-icon name="storefront-outline"></ion-icon></span>
                                        <span class="title">Almacen</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="link.php?enlaces=categoria" class="categoria" value="btn-categoria">
                                        <span class="icon"><ion-icon name="copy-outline"></ion-icon></span>
                                        <span class="title">Categorias</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="link.php?enlaces=marca" class="marca" value="btn-marca">
                                        <span class="icon"><ion-icon name="storefront-outline"></ion-icon></span>
                                        <span class="title">Marca</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><!---------------------------------------------------------------SEGUNDA-LISTA-------------------->
                    <a href="link.php?enlaces=cliente" class="clietes" value="btn-clientes">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Cientes</span>
                        
                </li>
                <!---------------------------------------------------------------INVENTARIO-LISTA-------------------->
                    <li>
                        <a href="link.php?enlaces=productos" class="productos" value="btn-productos">
                            <span class="icon"><ion-icon name="cart-outline"></ion-icon></span>
                            <span class="title">Productos</span>
                            <span class="icon active"><ion-icon name="caret-forward-outline"></ion-icon></span>
                        </a>
                        <ul class="sub-menu">
                            

                            <li>
                                <a href="link.php?enlaces=almacen" class="almacen" value="btn-almacen">
                                    <span class="icon"><ion-icon name="storefront-outline"></ion-icon></span>
                                    <span class="title">Entradas</span>
                                </a>
                            </li>
                            <li>
                                <a href="link.php?enlaces=empleados" class="" value="btn-empleados">
                                    <span class="icon"><ion-icon name="storefront-outline"></ion-icon></span>
                                    <span class="title">Salidas</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="">
                                    <span class="icon"><ion-icon name="print-outline"></ion-icon></span>
                                    <span class="title">Reporte</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="">
                                    <span class="icon"><ion-icon name="print-outline"></ion-icon></span>
                                    <span class="title">Graficos</span>
                                </a>
                            </li>
                        </ul>
                    </li> 
                
                <li><!---------------------------------------------------------------Facturación-LISTA-------------------->
                    <a href="factura.php" class="factura" value="btn-factura">
                        <span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
                        <span class="title">Facturación</span>
                        <span class="icon active"><ion-icon name="caret-forward-outline"></ion-icon></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">
                                <span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
                                <span class="title">Detalle De La Factura</span>
                            </a>
                        </li>
                        <li>
                            <a href="link.php?enlaces=departamento" class="departamento" value="btn-departamento">
                                <span class="icon"><ion-icon name="reader-outline"></ion-icon></span>
                                <span class="title">Cotización</span>
                            </a>
                        </li>
                        <li><!---------------------------------------------------------------PEDIDO-LISTA-------------------->
                            <a href="link.php?enlaces=sector" class="sector" value="btn-sector">
                                <span class="icon"><ion-icon name="receipt-outline"></ion-icon></span>
                                <span class="title">Pedidos</span>
                            </a>
                        </li>
                        <?php if (isset($_SESSION['usuario_registros']) && $_SESSION['s_cargo'] == "ADMIN" or  $_SESSION['s_cargo'] == "EJECUTIVO" ){?> 
                            <li>
                                <a href="#">
                                    <span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
                                    <span class="title">Comprobante</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
                                    <span class="title">Devolución</span>
                                </a>
                            </li>
                            <li>
                            <a href="#" class="">
                                <span class="icon"><ion-icon name="print-outline"></ion-icon></span>
                                <span class="title">Graficos</span>
                            </a>
                        </li>
                        <?php } ?> 
                        <li>
                            <a href="#" class="">
                                <span class="icon"><ion-icon name="print-outline"></ion-icon></span>
                                <span class="title">Reporte</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!---------------------------------------------------------------PAGO-LISTA-------------------->
                <?php if (isset($_SESSION['usuario_registros']) && $_SESSION['s_cargo'] == "ADMIN" or  $_SESSION['s_cargo'] == "EJECUTIVO" or  $_SESSION['s_cargo'] == "CAJERO2" ){?> 
                    <li>
                        <a href="factura.php" class="factura" value="btn-factura">
                            <span class="icon"><ion-icon name="wallet-outline"></ion-icon></span>
                            <span class="title">Recibo De Pago</span>
                            <span class="icon active"><ion-icon name="caret-forward-outline"></ion-icon></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">
                                    <span class="icon"><ion-icon name="wallet-outline"></ion-icon></span>
                                    <span class="title">Detalle De Recibo</span>
                                </a>
                            </li>
                            <li><a href="#">Anular Recibo De Caja</a></li>
                            <li><a href="#">Cierre De Caja</a></li>
                            <li>
                                <a href="#" class="">
                                    <span class="icon"><ion-icon name="print-outline"></ion-icon></span>
                                    <span class="title">Reporte</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="">
                                    <span class="icon"><ion-icon name="print-outline"></ion-icon></span>
                                    <span class="title">Graficos</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?> 

                <!---------------------------------------------------------------LISTA-Cuenta X Pagar------------------->
                <?php if (isset($_SESSION['usuario_registros']) && $_SESSION['s_cargo'] == "ADMIN" or  $_SESSION['s_cargo'] == "EJECUTIVO" or  $_SESSION['s_cargo'] == "CONTABLE" ){?> 
                    <li>
                        <a href="factura.php" class="Cuenta X Pagar" value="btn-Cuenta X Pagar">
                            <span class="icon"><ion-icon name="card-outline"></ion-icon></span>
                            <span class="title">Cuenta X Pagar</span>
                            <span class="icon active"><ion-icon name="caret-forward-outline"></ion-icon></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#" class="">
                                    <span class="icon"><ion-icon name="today-outline"></ion-icon></span>
                                    <span class="title">Detalle De Cuenta X Pagar</span>
                                    <span class="icon active"><ion-icon name="caret-forward-outline"></ion-icon></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#" class="">
                                            <span class="icon"><ion-icon name="today-outline"></ion-icon></span>
                                            <span class="title">Cuenta X Pagar Por Dia</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="">
                                            <span class="icon"><ion-icon name="today-outline"></ion-icon></span>
                                            <span class="title">Cuenta X Pagar Mensual</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="">
                                            <span class="icon"><ion-icon name="today-outline"></ion-icon></span>
                                            <span class="title">Ventas Trimestral</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="">
                                            <span class="icon"><ion-icon name="today-outline"></ion-icon></span>
                                            <span class="title">Ventas Anuales</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="">
                                    <span class="icon"><ion-icon name="today-outline"></ion-icon></span>
                                    <span class="title">Caja</span>
                                    <span class="icon active"><ion-icon name="caret-forward-outline"></ion-icon></span>
                                </a>
                                <ul class="sub-menu ">
                                    <li><a href="#">Horario De Turno</a></li>
                                    <li><a href="#">Apertura De Caja</a></li>
                                    <li><a href="#">Cierre De Caja</a></li>
                                    <li><a href="#">Devolucion</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Cortes De Caja</a></li>
                            <li><a href="#">Devolución</a></li>
                            <li>
                                <a href="#" class="">
                                    <span class="icon"><ion-icon name="print-outline"></ion-icon></span>
                                    <span class="title">Reporte</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="">
                                    <span class="icon"><ion-icon name="print-outline"></ion-icon></span>
                                    <span class="title">Graficos</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?> 

                <div class="linea">
                    <div class="linea-s"></div>
                </div>

                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">Ayuda</span>
                    </a>
                </li>

                <?php if (isset($_SESSION['usuario_registros']) && $_SESSION['s_cargo'] == "ADMIN"){?>
                    <li><!---------------------------------------------------------------LISTA-configuracion------------------->
                        <a href="factura.php" class="Ventas" value="btn-Ventas">
                            <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                            <span class="title">Configuración</span>
                            <span class="icon active"><ion-icon name="caret-forward-outline"></ion-icon></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="link.php?enlaces=empresa" class="">
                                    <span class="icon"><ion-icon name="home-outline"></span>
                                    <span class="title">Empresa</span>
                                    <span class="icon active"><ion-icon name="caret-forward-outline"></ion-icon></span>
                                </a>
                                    <ul class="sub-menu ">
                                        
                                        <li>
                                            <a href="../diccionariodatos/surcusal.php" class="" value="btn-departamento">
                                                <span class="icon"><ion-icon name="business-outline"></ion-icon></span>
                                                <span class="title">Surcusal</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../diccionariodatos/departamento.php" class="" value="btn-departamento">
                                                <span class="icon"><ion-icon name="business-outline"></ion-icon></span>
                                                <span class="title">Departamento</span>
                                            </a>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
                    </li>
                <?php } ?>

                <li>
                    <a href="index.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!--main-->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!--Buscar-->
                <div class="search">
                    <label for="">
                        <input type="text" placeholder="Buscar">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <!--img-->
                
                <div class="user">
                    <div class="user-text">
                        <!-----IMG-USER---->
                        <div class="userBx">
                            <div class="imgBx">
                                <img src="../img/user.jpg" alt="">
                            </div>
                            <p class="username"><?php echo $_SESSION["usuario_registros"]; echo''; echo $_SESSION['s_cargo']; ?></p>
                        </div>
                
                        <div class="menuToggle"></div>
                        <ul class="menu-usuario">
                            <li><a href="link.php?enlaces=usuario"><ion-icon name="person-outline"></ion-icon> Mi Perfil</a></li>
                            <li><a href="#"><ion-icon name="chatbubble-outline"></ion-icon>Permisos</a></li>
                            <li><a href="#"><ion-icon name="notifications-outline"></ion-icon>Preferencia</a></li>
                            <li>
                                <a href="link.php?enlaces=empresa"><ion-icon name="settings-outline"></ion-icon> Configuración</a>
                                
                            </li>
                            <li><a href="../../conexion/logout.php"><ion-icon name="log-in-outline"></ion-icon> Salir</a></li>
                        </ul>
                    </div>
                </div>
            </div>

    
        <!------------Ionics------------------>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    
    <script src="../plugins/jquery-3.6.0.min.js"></script>
    <script src="../plugins/popper.min.js"></script>   

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../plugins/sweetalert2.all.min.js"></script>   
    <script src="../usuarios/codigo.js"></script>

    

    <!----------------------TOGGLE--------------->
    <script src="../js/menu.js"></script>

    
