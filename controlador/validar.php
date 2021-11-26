<?php

    $usuario=$_POST['Usuario'];
    $password=$_POST['passwords'];
    session_start();

    $_SESSION['Usuario']=$usuario;

    include('../modelo/database.php');

    $consulta="SELECT*FROM users where Usuario='$usuario' and passwords='$password'";

    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){

        header("location:../inicio.php");
    }else{

        ?>
        <?php
            include("../vista/Formulario1.php");
        ?>
        <center>
        <h3> ERROR EN LA AUTOTENFICACION</h3>
        </center>
       

        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);