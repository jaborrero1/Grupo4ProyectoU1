<?php
//AQUI MISMO
require_once 'conexion.php';
//controlar si se han enviado datos por el POST


if($_SERVER['REQUEST_METHOD']=='POST'){
    //validar si se envian todo los datos
    if(isset($_POST['nombre']) && isset($_POST['apellido']) && 
    isset($_POST['cedula'] ) && isset($_POST['direccion'])  && isset($_POST['email'])
    && isset($_POST['provincia'])&& isset($_POST['ciudad'])&& isset($_POST['asunto'])
    && isset($_POST['comentario'])&& isset($_POST['telefono'])){

        $query= "INSERT INTO contacto ( nombreconta, apellidoconta, cedulaconta, direccionconta, emailconta, provinciaconta, ciudadconta, asuntoconta, comentarioasunto, telefonoconta) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        //PREPARAR LA SENTENCIA
        if($stmt = $conn->prepare($query)){
            //si se realiza la consulta con exito hacer esto
            //ENVIAR LOS DATOS HACIENDO UN BINDING
            //van seis s porque van a ir seis string
            $stmt-> bind_param('ssssssssss', $_POST['nombre'], $_POST['apellido'], $_POST['cedula'], $_POST['direccion'], $_POST['email'], $_POST['provincia'], $_POST['ciudad'], $_POST['asunto'], 
            $_POST['comentario'], $_POST['telefono']);
            //EJECUTAR LA SENTENCIA
            if($stmt-> execute()){
                header("location: contacto.php");
                exit();
            }else{
                echo "Error!!! no hay sistema";
            }
            //CERRAR LA SENTENCIA O STMT
            $stmt->close();
        }
    }
    $conn->close(); //CERRAR LA CONEXION
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos </title>
    <link rel="stylesheet" href="stylee.css">
</head>

<body class="fondo">
   
    <header class="header-area">
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <nav class="classy-navbar justify-content-between" id="alimeNav">
                        <div class="classy-menu">
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="./index.html">Inicio</a></li>
                                    <li><a href="./catalogo.php">Catálogo</a></li>
                                    <li><a href="./compras.php">Compras</a></li>
                                    <li><a href="./empresa.html">Quienes Somos</a></li>
                                    <li class="active"><a href="./contacto.php">contáctanos </a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>




    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">

            <div class="single-welcome-slidea bg-img bg-overlay"
                style="background-image: url(img/bg-img/electrodomesticos.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">

                        <div class="col-12 col-lg-8 col-xl-9">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInUp" data-delay="100ms">Contáctanos</h2>
                                <p data-animation="bounceInUp" data-delay="500ms">Encuentra aquí los mejores electrodomesticos para tu hogar</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-welcome-slidea bg-img bg-overlay"
                style="background-image: url(img/electro.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">

                        <div class="col-12 col-lg-8 col-xl-9">
                            <div class="welcome-text">
                               <h2 data-animation="bounceInUp" data-delay="100ms">¿Quiénes <br> Somos?</h2>
                                <p data-animation="bounceInUp" data-delay="500ms">Encuentra aquí los mejores electrodomesticos para tu hogar</p>
                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <br>
     <br>
     
                      <div class="row justify-content-center">
                          <div class="col-4">
                          <div class="estilo">
                        <h1>
                         Déjanos un mensaje
                        </h1>
                        <p>Para ponerse en contacto con nosotros, favor llenar el<br>
                             siguiente formulario y presionar enviar. <br> 
                             Pronto te daremos una respuesta a tu requerimiento.</p>
                         </div>
                          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                                 
                                  <div class="form-group">
                                      <label for="nombre">Nombres</label>
                                      <input type="text" class="form-control" placeholder="Nombres" name="nombre" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="nombre">Apellidos</label>
                                      <input type="text" class="form-control" placeholder="Apellidos" name="apellido" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="pass">Cédula</label>
                                      <input type="text" class="form-control" placeholder="Cédula" name="cedula" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="pass">Dirección</label>
                                      <input type="text" class="form-control" placeholder="Dirección" name="direccion" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="pass">Teléfono</label>
                                      <input type="text" class="form-control" placeholder="Teléfono" name="telefono"
                                      required>
                                  </div>
                                  <div class="form-group">
                                      <label for="pass">Email</label>
                                      <input type="text" class="form-control" placeholder="@correo.com" name="email"
                                      required>
                                  </div>
                                  <div class="form-group">
                                      <label for="pass">Provincia</label>
                                      <input type="text" class="form-control" placeholder="Provincia" name="provincia"
                                      required>
                                  </div>
                                  <div class="form-group">
                                      <label for="pass">Ciudad</label>
                                      <input type="text" class="form-control" placeholder="Ciudad" name="ciudad"
                                      required>
                                  </div>
                                  <div class="form-group">
                                      <label for="pass">Asunto</label>
                                      <input type="text" class="form-control" placeholder="Asunto" name="asunto"
                                      required>
                                  </div>
                                  <div class="form-group">
                                      <label for="pass">Comentario</label>
                                      <input type="text" class="form-control" placeholder="Comentario" name="comentario"
                                      required>
                                  </div>
                                  
                                  <center>
                                      <input type="submit" value ="Enviar" class="btn btn-success mt-5" style="width: 200px;">
                                  </center>
                                 <br>
                                 <br>
                                 <br>
                              </form>
                          </div>
                      </div>
                      




</body>
<script src="js/jquery.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/alime.bundle.js"></script>

<script src="js/default-assets/active.js"></script>

</html>