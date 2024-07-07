

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../css/login.css">

    <!---Alert----->
    <link rel="stylesheet" href="../plugins/sweetalert2.min.css">
</head>
<body>
    <section class="">
        <!-----BANNER MENU---->
        <div class="banner">
            <div class="cerra">
                <a href="#" class="logo">Logo</a>
            </div>
        </div>

        <div class="formulario">
            <form action="" class="inscribirse formulario-contenido" id="formulario-Ventas" method="POST">
                <div class="titulo">
                    <h2>Inscribirse</h2>
                </div>
                <!-------------------formulario--------------->
                <!----------------------GRUPO NOMBRE----------->
                <div class="grupo-formulario" id="grupo_nombre">
                    <input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="Usuarios">
                    <p  class="formulario__input-error"> El nombre no debe tener numeros ni digitos. </p>
                </div>
                <div class="grupo-formulario" id="grupo_contraseña">
                    <input type="password" class="formulario__input" name="password" id="password" placeholder="Contraseña">
                    <p  class= "formulario__input-error" > La constraseña tiene que ser de 4 a 12 dígitos. </p>
                </div>
    
                <div class= "formulario__mensaje" id ="formulario__mensaje">
                    <p><ion-icon name="warning-outline"></ion-icon><b> Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>
    
                <div class="grupo-formulario boton">
                    <button class="btn-enviar" type="submit" id="btn-enviar" value="registrarse">Enviar</button>
                    <p class = "formulario__mensaje-exito" id= "formulario__mensaje-exito"> Formulario enviado exitosamente! </p>
                </div>
                
            </form>
        </div>
    </section>
    
    <!------------Ionics------------------>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="../plugins/jquery-3.3.1.min.js"></script>
    <script src="plugins/jquery-3.6.0.min.js"></script>
    <script src="../plugins/popper.min.js"></script>   

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../plugins/sweetalert2.all.min.js"></script>   
    <script src="codigo.js"></script>
</body>
</html>