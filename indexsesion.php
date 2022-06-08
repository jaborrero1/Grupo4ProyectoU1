<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio </title>
    <link rel="stylesheet" href="php/style.css">
</head>
<body>
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
                                    <li class="active"><a href="index.html">Inicio</a></li>
                                    <li><a href="cart/index.php">Catálogo</a></li>
                                    <!--<li><a href="./compras.php">Compras</a></li>-->
                                    <li><a href="empresa.html">Quienes Somos</a></li>
                                        <a style="background-color:#d37b7b ;
                                         margin-right: 100px; border-radius: 5px; padding: 5px;"
                                        href="php/cerrar.php">  Cerrar Sesión </a>
                                </ul>
                               
                            </div>
                            
                    </nav>
                </div>
            </div>
        </div>
        
    </header>
    
</div>
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">

            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/electrodomesticos1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">

                        <div class="col-12 col-lg-8 col-xl-9">
                            <div class="welcome-text">
                           

                                
                                <?php session_start(); if($_SESSION['usuario']) {echo '<h2 data-animation="bounceInUp" data-delay="100ms" >BIENVENIDO USUARIO ' .$_SESSION['usuario'].'</h2>';}
?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/electrodomesticos.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">

                        <div class="col-12 col-lg-8 col-xl-9">
                            <div class="welcome-text">
                            <?php  if($_SESSION['usuario']) {echo '<h2 data-animation="bounceInUp" data-delay="100ms" >BIENVENIDO  ' .$_SESSION['usuario'].'</h2>';}
?>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>
<script src="js/jquery.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/alime.bundle.js"></script>

<script src="js/default-assets/active.js"></script>

</html>
