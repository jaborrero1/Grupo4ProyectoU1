<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio </title>
    <link rel="stylesheet" href="style.css">
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
                                    <li class="active"><a href="../index.html">Inicio</a></li>
                                    <li><a href="#">Catálogo</a></li>
                                    <!--<li><a href="./compras.php">Compras</a></li>-->
                                    <li><a href="#">Quienes Somos</a></li>
                                        <a style="background-color: rgb(207, 252, 7) ;
                                         margin-right: 100px; border-radius: 5px; padding: 5px;"
                                        href="login.php">  Iniciar Sesión  </a>
                                </ul>
                               
                            </div>
                            
                    </nav>
                </div>
            </div>
        </div>
        
    </header>
    <section>
  </div>
  <section class="welcome-area">
        
            
                <div class="container h-100">
                    <div class="row h-100 align-items-center">

                    <div class="contelogin">
     
     <h1 class="titulo">Iniciar Sesión </h1>
     <hr class="border">
 
     <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
       <div class="form-group">
        <input type="text" name="usuario" class="usuario" placeholder="Usuario" >
       </div>
 
       <div class="form-group">
       <input type="password" name="password" class="password_btn" placeholder="Contraseña">
         <a class="submit-btn" onClick="login.submit()">Entrar</a>
       </div>
 
 <?php if(!empty($errores)): ?>
         <div class="error">
           <ul>
             <?php echo $errores; ?>
           </ul>
         </div>
       <?php endif; ?>
     </form>
 
     <p class="texto-registrate">
       ¿ Aun no tienes cuenta ?
       <a href="registrate.php">Regístrate</a>
     </p>
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