<?php require('menu.php') ?>

            <div class="tituloInicio"><!--Titulo-->
                <div class="titini UnoSol">
                    <h2>Listado De Marca</h2>
                    <!--<div class="titlin"></div>-->
                </div>
            </div>

            <div class="datos UnaTab">
                <!--Lista de datos-->
                <div class="datOrd OrdTab">

                    <div class="CabeList btnTamaño">
                        <h2>Registros de Marca</h2>
                    </div>
                    <div class="div-btn">
                        <div class="btnTabla">
                            <a href="#" class="btn verdes marca">Registrar</a>
                        </div>
                    </div>
                    <div class="CabList">
                        <h2>Marca</h2>
                        <div class="LinTil"></div>
                    </div>

                    <Table><!--Creación de la Tabla-->
                        <thead>
                            <td class="dat-til">Codigo</td>
                            <td class="dat-til">Descripción</td>
                            <td class="dat-til"><span class="estado ">Editar</span></td>
                        </thead>
                        <tbody>
                        <?php 
                                    $consulta = $conexion->prepare("SELECT * FROM t_marca ORDER BY id_marca desc");
                                    $consulta ->execute();
                                    $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($datos as $dato) {
                                ?>
                                    <tr>
                                        <td><?php echo $dato['id_marca']?></td>
                                        <td><?php echo $dato['marca_nombre']?></td>
                                        <td><div>
                                                <a class="estado editar" id="btnEditar"> Editar</a>
                                            </div>
                                        </td>
                                    </tr>                   
                        <?php }?>
                        </tbody>
                    </Table>
                </div>
            </div>

            <!-----FORMULARIO------>
            <div class="formulario">
                <div class="modal modal-close">
                    <div class="form-content">
                        <div class="titulo">
                            <h2>Registrar Marca</h2>
                            <p class="close">X</p>
                        </div>
                    </div>
                    <form action="registros/addRegistros.php" class="formulario-contenido col-2" name="formulario-contenido" id="formulario" method="POST">
                            <!----------------------GRUPO IDMarca----------->
                            <div class="grupo-formulario" id="grupo_Cantidad">        
                                <span>Codigo:</span>
                                <input type="number" min="0" class="formulario__input" readonly id="id_marca" name="id_marca" placeholder="Codigo">
                                
                            </div>

                            <!----------------------GRUPO NOMBRE----------->
                            <div class="grupo-formulario" id="grupo_nombre">        
                                <span>Nombre Marca:</span>
                                <input type="text" class="formulario__input" id="marca_nombre" name="marca_nombre" placeholder="Nombre marca">
                                <p>Digite el nombre del marca.</p>
                            </div>

                            
                            
                        <div class="MensajeBoton">
                        <!----------------------BOTON ENVIAR----------->
                            <div class="grupo-formulario boton col-2">
                                <button class="btn-enviar" type="submit" id="btn-enviar" name="registrarse-marca" >Enviar</button>
                            </div>
                            <div class="grupo-formulario boton col-2">
                                <button class="btn-Modificar" type="submit" id="btnModificar" name="modificar-marca" >Modificar</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
    </div>

    <script src="registros/modalMarca.js"></script>

</body>
</html>
