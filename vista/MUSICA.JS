function activereproduction(value,nombreCancion,tituloAudio) {
  var Audio = document.getElementById("audio");
  Audio.load();
  Audio.src = nombreCancion;
  Audio.controls=true;
  Audio.play();

  var iconoPlay = document.getElementById("iconoPlay"+value);
  var allPlayButtons = document.querySelectorAll(".musica span i")
  var tituloAudioReproductor = document.getElementById("tituloAudioReproductor")
  if(iconoPlay.classList.contains('fa-play')){
    allPlayButtons.forEach(element =>{
      element.classList.remove('fa-pause')
      element.classList.add('fa-play')
    })
  }
  if(iconoPlay.classList.contains('fa-play')){
    iconoPlay.classList.remove('fa-play')
    iconoPlay.classList.add('fa-pause')
  }else{
    iconoPlay.classList.remove('fa-pause')
    iconoPlay.classList.add('fa-play')
    Audio.pause();
  }
  tituloAudioReproductor.innerHTML= tituloAudio
}