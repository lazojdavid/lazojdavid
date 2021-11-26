
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Formulario1.css">
    <link rel="stylesheet" href="../vista/Formulario1.php">


</head>

<body background="../img/fondo.jpg">

        <?php if(!empty($mensaje)):?>
        <p><?= $mensaje ?></p>
        <?php endif; ?>

    <form action="../controlador/validar.php" class="login" method="post">
        <!-- PERMITE ORGANIAR EN GRUPOS LOS CAMPOS DE UN FORMULARIO -->
        <h1>LOGIN </h1>
        <label>Usuario: </label>
        <br>
        <input type="text" class="form-control" name="Usuario" id="Usuario" placeholder="Ingrese su Usuario" autocomplete="Usuario" required
        >
        <br><br>
        <label>Password:</label>
        <br>
        <input type="password" class="form-control" name="passwords" id="password" placeholder="Ingrese su Clave" autocomplete="password" required
        >
        <p class="text-center">

            <!-- a href="Inicio.html"> --> <input type="submit" value="LOGIN " class="button" name="entrar">

            </a>

        <p> Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad</p>

        <p>¿No tienes cuenta? <a href="../vista/Formulario2.php"> Registrate </a></p>
        </p>
    </form>

</body>

</html>



