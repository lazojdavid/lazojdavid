


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Formulario2.css">
</head>

<body background="../img/fondo.jpg">

    <form action="../modelo/registro.php" class="login" method="post">
        <!-- PERMITE ORGANIAR EN GRUPOS LOS CAMPOS DE UN FORMULARIO -->

        <?php if(!empty($mensaje)):?>
        <p><?= $mensaje ?></p>
        <?php endif; ?>
        
        <h1>REGISTRATE </h1>

        <label>Usuario: </label>
        <br>
        <input type="text" class="form-control" name="Usuario" id="Usuario" placeholder="Ingrese su Usuario">
        <br><br>
        <label>Password:</label>
        <br>
        <input type="password" class="form-control" name="passwords" id="password" placeholder="Ingrese su Clave">
        <br><br>
        <label>Email: </label>
        <br>
        <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su Correo">
        <br><br>
        <label>Fecha Nacimiento: </label>
        <br>
        <input type="date" class="form-control" name="date" id="date">
        <p class="text-center">

            <input type="submit" value="REGISTRATE " class="button" name="registro"> 


        <p> Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad</p>
        <p>¿Ya tienes cuentas? <a href="../vista/Formulario1.php"> Iniciar Sesion </a></p>
        </p>




    </form>

</body>

</html>