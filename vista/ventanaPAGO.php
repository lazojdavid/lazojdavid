<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ventanaPAGO.css">
    <script src="../js/ventanapago.js" type="text/javascript"></script>
    <title>Document</title>
</head>
<body background="img/BACKGROUNPAGO.gif">
<div class="inicio">
    <a href="Nosotros.php"><i class="fas fa-home"></i>INICIO</a>
</div>    
    <H1>uso de tarjeta credito</H1>
    <form class="modo-activado" id="f">
        <fieldset>
        <label>Ingrese su tarjeta</label><hr>
        <input type="radio" name="ec" id="#mastercard"><img src="img/MasterCard.png" alt="">
        <input type="radio" name="ec" id="#BBVA"><img src="img/BBVA.jpg" alt="">
        <input type="radio" name="ec" id="#scotiabank"><img src="img/scotiabank.png" alt="">
        <br>
        <div class="nombre">
        Ingrese su nombre: <input type="text">
        </div>
        <div class="apellido">
        Ingrese su apellido:<input type="text">
        </div>
        <div class="numero-de-tarjeta">
            numero de tarjeta: <input type="text">
            </div>
            <div class="codigo-seguridad">
            codigo seguridad:<input type="text">
            </div>
            <div class="codigo-postal">
                codigo postal:<input type="text">
                </div>
            <div class="boton-pago"><!--  
            <input type="button" value="PAGAR" id="boton" onclick="boton();">-->
            <a href="#" class="pagar" onclick="boton();">PAGAR</a>
            </div>        
        </fieldset>
        
    </form>
    <div class="recibo-desactivado" id="p">
        <p>muchas gracias por registrarte</p>
        <img class="imagenrecibo" src="img/bully-maguire-dance.gif" alt="">
        <audio id="audio" src="musica/dinero.mp3"></audio>
    </div>
   
</body>
</html>
