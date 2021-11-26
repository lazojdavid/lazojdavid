
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Formulario1.css">
    


</head>

<body background="img/fondo.jpg">

    <form action="" class="login">
        <!-- PERMITE ORGANIAR EN GRUPOS LOS CAMPOS DE UN FORMULARIO -->
        <h1>LOGIN </h1>
        <label>Usuario: </label>
        <br>
        <input type="text" class="form-control" name="Usuario" id="Usuario" placeholder="Ingrese su Usuario" autocomplete="Usuario" required
        >
        <br><br>
        <label>Password:</label>
        <br>
        <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su Clave" autocomplete="password" required
        >
        <p class="text-center">

            <input type="button" value="LOGIN " class="button" name="entrar">

            </a>

        <p> Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad</p>

        <p>¿No tienes cuenta? <a href="Formulario2.html"> Registrate </a></p>
        </p>
    </form>

</body>

</html>


<?php

if(!empty($_POST['Usuario']) && !empty($_POST['password'])){
    $usu=$_POST['Usuario'];
    $pass=$_POST['password'];

    if($usu=="admin" && $pass=="admin"){
        echo "Ingreso";
        header("Location: inicio.html");
    }else{
       
        echo "Usuario o contraseña incorrecta";
    }

}else{
    
    echo "No hay ni un dato";
}


?>