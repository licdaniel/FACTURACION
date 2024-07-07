<?php require('menu.php') ?>

            <div class="tituloInicio"><!--Titulo-->
                <div class="titini UnoSol">
                    <h2>Productos</h2>
                    <!--<div class="titlin"></div>-->
                </div>
            </div>
            <!--------------TABLA PRODUCTOS------->
            <div class="datos UnaTab">
                <!--Lista de datos-->
                <div class="datOrd OrdTab">
                    <div class="CabeList ">
                        <h2>Productos</h2>
                    </div>
                    <div class="div-btn">
                        <div class="btnTabla">
                            <a href="factura.php" class="btn verdes">Realizar Ventas</a>                            
                        </div>
                        <div class="btnTabla ">
                            <a href="productos.php" class="btn azul">Actualizar</a>
                        </div>
                    </div>
                    <Table><!--Creación de la Tabla-->
                        <thead>
                            <td class="dat-til">ID</td>
                            <td class="dat-til">ID Almacen</td>
                            <td class="dat-til">Productos</td>
                            <td class="dat-til">Cantidad</td>
                            <td class="dat-til">Unidad</td>
                            <td class="dat-til">Monto</td>
                            <td class="dat-til">Fecha Entrada</td>
                            <td class="dat-til">Fecha Salida</td>
                            <td class="dat-til"><span class="estado activo">Estado</span></td>
                            <td class="dat-til"><span class="estado editar">Editar</span></td>
                            <td class="dat-til"><span class="estado borrar">Borrar</span></td>
                        </thead>
                        <tbody>
                        <?php 
                                        $consulta = $conexion->prepare("SELECT * FROM producto ORDER BY id_producto desc");
                                        $consulta ->execute();
                                        $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($datos as $dato) {
                                ?>
                                        <tr>
                                            <td><?php echo $dato['id_producto']?></td>
                                            <td><?php echo $dato['id_almacen']?></td>
                                            <td><?php echo $dato['producto_nombre']?></td>
                                            <td><?php echo $dato['producto_cantidad']?></td>
                                            <td><?php echo $dato['producto_unidad']?></td>
                                            <td><?php echo $dato['producto_monto']?></td>
                                            <td><?php echo $dato['producto_fechaentrada']?></td>
                                            <td><?php echo $dato['producto_fechasalida']?></td>
                                            <td><?php echo $dato['producto_estado']?></td>
                                            <td><div>
                                                    <a class="estado editar" id="btnEditar"> Editar</a>
                                                </div>
                                            </td>
                                            <td><a class="estado borrar" href="producto/borrarProducto.php?borrarProducto=<?php echo $dato['id_producto'] ?>"> Borrar</a></td>
                                        </tr>
                                            
                                <?php
                                                }
                                ?>
                                <?php 
                                    if (isset($_GET['borrarProducto'])) {
                                        include('producto/borrarProducto.php');
                                    }
                                ?>
                        </tbody>
                    </Table>
                </div>

                <!-----FORMULARIO------>
            <div class="formulario">
                <div class="modal modal-close">
                    <div class="form-content">
                        <div class="titulo">
                            <h2>Registrar Almacen</h2>
                            <p class="close">X</p>
                        </div>
                    </div>
                    <form action="#" class="formulario-contenido" name="formulario-contenido" id="formulario" method="POST">
                            
                            <!----------------------GRUPO NOMBRE----------->
                            <input type="number" class="formulario__producto" id="idproducto" name="idproducto" placeholder="Id Almacen">
                            <div class="grupo-formulario" id="grupo_nombre">        
                                <span>Nombre Almacen:</span>
                                <input type="text" class="formulario__input" id="nombre" name="nombre" placeholder="Nombre Almacen">
                            </div>

                            <div class="grupo-combobox" id="grupo_cargo">
                                <span>Estado</span>
                                    <select class="" name="estado" id="estado">
                                        <option value=""></option>
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo</option>
                                    </select>
                            </div>

                        <div class="MensajeBoton">
                        <!----------------------BOTON ENVIAR----------->
                        <div class="grupo-formulario boton">
                                <button class="btn-enviar" type="submit" id="btn-enviar" name="registrarse" >Enviar</button>
                            </div>
                        <div class="grupo-formulario boton">
                            <button class="btn-Modificar" type="submit" id="btnModificar" name="modificar" >Modificar</button>
                        </div>
                        </div>
                        
                    </form>
                </div>
            </div>
            </div>

        
    </div>
    <script src="producto/modalProducto.js"></script>
</body>
</html>

<!--------------------------------------------------------MODIFICAR------------------>
<?php 
        if (isset($_POST['modificar'])) {
            $idproducto =$_POST['idproducto'];
            $nombre =$_POST['nombre'];
            $estado =$_POST['estado'];

            $consulta = "UPDATE producto SET producto_nombre='$nombre', producto_estado='$estado' WHERE id_producto='$idproducto' ";		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();     
            
            if(!$resultado){
                echo"Error En la linea de sql";
            }
            else {
                //echo"<script>window.refresh('producto.php')</script>";
                Header("Location: producto.php");
                Header ("refresh:2; url=http://localhost/pagina/telefono/producto.php");
                echo"<script>Swal.fire({
                    type:'warning',
                    title:'Registro Actualizado.!',
                });</script>";
        }
    }
?>