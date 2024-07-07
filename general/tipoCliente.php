<?php require('menu.php') ?>

            <div class="tituloInicio"><!--Titulo-->
                <div class="titini UnoSol">
                    <h2>Listado De Clientes,Promotor,Proveedor</h2>
                    <!--<div class="titlin"></div>-->
                </div>
            </div>

            <div class="datos UnaTab">
                <!--Lista de datos-->
                <div class="datOrd OrdTab">

                    <div class="CabeList btnTamaño">
                        <h2>Listado: [Clientes,Promotor,Proveedor]</h2>
                    </div>
                    <div class="div-btn">
                        <div class="btnTabla">
                            <a href="#" class="btn verdes tipoCliente">Registrar</a>
                        </div>
                    </div>
                    

                    <Table><!--Creación de la Tabla-->
                        <thead>
                            <td class="dat-til">Codigo</td>
                            <td class="dat-til">Nombre</td>
                            <td class="dat-til"><span class="estado ">Editar</span></td>
                        </thead>
                        <tbody>
                        <?php 
                                    foreach ($datosTipoCliente as $dato) {
                                ?>
                                    <tr>
                                        <td><?php echo $dato['f_id']?></td>
                                        <td><?php echo $dato['f_descripcion']?></td>
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

            <!----------------------------------------------------------------------------------------FORMULARIO------>
            <div class="formulario">
                <div class="modal modal-close">
                    <div class="form-content">
                        <div class="titulo">
                            <h2>Registrar </h2>
                            <p class="close">X</p>
                        </div>
                    </div>
                    <form action="registros/addRegistros.php" class="formulario-contenido col-2" name="formulario-contenido" id="formulario" method="POST">
                            <!----------------------GRUPO IDMarca----------->
                            <div class="grupo-formulario" id="grupo_Cantidad">        
                                <span>Codigo:</span>
                                <input type="number" min="0" class="formulario__input"  id="tipoCliente_codigo" name="tipoCliente_codigo" placeholder="Codigo">
                                
                            </div>

                            <!----------------------GRUPO NOMBRE----------->
                            <div class="grupo-formulario" id="grupo_nombre">        
                                <span>Nombre:</span>
                                <input type="text" class="formulario__input" id="tipoCliente_nombre" name="tipoCliente_nombre" placeholder="Nombre">
                                <p>Digite el nombre.</p>
                            </div>

                            
                            
                        <div class="MensajeBoton">
                        <!----------------------BOTON ENVIAR----------->
                            <div class="grupo-formulario boton col-2">
                                <button class="btn-enviar" type="submit" id="btn-enviar" name="registrarse-tipoCliente" >Enviar</button>
                            </div>
                            <div class="grupo-formulario boton col-2">
                                <button class="btn-Modificar" type="submit" id="btnModificar" name="modificar-tipoCliente" >Modificar</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
    </div>

    <script src="registros/modaltipoCliente.js"></script>

</body>
</html>
