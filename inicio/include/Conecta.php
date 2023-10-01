<?php 
$host = "localhost";       //los datos del hosting 
$user = "root";        //usuario del hosting
$password = "";        // es igual al password del hosting 
$DB = "ejemplo";       //La base de datos al conectar 
$conecta=mysqli_connect($host,$user,$password,$DB);  //PASAR PARAMETRO 
if($conecta->connect_errno){
    die('Error al conectar al Base de Datos'.$conecta->connect_errno);


}

?>
