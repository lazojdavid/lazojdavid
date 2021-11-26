<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pseudoclases</title>
  <link rel="stylesheet" href="Musica.css">
  <link rel="stylesheet" href="Musicaplay.CSS">  
  <script src="MUSICA.JS" type="text/javascript"></script>
  <link rel="stylesheet" href="footer.css">
  <script src="https://kit.fontawesome.com/1275d54f73.js" crossorigin="anonymous"></script>
  

</head>
<body  background="img/fondo.jpg" bgcolor="black" class="cuerpo">
  <i class="fas fa-bars"></i><!-- nuevo -->
  <ul class="menu"  align="center">
      <span>
      <li class="menu-item-boton"><a href="#" class="menu-bot" onclick="clicker"><i class="fas fa-bars"></i></a></li> <!-- nuevo --> 
      <div class="menu-option">  <!-- nuevo -->
      <li class="menu-item"><a href="Inicio.php">Inicio</a></li>
      <li class="menu-item"><a href="Nosotros.php">Nosotros</a></li>
      <li class="menu-item"><a href="Equipo.php">Equipo</a></li>
      <li class="menu-item"><a href="Musica.php">Música</a></li>
      <li class="menu-item"><a href="Artistas.php">Artistas</a></li>
      <li class="menu-item"><a href="Formulario1.php">Ingresar</a></li>
      <li class="menu-item"><a href="Formulario1.php">Cerrar Sesión</a></li>
      </div><!-- nuevo -->
      <li class="menu-item-Search">
          <input list="list_music" placeholder="Search">
          <datalist id="list_music">
              <option value="rock"></option>
              <option value="electro"></option>
              <option value="salsa"></option>
              <option value="bachata"></option>
              <option value="baladas"></option>
              <option value="reggaeton"HOLA AMIGO :)></option>
              <option value="reggae"></option>
              <option value="cumbia"></option>
              <option value="rap"></option>
              <option value="merengue"></option>
          </datalist>
      </li>
  </ul>
  
 <!-- playlist musica -->
 <div class="list-music">
  <!--  -->
  <div class="musica">
    <hr width="100%" height="2px">
    <div class="icono-musica">
      <span id="cancionPlay1" onclick="activereproduction(1,'musica/Phillip Phillips - Gone, Gone, Gone.mp3','gone gone gone - phillips');" name="gone gone gone - phillips"><i id="iconoPlay1"  class="fas fa-play"></i></span>
     </div>
    <div class="nombre-musica">
      <p>gone gone gone - phillips</p>
     </div>
     <div class="imagen-musica">
      <img src="img/Gone gone gone.jpg" alt="">  
   </div> 
    <hr width="100%" height="2px">
  </div>
  <!--  -->



  <div class="musica">
    <hr width="100%" height="2px">
    <div class="icono-musica">
      <span id="cancionPlay2" onclick="activereproduction(2,'musica/Im Ready.mp3','Im ready - Jaden');" name="I'm ready - Jaden"><i id="iconoPlay2" class="fas fa-play"></i></span>
     </div>
    <div class="nombre-musica">
      <p>I'm ready - Jaden</p>
     </div>
     <div class="imagen-musica">
      <img src="img/albumIMready.jpg" alt="">  
     </div>
    <hr width="100%" height="2px">
  </div>



  <!--  -->
  <div class="musica">
    <hr width="100%" height="2px">
    <div class="icono-musica">
      <span id="cancionPlay3" onclick="activereproduction(3,'musica/Im Ready.mp3','Si veo a tu Mamá-bad bunny');" name="Si veo a tu Mamá-bad bunny"><i id="iconoPlay3" class="fas fa-play"></i></span>
     </div>
    <div class="nombre-musica">
      <p>Si veo a tu Mamá-bad bunny</p>
     </div>
     <div class="imagen-musica">
      <img src="img/bad bunny.jpg" alt="">  
     </div>
    <hr width="100%" height="2px">
  </div>
  <!--  -->
  <div class="musica">
    <hr width="100%" height="2px">
    <div class="icono-musica">
      <span id="cancionPlay4" onclick="activereproduction(4,'musica/Im Ready.mp3','Hurt-Jhonny cash');" name="Hurt-Jhonny cash"><i id="iconoPlay4" class="fas fa-play"></i></span>
     </div>
    <div class="nombre-musica">
      <p>Hurt-Jhonny cash</p>
     </div>
     <div class="imagen-musica">
      <img src="img/Hurt.jpg" alt="">  
     </div>
    <hr width="100%" height="2px">
  </div>
  <div class="musica">
    <hr width="100%" height="2px">
    <div class="icono-musica">
      <span href="#bot" id="cancionPlay5" onclick="activereproduction(5,'musica/Warbly Jets - Alive.mp3','Alive-Warbly Jets');" name="Alive-Warbly Jets"><i id="iconoPlay5" class="fas fa-play"></i></span>
     </div>
    <div class="nombre-musica">
      <p>Alive-Warbly Jets</p>
     </div>
     <div class="imagen-musica">
      <img src="img/Warbly Jets.jpg" alt="">  
     </div>
    <hr width="100%" height="2px">
  </div>
  <div class="musica">
    <hr width="100%" height="2px">
    <div class="icono-musica">
      <span href="#" id="cancionPlay6" onclick="activereproduction(6,'musica/Im Ready.mp3','Mienteme-TINI, Maria Becerra');"" name="Mienteme-TINI, Maria Becerra"><i id="iconoPlay6" class="fas fa-play"></i></span>
     </div>
    <div class="nombre-musica">
      <p> Mienteme-TINI, Maria Becerra</p>
     </div>
    <div class="imagen-musica">
      <img src="img/maria Becerra,TINI.jpg" alt="">  
     </div>
    <hr width="100%" height="2px">
  </div>
  <div class="musica">
    <hr width="100%" height="2px">
    <div class="icono-musica">
      <span href="#" id="cancionPlay7" onclick="activereproduction(7,'musica/Way Down We Go - Kaleo.mp3','Way down We Go-KALEO');" name="Way down We Go-KALEO"><i id="iconoPlay7" class="fas fa-play"></i></span>
     </div>
    <div class="nombre-musica">
      <p>Way down We Go-KALEO</p>
  </div>
  <div class="imagen-musica">
    <img src="img/KALEO.jpg" alt="">  
   </div>
  <hr width="100%" height="2px">
