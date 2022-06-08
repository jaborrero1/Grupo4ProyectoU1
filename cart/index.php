<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>

  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilo.css" />
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="stylee.css">
 
    
    <title>Carrito</title>
    <style type="text/css">
      .product-detail {
        padding:5px;
        margin-bottom: 10px;
        background-color: #18cc6d;
      }
      .other-detail {
        text-align: center;
       
      }

      .price {
        font-weight: 600;
        font-size: 20px;
        color: #FFF;
      }

      .product-img {
        height: 200px;
        object-fit: cover;
        width: 100%;
      }
      .price-style {
         background-color: #2d965f;
      }

      .btn-style {
        margin-bottom: 10px;
      }
    </style>

  </head>
  
  <body>
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
                                    <li><a href="../index.html">Inicio</a></li>
                                    <li class="active"><a href="./index.php">Catálogo</a></li>
                                    <li><a href="../compras.php">Compras</a></li>
                                    <li><a href="../Integrantes/InGrupo.html">Integrantes</a></li>
                                    
                                    <li><a href="../empresa.html">Quienes Somos</a></li>
                                    
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
                                <h2 data-animation="bounceInUp" data-delay="100ms">¿Quiénes <br> Somos?</h2>
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




    <div id="shadow">

    </div>
    <h1 class="text-center">Carrito de compras</h1>

   <div class="container">
     <div class="row">
        <div class="col-md-6">
          <div class="row">
            <?php 
            $con = mysqli_connect('localhost','root','','cart');
            $sql = "SELECT * FROM products";
            $query = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($query))
            {
              ?>
            <div class="col-md-6">
               <div class="product-detail">
                  <div class="img-thumbnail">
                    <img class="product-img" src="<?=$row['image']?>">
                  </div>
                  <div class="other-detail">
                    <h4><?=$row['product_name']?></h4>
                    <div class="price-style">
                    <p class="price">$ <?=$row['price']?></p>
                    <a href="actions.php?action_type=add_item&id=<?=$row['id']?>&product_name=<?=$row['product_name']?>
                    &quantity=1&price=<?=$row['price']?>" class="btn btn-warning btn-style">Agregar al Carrito</a>
                    </div>
                  </div>
               </div>
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="col-md-6">
          <h5 class="text-center">Artículos del carrito</h5>
          <?php 
          $Total=0;
          if(isset($_SESSION['cart'])) { ?>
          <table class="table table-bordered">
              <thead>
                 <th>N°</th>
                 <th>Producto</th>
                 <th>Cantidad</th>
                 <th>Precio</th>
                 <th>Opción</th>
              </thead>
              <tbody>
                <?php
                $index =0;
                $i=1;
                foreach($_SESSION['cart'] as $key => $val) {   
                  $totalPrice = $val['quantity'] * $val['price'];
                  $Total = $Total + $totalPrice;
                  ?>            
                <tr>
                   <td><?=$i++?></td> 
                   <td><?=$val['product_name']?></td> 
                   <td><?=$val['quantity']?></td>  
                   <td><?=$totalPrice?></td> 
                   <td><a href="actions.php?action_type=remove_item&index=<?=$key?>">Remove </a></td>
                </tr>
              <?php $index++; } ?>
              <tr>
                <td></td>
                <td></td>
                <td><b>Total</b></td>
                <td><?=$Total?></td>
                <td></td>
              </tr>
              </tbody>

          </table>
        <?php } ?>
        </div>
     </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <footer>
            <div id="footerr">
                
            </div>
        </footer>


        
    <script>
        //Realiza un aislamiento que tiene el DOM que actua solo localmente en los elementos que se han definido
        //Realiza conflictos de manera silenciosa 
        const shadow = document.querySelector('#shadow');
        //Crea un shadow  sobre el elementos, especificando el modo de encapsulado que sean accesibles los elementos de la raiz des javascript fuera de la raiz.
        shadow.attachShadow({ mode: 'open' });
        //Devuelve una referencia del arbil DOM dentro de la etiqueta div shadow
        shadow.shadowRoot.innerHTML = `
       <style>
        .texto-justificado{
        text-align: center;

        }
       
      
        </style>
        <br>
        <div class="texto-justificado">
       
        </div> `;

          //Realiza un aislamiento que tiene el DOM que actua solo localmente en los elementos que se han definido
        //Realiza conflictos de manera silenciosa 
        const cuadros = document.querySelector('#footerr');
        //Crea un shadow  sobre el elementos, especificando el modo de encapsulado que sean accesibles los elementos de la raiz des javascript fuera de la raiz.
        cuadros.attachShadow({ mode: 'open' });
        //Devuelve una referencia del arbil DOM dentro de la etiqueta div shadow
        cuadros.shadowRoot.innerHTML = `
        <style>
        .texto-centrado{
        text-align: center;
         
        }
      
       
        table{
            text-align: center;
            margin: auto;
        }
        .pie p{
            color: #ffffff;
        }
        .pie p:hover{
            color:#F0E536
        }
        td{
            
            border-collapse: separate;
            border-spacing: 70px 20px;
            padding:30px; 
        }
        td.fondo{
        transition: transform .2s; 
        }
 
        td.fondo:hover {
        transform: scale(0.8); 
        }
        .footer{
            color: #ffffff;
            background-color: #171717bf;
        }
        
        

        </style>
        <div class="texto-centrado">
            <div class="tabla">  
       
        </div>
        <div class="footer">
            <table>
        <td class="pie">
        <h3>
            Sucursal Quito
        </h3>
       <p><b> Teléfonos:</b> (02) 274-6845<br></p>
       <p><b> Dirección:</b> Av. Naciones Unidas E9-112 y Av. República del Salvador.</p>

        <br>
      <h3>
            Sucursal Guayaquil
        </h3>
        <p><b> Teléfonos:</b>  (04) 252-6690<br></p>
        <p><b> Dirección:</b> Cdla. Kennedy Norte, Calle José Castillo y Miguel Ángel Granados.</p>
        </td>
        <td class="pie">
        <h3 align="center">
            Servicio al cliente 
        </h3>
        <p>Contáctanos</p>
        <p>¿Cómo comprar por internet?</p>
        <p>Formas de pago</p>
        <p>Términos de uso y privacidad</p>
        <p>Términos de promociones</p>
        <p>Garantía, cambios y devoluciones</p>
        </td>
        <td class="pie">
            <h3 align="center">
            Dirección 
        </h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31916.647405746724!2d-79.44088760700238!3d-0.6250268355279112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902b2b1fc3cfd599%3A0x93006998de3e1a2e!2sRecinto%20Valdez!5e0!3m2!1ses-419!2sec!4v1654461337217!5m2!1ses-419!2sec" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </td>
    </table> 
        </div>
        </div>
        `
        ;

    </script>

  </body>
  <script src="js/jquery.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/alime.bundle.js"></script>

<script src="js/default-assets/active.js"></script>
</html>
