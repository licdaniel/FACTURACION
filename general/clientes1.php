
<?php 
require('menu.php') 
?>
            <div class="tituloInicio"><!--Titulo-->
                <div class="titini UnoSol">
                    <h2>Listado De Clientes</h2>
                    <!--<div class="titlin"></div>-->
                </div>
            </div>
            <div class="datos UnaTab">
                <!--Lista de datos-->
                <div class="datOrd OrdTab">
                    <div class="CabeList btnTamaño">
                        <h2>Registros de Clientes</h2>
                    </div>
                    <div class="div-btn">
                        <div class="btnTabla">
                            <a href="#" class="btn verdes cliente">Registrar</a>
                        </div>
                    </div>
                    <div class="CabList">
                        <h2>Clientes</h2>
                        <div class="LinTil"></div>
                    </div>
                    <Table><!--Creación de la Tabla-->
                        <thead>
                            <td class="dat-til">ID</td>
                            <td class="dat-til">Fecha Ingreso</td>
                            <td class="dat-til">NSS.</td>
                            <td class="dat-til">Cedula</td>
                            <td class="dat-til">Nombre Titular</td>
                            <td class="dat-til">Dependiente</td>
                            <td class="dat-til">Promotor</td>
                            <td class="dat-til">Empresa</td>
                            <td class="dat-til">Precio Costo</td>
                            <td class="dat-til">Precio Ventas</td>
                            <td class="dat-til">Ganancia</td>
                            <td class="dat-til"><span class="estado activo">Estado</span></td>
                            <td class="dat-til"><span class="estado editar">Editar</span></td>
                            <td class="dat-til"><span class="estado borrar">Borrar</span></td>
                        </thead>
                        <tbody>
                            <?php 
                                $consulta = $conexion->prepare("SELECT * FROM t_cliente ORDER BY id_cliente, cliente_estado");
                                $consulta ->execute();
                                $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

                                foreach ($datos as $dato) {
                                    $id_cliente          = $dato['id_cliente'];
                                    $cliente_fechaingreso= $dato['cliente_fechaingreso'];
                                    $cliente_nss         = $dato['cliente_edad'];
                                    $cliente_cedula      = $dato['cliente_cedula'];
                                    $cliente_nombre      = $dato['cliente_nombre'];
                                    $cliente_dependiente = $dato['cliente_apellido'];
                                    $cliente_promotor    = $dato['cliente_edad'];
                                    $cliente_empresa     = $dato['cliente_direccion'];
                                    $cliente_precio_costo= $dato['cliente_credito'];
                                    $cliente_precio_ventas= $dato['cliente_credito'];
                                    
                                    $cliente_ganancia= $dato['cliente_credito'];
                                    $cliente_estado      = $dato['cliente_estado'];
                            ?>
                                <tr>
                                    <td><?php echo $id_cliente;?></td>
                                    <td><?php echo $cliente_fechaingreso;?></td>
                                    <td><?php echo $cliente_nss;?></td>
                                    <td><?php echo $cliente_cedula;?></td>
                                    <td><?php echo $cliente_nombre;?></td>
                                    <td><?php echo $cliente_dependiente;?></td>
                                    <td><?php echo $cliente_promotor;?></td>
                                    <td><?php echo $cliente_empresa;?></td>
                                    <td><?php echo $cliente_precio_costo;?></td>
                                    <td><?php echo $cliente_precio_ventas;?></td>
                                    
                                    <td><?php echo $cliente_ganancia;?></td>
                                    
                                    <?php if ($cliente_estado== "Activo") {?>
                                        <td><span class="estado entrega"><?php echo $cliente_estado;?></span></td>
                                    <?php } else {?> 
                                        <td><span class="estado regreso"><?php echo $cliente_estado;?></span></td>
                                    <?php } ?> 
                                    

                                    <td><div>
                                            <a class="estado editar" id="btnEditar"> Editar</a>
                                        </div>
                                    </td>
                                    <td><a class="estado borrar" href="cliente/borrarCliente.php?borrarCliente=<?php echo $id_cliente;?>"> Borrar</a></td>
                                </tr>
                                    
                                <?php
                                                }
                                ?>
                                <?php 
                                    if (isset($_GET['borrarCliente'])) {
                                        include('cliente/borrarCliente.php');
                                    }
                            ?>
                        </tbody>
                    </Table>
                </div>
                <!--Lista de client's
                <div class="clientesRt">
                    <div class="CabeList">
                        <h2>Clientes Recientes</h2>
                    </div> 

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/img1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br><span>Baez</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/img2.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Pedro <br><span>Baez</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/img3.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Marco <br><span>Torres</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/img4.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Maria <br><span>Baez</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/img5.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Josefina <br><span>Lopez</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/img6.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br><span>Martinez</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/img7.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Rosa <br><span>Lopez</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/img7.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Karen <br><span>Torrez</span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="img/img8.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Josefina <br><span>Lopez</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>-->
            </div>

            <!-----FORMULARIO------>
            <div class="formulario">
                <div class="modal modal-close">
                    <div class="form-content">
                        <div class="titulo">
                            <h2>Crear Clientes</h2>
                            <p class="close">X</p>
                        </div>
                    </div>
                    <form action="cliente/addCliente.php" class="formulario-contenido" name="formulario-contenido" id="formulario" method="POST">

                            <!----------------------GRUPO CODIGO----------->
                            <div class="grupo-formulario" id="grupo_codigo">        
                                <span>Codigo Clientes:</span>
                                <input type="number" class="formulario__input" id="id_cliente" name="id_cliente" placeholder="Codigo Clientes" readonly>
                            </div>

                            <!----------------------GRUPO NOMBRE----------->
                            <div class="grupo-formulario" id="grupo_nombre">        
                                <span>Nombre Clientes:</span>
                                <input type="text" class="formulario__input" id="cliente_nombre" name="cliente_nombre" placeholder="Nombre Clientes">
                                <p>Digite el nombre del cliente.</p>
                            </div>
                            <!----------------------GRUPO APELLIDO----------->
                            <div class="grupo-formulario" id="grupo_apellido">        
                                <span>NSS:</span>
                                <input type="text" class="formulario__input" id="cliente_nss" name="cliente_nss" placeholder="NSS Clientes">
                                <p>Digite el NSS del Clientes.</p>
                            </div>

                            <!----------------------GRUPO CEDULA----------->
                            <div class="grupo-formulario" id="grupo_cedula">        
                                <span>Cedula:</span>
                                <input type="text" class="formulario__input" id="cliente_cedula" name="cliente_cedula" placeholder="Cedula">
                                <p>Digite la cedula del cliente.</p>
                            </div>

                            <div class="grupo-formulario" id="grupo_fecha-nacimiento">        
                                <span>Fecha Nacimiento Cliente:</span>
                                <input type="date" class="formulario__input" id="cliente_fechanacimiento" name="cliente_fechanacimiento" placeholder="Fecha Del Cliente">
                            </div>

                            <!----------------------GRUPO Dependiente----------->
                            <div class="grupo-formulario" id="grupo_dependiente">        
                                <span>Dependiente:</span>
                                <input type="text" class="formulario__input" id="cliente_dependiente" name="cliente_dependiente" placeholder="Dependiente">
                                <p>Digite el nombre dependiente del cliente.</p>
                            </div>

                            <!----------------------GRUPO PROMOTOR----------->
                            <div class="grupo-formulario" id="grupo_promotor">        
                                <span>Promotor:</span>
                                <input type="text" class="formulario__input" id="cliente_promotor" name="cliente_promotor" placeholder="Promotor">
                                <p>Digite el nombre del promotor.</p>
                            </div>

                            <div class="grupo-combobox" id="grupo_empresa">
                                <span>Empresa:</span>
                                <select class="" name="id_pais" id="id_pais">
                                    <?php foreach ($datosPais as $pais) {
                                        $c_pais  = $pais['id_pais'];
                                        $n_pais  = $pais['pais_nombre'];
                                    ?>
                                        <option value="<?php echo $c_pais;?>"><?php echo $n_pais;?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="grupo-formulario" id="grupo_costo">        
                                <span>Precio De Costo Del Cliente:</span>
                                <input type="number" class="formulario__input" id="cliente_costo" name="cliente_costo" placeholder="Precio De Costo Del Cliente">
                            </div>

                            <div class="grupo-formulario" id="grupo_ventas">        
                                <span>Precio De Ventas Del Cliente:</span>
                                <input type="number" class="formulario__input" id="cliente_ventas" name="cliente_ventas" placeholder="Precio De Ventas Del Cliente">
                            </div>

                            <div class="grupo-formulario" id="grupo_pagos">        
                                <span>Pago Del Cliente:</span>
                                <input type="number" class="formulario__input" id="cliente_pago" name="cliente_pago" placeholder="Pago Del Cliente">
                            </div>

                            <div class="grupo-formulario" id="grupo_ganancia">        
                                <span>Ganancia Del Cliente:</span>
                                <input type="number" class="formulario__input" id="cliente_ganancia" name="cliente_ganancia" placeholder="Ganancia Del Cliente">
                            </div>

                            <!----------------------GRUPO DIRECCION----------->
                            <div class="grupo-formulario" id="grupo_direccion">        
                                <span>Dirección:</span>
                                <input type="text" class="formulario__input" id="cliente_direccion" name="cliente_direccion" placeholder="Dirección">
                                <p>Digite la dirección del cliente.</p>
                            </div>
                            

                            <div class="grupo-combobox" id="grupo_pais">
                                <span>Pais</span>
                                <select class="" name="id_pais" id="id_pais">
                                    <?php foreach ($datosPais as $pais) {
                                        $c_pais  = $pais['id_pais'];
                                        $n_pais  = $pais['pais_nombre'];
                                    ?>
                                        <option value="<?php echo $c_pais;?>"><?php echo $n_pais;?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            

                            <div class="grupo-combobox" id="grupo_cargo">
                                <span>Estado</span>
                                    <select class="" name="cliente_estado" id="cliente_estado">
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
    <script src="cliente/modalCliente.js"></script>
</body>
</html>


<!---------------------------------------AGREGAR-------------------------------
<?php  /*    
    if(isset($_POST['registrarse'])){
        $id_cliente              =$_POST['id_cliente'];
        $cliente_nombre          =$_POST['cliente_nombre'];
        $cliente_apellido        =$_POST['cliente_apellido'];
        $cliente_sexo            =$_POST['cliente_sexo'];
        $cliente_edad            =$_POST['cliente_edad'];
        $cliente_telefono        =$_POST['cliente_telefono'];
        $cliente_celular         =$_POST['cliente_celular'];
        $cliente_cedula          =$_POST['cliente_cedula'];
        $cliente_direccion       =$_POST['cliente_direccion'];
        $cliente_estado_civil    =$_POST['cliente_estado_civil'];
        $cliente_correo          =$_POST['cliente_correo'];
        $cliente_identidad       =$_POST['cliente_identidad'];
        $cliente_fechanacimiento =$_POST['cliente_fechanacimiento'];
        $fecha = getdate();
        $cliente_pais            =$_POST['cliente_pais'];
        $cliente_provincia       =$_POST['cliente_provincia'];
        $cliente_ciudad          =$_POST['cliente_ciudad'];
        $cliente_barrio          =$_POST['cliente_barrio'];
        $cliente_estado          =$_POST['cliente_estado'];
        $cliente_credito         =$_POST['cliente_credito'];

        try {
            if ($cliente_nombre =="" || $cliente_apellido == "" || $cliente_sexo == "" ||  $cliente_telefono =="" || $cliente_direccion == "" || $cliente_cedula == "" || $cliente_estado =="") {
                echo "<div class= 'formulario__mensaje-activo' id ='formulario__mensaje'>
                <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>";
            }else {
                echo "<div class= 'formulario__mensaje' id ='formulario__mensaje'>
                <p ><ion-icon name='warning-outline'></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>";

                    $insertCliente = $conexion->prepare("INSERT into t_cliente values 
                    ('$id','$cliente_nombre','$cliente_apellido','$cliente_sexo','$cliente_edad','$cliente_telefono','$cliente_celular','$cliente_cedula','$cliente_direccion',
                    '$cliente_correo','$cliente_fechanacimiento','$fecha','$cliente_pais','$cliente_provincia','$cliente_barrio','$cliente_estado','$cliente_credito')");
                    $insertCliente ->execute();

                    if(!$insertCliente){
                    echo"Error En la linea de sql";
                    }
                    else {
                        echo"<script>window.open('clientes.php')</script>";
                        Header("Location: clientes.php");
                    }
                }
        } catch (PDOException $e) {
            echo "Error".$e;
        }
    }  */
?>
