<?php
include "include/conecta.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Inicio de sistema | Cherry Tree Soft</title>
</head>
<body>
 <div class="container mt-2">
    <div class= "row justify-content-center mt-5">
        <div class= " col-ms-10 col-md-6 px-2 mt-3">
            <h3 class= "mb-4 text-center mt-3 display-6">inicio de sesion</h3>
        <div class= "row mt-1 text-center">
            <div class= "col container">
                <img src="img/cherry.png.png" alt="">

                 </div>
            </div>
            <div class= "row py-1">
                <div class= "estado" class="alert-succes alert-dismissible fade show">
                    <span> Actualmente tu conexion a internet es estable</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Closes"></button>

                </div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="form-check form-swicht">
                    <input type="checkbox" id="darkswicht" class="form-check-input">

                </div>

            </div>
        </div>
    </div> 
</div>

   <script src= "js/bootstrap.min.js"> </script> 
</body>
</html>