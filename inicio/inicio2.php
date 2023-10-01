<?php 
error_reporting(0);
if(isset($_POST['btn'])){
    $UserSistem = "Desarrollo505";
    $PasswordSistem = "CherrySoft";
    $User = $_POST['Usuario'];
    $pass = $_POST['pass'];
    echo "El usuario que ingresaste es: ".$User." y el password es: ".$pass;
    if($UserSistem == $User and $PasswordSistem == $pass){
        $mensaje.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Holy guacamole!</strong> los datos son correctos.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    
    }
    else {
        $mensaje.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Holy guacamole!</strong> los datos son correctos.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Inicio de sistemas | Login</title>
</head>
<body>
    <div class="container">
       
            <div class="justify-content-center">
                <div class="row mt-3 text-center">
                    <div class="col-sm-12 col-md-12 col-lg-12 ">
                        <h1 class="text-center display-6">Login | <span class="text-succes">Inicio de sesión</span></h1>
                        
                    </div>
                </div>
                <div class="row mt-2 justify-content-center">
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <h2 class="text-center text-danger display-6"> <span class="text-danger"></span> Cherry 
                        <span class="text-success"></span>
                        <span class="text-muted"></span>
                    </h2>
                         
                    </div>

                </div>
                <form action=" <?php echo $_SERVER['PHP_SELF'];?>" method="post" autocomplete="off">
            <div class="row mt-3 justify-conetent-center">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <input type="text" name="Usuario" id="Usuario" placeholder="Usuario" class="form-control rounded-pill border-success" >
                </div>
            </div>
            <div class="row mt-3 justify-conetent-center">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <input type="password" name="pass" id="pass" placeholder="password" class="form-control rounded-pill border-success" >
                </div>
            </div>
            <div class="row mt-3 justify-conetent-center">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <input type="submit" name="btn" id="enviar" value="ingresar" class="btn btn-success rounded-pill" >
                </div>
            </div>
            <?php echo $mensaje ?>







            </form>
               

                </div>
            </div>

    </div>


    <script src="js/bootstrap.min.js"></script>
</body>
</html>