</div>
  <div class="musica">
    <hr width="100%" height="2px">
    <div class="icono-musica">
      <span href="#" id="cancionPlay8" onclick="activereproduction(8,'musica/Im Ready.mp3','IDFC-blackbear');" name="IDFC-blackbear"><i id="iconoPlay8" class="fas fa-play"></i></span>
     </div>
    <div class="nombre-musica">
      <p>IDFC-blackbear</p>
     </div>
     <div class="imagen-musica">
      <img src="img/idfc.jpg" alt="">  
     </div>
    <hr width="100%" height="2px">
  </div>
</div>
<div class="reproductoredit"></div>
<p id="tituloAudioReproductor"></p>
<audio class="AUDIO" id="audio"></audio>
</div>
 <!-- CHAT BOT -->
 <div class="chatBot" style="display: flex;">
  <script SameSite="None; Secure" src="https://static.landbot.io/landbot-3/landbot-3.0.0.js"></script>
<script>
var myLandbot = new Landbot.Livechat({
  configUrl: 'https://chats.landbot.io/v3/H-1014390-MS2RFRPY0EGK8ZY9/index.json',
});
</script>
</div>

</body>
<br>
<br>
<footer>
  <div class="contfooall">
      <div class="contfo">
          <div class="col1">
              <h5>Información de la Empresa</h5>
              <p>Esta compañia se dedica a la reproducion de diversas <br>
                  musicas de nivel nacional e internacional, esperamos <br>
                  que se sienta comodo y tranquilo en su transcurso.</p>
              <img src="img/libro_de_reclamaciones.jpg" alt="">
          </div>
          <div class="col2">
              <h5>PAMIND</h5>
              <div class="row">
                  <img src="img/facebook-veterinaria.png" alt="">
                  <label>Siguenos en Facebook</label>
              </div>
              <div class="row">
                  <img src="img/tw.png" alt="">
                  <label>Siguenos en Twitter</label>
              </div>
              <div class="row">
                  <img src="img/ins.png" alt="">
                  <label>Siguenos en Instagram</label>
              </div>
              <div class="row">
                  <img src="img/g+.png" alt="">
                  <label>Siguenos en Google Plus</label>
              </div>
              <div class="row">
                  <img src="img/pin.png" alt="">
                  <label>Siguenos en Pinteres</label>
              </div>
          </div>
          <div class="col3">
              <h5>Atención por correo</h5>
              <div class="row2">
                  <img src="img/correo.gif" alt="">
                  <label>pamind@gmail.com</label>
              </div><br>
              <h5>Atención por WhatsApp las 24hrs</h5>
              <div class="row3">
                  <img src="img/wsp.png" alt="">
                  <label>981267265</label>
              </div>
              <!-- <div class="row4">
                  <img src="QUIENSO/visa.png" alt="">
                  <img src="QUIENSO/Master-Card.png" alt="">
                  <img src="QUIENSO/aex.png" alt="">
              </div> -->
          </div>

      </div><br>
      <div class="cnt-fot">
          <div class="contfotter">
              <div class="copyright">
                  <p>&#169; 2021 Estás reproduciendo musica en PAMIND.com.pe</p>
              </div>
              <!-- <div class="term">
                  <a href="">Venta Empresa</a> |
                  <a href="quienesSomos.html">¿Quiénes Somos?</a> |
                  <a href="nosotros.html">Preguntas frecuentes</a>
              </div> -->
          </div>
      </div>
  </div>
</footer>
</script>

</html>