<?php require('menu.php') ?>

            <div class="tituloInicio"><!--Titulo-->
                <div class="title-panel UnoSol">
                    <h2>Facturación</h2>
                    <!--<div class="titlin"></div>-->
                </div>
            </div>

            <!-----FORMULARIO BUSQUEDA------>
            <div class="datos col-3">
                <div class="formulario-busqueda" id="formulario-busqueda">
                    <div class="panel-factura">
                        <div class="CabeList btnTamaño">
                            <h2>Buscar Productos</h2>
                        </div>
                        <div class="div-btn">
                        <div class="btnTabla">
                        <a href="#contenido-tabla" class="btn verde">Registrar Producto</a>
                                    <a href="#" id="calcular" class="btn rojo">Calcular</a>
                        </div>
                    </div>
                        
                        <!------------------------------------------------------------------------------------BUSCAR PRODUCOSs----------->
                        <form action="" class="formulario-contenido col-2" name="formulario-contenido" id="formulario" method="POST">
                            
                            <div class="grupo-formulario" id="grupo_fecha-entrada">        
                                <span>Productos: Codigo & Cantidad</span>
                                <div class="column col-2">
                                    <input type="number" class="formulario__input" id="codigo" name="codigo" placeholder="Codigo Del Productos" > 
                                    <input type="number" min="1" class="formulario__input" id="cantidad" name="cantidad" placeholder="Cantidad" onChange="calculo();">
                                </div>
                            </div>
                            
                            <div class="grupo-formulario" id="grupo_producto">        
                                <span>Producto:</span>
                                <input type="text" class="formulario__input" id="producto" name="producto" placeholder="Producto">
                                
                            </div>

                            <div class="grupo-combobox" id="grupo_promotor">
                                <span>Promotor</span>
                                <select class="" name="id_promotor" id="id_promotor">
                                    <?php foreach ($datosVendedores as $tipo) {
                                        $c_tipo  = $tipo['f_idvendedor'];
                                        $n_tipo  = $tipo['f_nombre'];
                                    ?>
                                        <option value="<?php echo $c_tipo;?>"><?php echo $n_tipo;?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            
                            <div class="btn-formulario boton">
                                <button class="btn-busqueda" type="submit" id="btn-buscar" value="buscar">Buscar Producto</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!------------------------------------------------------------------------------------BUSCAR Clientes----------->
                <div class="formulario-busqueda" id="formulario-contenido">
                    <div class="panel-factura">
                        <form action="" class="formulario-contenido col-2" name="formulario-contenido col-2" id="formulario" method="POST">
                            <!----------------------GRUPO CODIGO----------->
                            <div class="grupo-formulario" id="grupo_codigo">        
                                <span>Codigo:</span>
                                <input type="number" class="formulario__input" id="id_cliente" name="id_cliente" value="0">
                            </div>

                            <!----------------------GRUPO NOMBRE----------->
                            <div class="grupo-formulario " id="grupo_precio">        
                                <span>Nombre Complento:</span>
                                <div class="column col-2">
                                    <input type="text" class="formulario__input" id="cliente_nombre" name="cliente_nombre" value="VENTA AL CONTADO">
                                    <input type="text" class="formulario__input" id="cliente_apellido" name="cliente_apellido" placeholder="Apellido">
                                </div>
                            </div>
                            <!----------------------GRUPO DIRECCION----------->
                            <div class="grupo-formulario" id="grupo_direccion">        
                                <span>Dirección:</span>
                                <input type="text" class="formulario__input" id="cliente_direccion" name="cliente_direccion" placeholder="Dirección">
                            </div>

                            <!----------------------GRUPO PRECIO 1----------->
                            <div class="grupo-formulario " id="grupo_precio">        
                                <span>Cedula, Celular:</span>
                                <div class="column col-2">
                                    <input type="text" class="formulario__input" id="cliente_cedula" name="cliente_cedula" placeholder="Cedula">
                                    <input type="text" class="formulario__input" id="cliente_celular" name="cliente_celular" placeholder="829-000-0000">
                                </div>
                            </div>

                            <div class="btn-formulario boton-clientes">
                                <button class="btn-busqueda" type="submit" id="btn-buscar" value="buscar">Buscar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-----FORMULARIO------>
                <div class="formulario-busqueda" id="formulario-contenido">
                    <div class="panel-factura">
                        <form action="" class="formulario-contenido" name="formulario-contenido" id="formulario" method="POST">
                            <!----------------------GRUPO FECHA----------->
                            <div class="grupo-formulario" id="grupo_fecha">
                                <span>Fecha Del Producto:</span>
                                <input type="date" class="formulario__input" id="cliente_fechanacimiento" name="cliente_fechanacimiento" placeholder="Fecha Del Cliente">
                            </div>
                            <!----------------------GRUPO PRECIO 1----------->
                            <div class="grupo-formulario " id="grupo_precio">        
                                <span>Total Bruto, Base Imponible:</span>
                                <div class="column col-2">
                                    <input type="number" class="formulario__input" id="totalbruto" name="totalbruto" placeholder="Total Bruto" readonly>
                                    <input type="number" class="formulario__input" id="ProductosMinimo" name="ProductosMinimo" value="0">
                                </div>
                            </div>
                            <!----------------------GRUPO PRECIO 1----------->
                            <div class="grupo-formulario " id="grupo_precio">        
                                <span>Descuento:</span>
                                <div class="column col-2">
                                    <input type="number" class="formulario__input" id="ProductosCosto" name="ProductosCosto" placeholder="%">
                                    <input type="number" class="formulario__input" id="ProductosMinimo" name="ProductosMinimo" value="0">
                                </div>
                            </div>
                            
                            <!----------------------GRUPO ITBIS----------->
                            <div class="grupo-formulario" id="grupo_itbis">        
                                <span>ITBIS:</span>
                                <input type="number" class="formulario__input" id="itbis" name="itbis" values="0.05" readonly>
                                
                            </div>
                            <!----------------------GRUPO TOTAL-NETO----------->
                            <div class="grupo-formulario" id="grupo_totalneto">
                                <span>Total Neto:</span>
                                <input type="number" class="formulario__input" id="totalneto" name="totalneto" placeholder="Total Neto" readonly>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-----------------------TABLA----->
            <div class="datos UnaTab" id="contenido-tabla">
                <!--Lista de datos-->
                <div class="datOrd OrdTab">
                    <div class="CabeList">
                        <h2>Facturación De Productos</h2>
                        
                        <div class="btnTabla">
                            <a href="comprobante.php" class="btn azul">Ver Comprobante</a>
                            <a href="#formulario-busqueda" class="btn verdes">Registrar</a>
                        </div>
                    </div>
                    <Table><!--Creación de la Tabla-->
                        <thead>
                            <td class="dat-til">Codigo</td>
                            <td class="dat-til">Productos</td>
                            <td class="dat-til">Cantidad</td>
                            <td class="dat-til">Unidad</td>
                            <td class="dat-til">Fecha Entrada</td>
                            <td class="dat-til">Fecha Salida</td>
                            <td class="dat-til">ITBIS</td>
                            <td class="dat-til">Monto</td>
                            <td class="dat-til">Monto Total</td>
                            <td class="dat-til"><span class="estado activo">Estado</span></td>
                            <td class="dat-til"><span class="estado editar">Editar</span></td>
                            <td class="dat-til"><span class="estado borrar">Borrar</span></td>
                        </thead>
                        <tbody>
                        <?php 
                                        $consulta = $conexion->prepare("SELECT * FROM factura ORDER BY id_factura desc");
                                        $consulta ->execute();
                                        $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($datos as $dato) {
                                ?>
                                                <tr>
                                                    <td><?php echo $dato['id_producto']?></td>
                                                    <td><?php echo $dato['factura_producto']?></td>
                                                    <td><?php echo $dato['factura_cantidad']?></td>
                                                    <td><?php echo $dato['factura_unidad']?></td>
                                                    <td><?php echo $dato['factura_fechaentrada']?></td>
                                                    <td><?php echo $dato['factura_fechasalida']?></td>
                                                    <td><?php echo $dato['factura_itbis']?></td>
                                                    <td><?php echo $dato['factura_totalbruto']?></td>
                                                    <td><?php echo $dato['factura_totalneto']?></td>
                                                    <td><?php echo $dato['factura_estado']?></td>
                                                    <td><a class="estado editar" href="conexion/editarFactura.php?editarFactura=<?php echo $dato['id_producto'] ?>"> Editar</a></td>
                                                    <td><a class="estado borrar" href="conexion/borrarFactura.php?borrarFactura=<?php echo $dato['id_producto'] ?>"> Borrar</a></td>
                                                </tr>
                                                    
                                <?php
                                                }
                                ?>
                            <?php 
                                    if (isset($_GET['borrarFactura'])) {
                                        include('conexion/borrarFactura.php');
                                    }
                            ?>
                        </tbody>
                    </Table>
                </div>
            </div>

            <!-----------------------TABLA PRODUCTOS----->
            <div class="datos UnaTab" id="contenido-tabla">
                <div class="formulario">
                    <!--Lista de datos-->
                    <div class="modal-tabla modal-close">
                    <div class="form-content">
                        <div class="titulo">
                            <h2>Registrar Municipio</h2>
                            <p class="close">X</p>
                        </div>
                    </div>
                        <div class="datOrd OrdTab">
                            <div class="CabeList">
                                <h2>Facturación De Productos</h2>
                                
                                <div class="btnTabla">
                                    <a href="comprobante.php" class="btn azul">Buscar</a>
                                    <a href="#formulario-contenido" class="btn verdes">Registrar</a>
                                </div>
                            </div>
                            <Table><!--Creación de la Tabla-->
                                <thead>
                                    <td class="dat-til">ID</td>
                                    <td class="dat-til">Descripcion</td>
                                    <td class="dat-til">Precio</td>
                                    <td class="dat-til">Precio 2</td>
                                    <td class="dat-til">Precio 3</td>
                                    <td class="dat-til">Costo</td>
                                    <td class="dat-til">Limite Minimo</td>
                                    
                                    <td class="dat-til">Cantidad</td>
                                    <td class="dat-til">Control inventario</td>
                                    <td class="dat-til"><span class="estado activo">Estado</span></td>
                                    <td class="dat-til"><span class="estado editar">Editar</span></td>
                                </thead>
                                <tbody>
                                <?php 
                                        foreach ($datosProductos as $dato) {
                                        ?>
                                                <tr>
                                                    <td><?php echo $dato['f_referencia']?></td>
                                                    <td><?php echo $dato['f_descripcion']?></td>
                                                    <td><?php echo $dato['f_precio']?></td>
                                                    <td><?php echo $dato['f_precio2']?></td>
                                                    <td><?php echo $dato['f_precio3']?></td>
                                                    <td><?php echo $dato['f_ultimocosto']?></td>
                                                    <td><?php echo $dato['f_limiteminimo']?></td>
                                                    <td><?php echo $dato['f_existencia']?></td>
                                                    <td><?php echo $dato['f_controlinventario']?></td>
                                                    <td><?php echo $dato['f_status']?></td>
                                                    <td><div>
                                                            <a class="estado editar" id="btnEditar"> Agregar</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                            
                                        <?php
                                                        }
                                        ?>
                                </tbody>
                            </Table>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <script src="registros/modalFactura.js"></script>

    <script type="text/javascript">
        function calculo(){
                //tasa de impuesto
                var tasa = 12;
                var cantidad = $("input[name=cantidad]").val();
                
                //monto a calcular el impuesto
                var monto = $("input[name=totalbruto]").val();
                
                //calculo del impuesto
                var iva = (monto * cantidad) * 0.03;
                var cant_totalneto = (monto * cantidad);
                
                //se carga el iva en el campo correspondien te
                $("input[name=itbis]").val(iva);
                
                //se carga el total en el campo correspondiente
                $("input[name=totalneto]").val(parseInt(cant_totalneto)+parseInt(iva));
            
            }
    </script>

</body>
</html>

<?php     
    if(isset($_POST['registrarse'])){
        $codigo =$_POST['codigo'];
        $producto =$_POST['producto'];
        $cantidad =$_POST['cantidad'];
        $unidad =$_POST['unidad'];
        $fecha =$_POST['fecha'];
        $itbis =$_POST['itbis'];
        $totalbruto =$_POST['totalbruto'];
        $totalneto =$_POST['totalneto'];
        $estado =$_POST['estado'];

        try {
            if ($codigo =="" || $producto == "" || $cantidad =="" ||  $itbis =="" || $totalbruto =="" || $totalneto = "" || $estado =="") {
                echo "<div class= 'formulario__mensaje-activo' id ='formulario__mensaje'>
                <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>";
            }else {
                echo "<div class= 'formulario__mensaje' id ='formulario__mensaje'>
                <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>";

                    $insertmunicipio = $conexion->prepare("SP_RealizarVentas '$codigo', '$producto', '$cantidad', '$unidad','$fecha', 
                                                                            '$itbis','$totalbruto','$totalneto', '$estado'");
                    $insertmunicipio ->execute();

                    if(!$insertmunicipio){
                    echo"Error En la linea de sql";
                    }
                    else {
                        echo"<script>window.open('almacen.php')</script>";
                        Header("Location: almacen.php");
                    }
                }
        } catch (PDOException $e) {
            echo "Error".$e;
        }
    }
?>