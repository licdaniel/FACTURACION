<?php require('menu.php') ?>
    <div class="tituloInicio"><!--Titulo-->
                <div class="titini">
                    <h1>Bienvenido</h1>
                    <h2>Compañia De Ventas <span><?php echo $empresa; ?></span></h2>
                    <p class="username"><?php echo $_SESSION["usuario_registros"]; echo''; echo $_SESSION['s_cargo']; ?></p>
                    <!--<div class="titlin"></div>-->
                </div>
            </div>

            <!--Contenido-->
            <div class="contBox">
                <div class="card">
                    <div>
                        <div class="numeros azul">03</div>
                        <div class="contNom">Departamento</div>
                    </div>
                    <div class="icoBx">
                        <ion-icon name="business-outline"></ion-icon>
                    </div>
                </div>
                <div class="card rojo">
                    <div>
                        <div class="numeros rojo">25</div>
                        <div class="contNom"><a href="usuario.php">Nuevo Usuarios</a></div>
                    </div>
                    <div class="icoBx">
                        <ion-icon name="person-add-outline"></ion-icon>
                    </div>
                </div>
                <div class="card naranja">
                    <div>
                        <div class="numeros naranja">99+</div>
                        <div class="contNom"><a href="categoria.php">Categorias</a></div>
                    </div>
                    <div class="icoBx">
                        <ion-icon name="copy-outline"></ion-icon>
                    </div>
                </div>
                <div class="card verdes">
                    <div>
                        <div class="numeros verdes">07</div>
                        <div class="contNom"><a href="comprobante.php">Comprobante Fiscal</a></div>
                    </div>
                    <div class="icoBx">
                        <ion-icon name="receipt-outline"></ion-icon>
                    </div>
                </div>
            </div>

            
            <div class="datos UnaTab">
                <!--Lista de datos-->
                <div class="datOrd">
                    <div class="CabeList">
                        <h2>Órdenes Recientes</h2>
                        <div class="btnTabla">
                            <a href="#" class="btn verdes">Registrar</a>
                        </div>
                    </div>
                    <Table><!--Creación de la Tabla-->
                        <thead>
                            <td class="dat-til">Productos</td>
                            <td class="dat-til">Precio</td>
                            <td class="dat-til">Cantidad</td>
                            <td class="dat-til">Fecha Ingreso</td>
                            <td class="dat-til">Pago</td>
                            <td class="dat-til">Estado</td>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Iphone 11 pro</td>
                                <td>$900</td>
                                <td>1</td>
                                <td>10/18/2020</td>
                                <td>Pagado</td>
                                <td><span class="estado entrega">Entregado</span></td>
                            </tr>

                            <tr>
                                <td>Samsung Galaxy A10</td>
                                <td>$850</td>
                                <td>1</td>
                                <td>04/18/2021</td>
                                <td>Vencido</td>
                                <td><span class="estado pendiente">Pendiente</span></td>
                            </tr>
                            <tr>
                                <td>Iphone 11 pro Max</td>
                                <td>$950</td>
                                <td>1</td>
                                <td>18/06/2021</td>
                                <td>Pagado</td>
                                <td><span class="estado regreso">De vuelto</span></td>
                            </tr>
                            <tr>
                                <td>Samsung Galaxy A10</td>
                                <td>$850</td>
                                <td>1</td>
                                <td>09/06/2020</td>
                                <td>Vencido</td>
                                <td><span class="estado proceso">En Proceso</span></td>
                            </tr>
                            <tr>
                                <td>Iphone 12</td>
                                <td>$1050</td>
                                <td>1</td>
                                <td>08/02/2021</td>
                                <td>Pagado</td>
                                <td><span class="estado entrega">Entregado</span></td>
                            </tr>
                            <tr>
                                <td>Xiaomi Redmi Note 9</td>
                                <td>$1,660</td>
                                <td>3</td>
                                <td>10/18/2021</td>
                                <td>Pagado</td>
                                <td><span class="estado pendiente">Pendiente</span></td>
                            </tr>
                            <tr>
                                <td>Xiaomi Redmi Note 10 Pro</td>
                                <td>$1,850</td>
                                <td>4</td>
                                <td>10/18/2021</td>
                                <td>Pagado</td>
                                <td><span class="estado regreso">De vuelto</span></td>
                            </tr>
                            <tr>
                                <td>Galaxy Fold 3</td>
                                <td>$1850</td>
                                <td>1</td>
                                <td>10/10/2021</td>
                                <td>Vencido</td>
                                <td><span class="estado proceso">En Proceso</span></td>
                            </tr>
                        </tbody>
                    </Table>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>