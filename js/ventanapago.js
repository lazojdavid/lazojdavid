function boton() {
    var boton=document.getElementById("audio");
    var f=document.getElementById("f");
    var p=document.getElementById("p");
    if (f.classList.contains("modo-activado")) {
          f.classList.add("modo-desactivado");
          f.classList.remove("modo-activado");
          p.classList.add("recibo-activado");
          p.classList.remove("recibo-desactivado");
          boton.play();
          boton.loop();
    }
}