<?php


include('../modelo/database.php');

if(isset($_POST['registroPago'])){


    if(strlen($_POST['nomTarjeta'])>=1 && strlen($_POST['nombre'])>=1  && strlen($_POST['apellido'])>=1  && strlen($_POST['numeroTarjeta'])>=1 && strlen($_POST['codSeguridad'])>=1 && strlen($_POST['codPostal'])>=1){

        $nomTarjeta=$_POST['nomTarjeta'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $numeroTarjeta=$_POST['numeroTarjeta'];
        $codSeguridad=$_POST['codSeguridad'];
        $codPostal=$_POST['codPostal'];
        
        $consulta= "INSERT INTO metodopago (nomtarjeta,nombre,apellido,numeroTarjeta,codSeguridad,codPostal) VALUES ('$nomTarjeta','$nombre','$apellido','$numeroTarjeta','$codSeguridad','$codPostal')";
        
        $ejecutar=mysqli_query($conexion,$consulta);
    
        if($ejecutar){
            
            
            echo '                    
             <script>                    
                  alert("DATOS REGISTRADOS CORRECTAMENTE");  
              
            </script>     
              ';
              include('../Inicio.php'); 
        }else{
            echo '                    
            <script>                    
                 alert("DATOS NO REGISTRADOS");  
             
           </script>     
             ';
             include('../vista/ventanaPAGO.php'); 
        }

      
    
    }else{
    
        echo '                    
             <script>                    
                  alert("LLENAR DATOS EN LOS CAMPOS");  
              
            </script>     
              ';

              
    }
    
   
}

?>