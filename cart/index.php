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
  <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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
                                <li><a href="./catalogo.html">Catálogo</a></li>
                                <li class="active"><a href="./compras.html">Compras</a></li>
                                <li><a href="./empresa.html">Quienes Somos</a></li>
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

        <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/INICIO.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">

                    <div class="col-12 col-lg-8 col-xl-9">
                        <div class="welcome-text">
                            <h2 data-animation="bounceInDown" data-delay="900ms">Bienvanidos a<br>PCENTER</h2>
                            <p data-animation="bounceInDown" data-delay="500ms">Encuentra aquí los mejores componentes para tu PC</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/INICIO2.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">

                    <div class="col-12 col-lg-8 col-xl-9">
                        <div class="welcome-text">
                            <h2 data-animation="bounceInUp" data-delay="100ms">Bienvanidos a<br>PCENTER</h2>
                            <p data-animation="bounceInUp" data-delay="500ms">Encuentra aquí los mejores componentes para tu PC</p>
                            <div class="hero-btn-group" data-animation="bounceInUp" data-delay="900ms">
                                <a href="#" class="btn alime-btn mb-3 mb-sm-0 mr-4">Registrate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="alime-portfolio-area section-padding-80 clearfix">
    <div class="container-fluid">

    </div>
</div>

  <body>
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
                    <a href="actions.php?action_type=add_item&id=<?=$row['id']?>&product_name=<?=$row['product_name']?>&quantity=1&price=<?=$row['price']?>" class="btn btn-warning btn-style">Agregar al Carrito</a>
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

  </body>
</html>
