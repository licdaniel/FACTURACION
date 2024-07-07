<?php require('menu.php') ?>

            <div class="tituloInicio"><!--Titulo-->
                <div class="titini UnoSol">
                    <h2>Listado De Pais</h2>
                    <!--<div class="titlin"></div>-->
                </div>
            </div>

            <div class="datos UnaTab">
                <!--Lista de datos-->
                <div class="datOrd OrdTab">

                    <div class="CabeList btnTamaño">
                        <h2>Registros de Pais</h2>
                    </div>
                    <div class="div-btn">
                        <div class="btnTabla">
                            <a href="#" class="btn verdes pais">Registrar</a>
                        </div>
                    </div>
                    <div class="CabList">
                        <h2>Pais</h2>
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
                                    foreach ($datosPais as $row) {
                                        $id_pais          = $row['f_id'];
                                        $pais_nombre      = $row['f_descripcion'];
                                ?>
                                    <tr>
                                        <td><?php echo $id_pais;?></td>
                                        <td><?php echo $pais_nombre;?></td>
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
                            <h2>Registrar Almacen</h2>
                            <p class="close">X</p>
                        </div>
                    </div>
                    <form action="registros/addRegistros.php" class="formulario-contenido col-2" name="formulario-contenido" id="formulario" method="POST">
                            <!----------------------GRUPO IDALMACEN----------->
                            <div class="grupo-formulario" id="grupo_Cantidad">        
                                <span>Codigo:</span>
                                <input type="number" min="0" class="formulario__input"  id="f_id" name="f_id" placeholder="Codigo">
                                
                            </div>

                            <!----------------------GRUPO NOMBRE----------->
                            <div class="grupo-formulario" id="grupo_nombre">        
                                <span>Nombre Pais:</span>
                                <input type="text" class="formulario__input" id="f_descripcion" name="f_descripcion" placeholder="Nombre Pais">
                                <p>Digite el nombre del pais.</p>
                            </div>

                            
                            
                        <div class="MensajeBoton">
                        <!----------------------BOTON ENVIAR----------->
                            <div class="grupo-formulario boton col-2">
                                <button class="btn-enviar" type="submit" id="btn-enviar" name="registrarse-pais" >Enviar</button>
                            </div>
                            <div class="grupo-formulario boton col-2">
                                <button class="btn-Modificar" type="submit" id="btnModificar" name="modificar-pais" >Modificar</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
    </div>

    <script src="registros/modalPais.js"></script>

</body>
</html>
