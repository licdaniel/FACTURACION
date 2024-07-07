<?php require('menu.php') ?>

            <div class="tituloInicio"><!--Titulo-->
                <div class="titini UnoSol">
                    <h2>Comprobante</h2>
                    <!--<div class="titlin"></div>-->
                </div>
            </div>
            <!--------------TABLA PRODUCTOS------->
            <div class="datos UnaTab">
                <!--Lista de datos-->
                <div class="datOrd OrdTab">
                    <div class="CabeList">
                        <h2>Comprobante de ventas</h2>
                        <div class="btnTabla">
                            
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
                            <td class="dat-til">Descuento</td>
                            <td class="dat-til">ITBIS</td>
                            <td class="dat-til">Total Bruto</td>
                            <td class="dat-til">Total Neto</td>
                            <td class="dat-til"><span class="estado activo">Estado</span></td>
                            <td class="dat-til"><span class="estado editar">Editar</span></td>
                            <td class="dat-til"><span class="estado borrar">Borrar</span></td>
                        </thead>
                        <tbody>
                        <?php 
                                        $consulta = $conexion->prepare("SELECT * FROM comprobante");
                                        $consulta ->execute();
                                        $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($datos as $dato) {
                                ?>
                                                <tr>
                                                    <td><?php echo $dato['id_factura']?></td>
                                                    <td><?php echo $dato['id_comprobante']?></td>
                                                    <td><?php echo $dato['comprobante_producto']?></td>
                                                    <td><?php echo $dato['comprobante_cantidad']?></td>
                                                    <td><?php echo $dato['comprobante_unidad']?></td>
                                                    <td><?php echo $dato['comprobante_fechaentrada']?></td>
                                                    <td><?php echo $dato['comprobante_fechasalida']?></td>
                                                    <td><?php echo $dato['comprobante_descuento']?></td>
                                                    <td><?php echo $dato['comprobante_itbis']?></td>
                                                    <td><?php echo $dato['comprobante_totalbruto']?></td>
                                                    <td><?php echo $dato['comprobante_totalneto']?></td>
                                                    <td><?php echo $dato['comprobante_estado']?></td>
                                                    <td><a class="estado editar" href="conexion/editar.php?editar=<?php echo $dato['id_comprobante'] ?>"> Editar</a></td>
                                                    <td><a class="estado borrar" href="conexion/borrarComprobante.php?borrarComprobante=<?php echo $dato['id_comprobante'] ?>"> borrar</a></td>
                                                </tr>
                                                    
                                <?php
                                                }
                                ?>
                            <?php 
                                    if (isset($_GET['borrarComprobante'])) {
                                        include('conexion/borrarComprobante.php');
                                    }
                            ?>
                        </tbody>
                    </Table>
                </div>
            </div>

        
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>