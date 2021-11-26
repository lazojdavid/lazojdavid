<?php

include('../modelo/database.php');



if(isset($_POST['registro'])){


    if(strlen($_POST['Usuario'])>=1 && strlen($_POST['passwords'])>=1  && strlen($_POST['email'])>=1  && strlen($_POST['date'])>=1){

        $Usuario=$_POST['Usuario'];
        $passwords=$_POST['passwords'];
        $email=$_POST['email'];
        $date=$_POST['date'];
    
        $consulta= "INSERT INTO users (Usuario,passwords,email,nacimiento) VALUES ('$Usuario','$passwords','$email','$date')";
        
        $ejecutar=mysqli_query($conexion,$consulta);
    
        if($ejecutar){
            
            
            echo '                    
             <script>                    
                  alert("DATOS REGISTRADOS CORRECTAMENTE");  
              
            </script>     
              ';
              include('../vista/Formulario1.php'); 
        }else{
            echo '                    
            <script>                    
                 alert("DATOS NO REGISTRADOS");  
             
           </script>     
             ';
             include('../vista/Formulario2.php'); 
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