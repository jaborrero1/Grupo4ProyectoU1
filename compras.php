<?php

session_start();
    if(isset($_GET['id_producto']) && is_numeric($_GET['id_producto'])){
        $id_producto = $_GET['id_producto'];
        require 'vendor/autoload.php';
        $productos = new exa\Producto;
        $resultado = $producto->mostrarPorId($id_producto);

        if(!$resultado)
            header('Location: catalogo.php');

        $_SESSION['carrito'] = array(
            'id_producto' => $resultado['id_producto'],
            'imagen' => $resultado['imagen'],
            'Precio' => $resultado['Precio'],
            'cantidad' => 1


        );

        print '<pre>';
        print_r($_SESSION['carrito']);
    }    

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pc Center </title>
    <link rel="stylesheet" href="style.css">
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
                                <li class="active"><a href="./compras.php">Compras</a></li>
                                <li><a href="./InGrupo.html">Integrantes</a></li>
                                <li><a href="./empresa.html">Quienes Somos</a></li>
                            </ul>
                            </div>
                        </div> 
                    </nav>
                </div>
            </div>
        </div>
    </header>
    
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">

          <div class="global">
              <div class="header">
                <div class="espacio">
                      <hr>
                      </hr>
                  </div>
                <strong>
                  <center><FONT SIZE=5 >Método de Pago</FONT></center>
                </strong>
                  <div class="espacio">
                      <hr>
                      </hr>
                  </div>
              </div>
              
              <div class="cont_izq1">
                  <div class="container">
                      <div class="row mt-3" >
                          <div class="col">
                            <strong>
                              <FONT SIZE=4 COLOR=#000000>|Datos de Tarjeta|</FONT>
                              </strong>
                              <form action="">
                                  <div class="form-group">
                                      <label for="tarjeta"></label>
                                      <input  type="text" class="form-control" placeholder="Número de tarjeta" name="numtarjeta" id="numtarjeta">
                                  </div>
                                  <div class="form-group">
                                      <label for="vencimiento"></label>
                                      <input placeholder="Vencimiento" type="date" class="form-control"  name="vencimiento" id="vencimiento">
                                  </div>
                                  <div class="form-group">
                                      <label for="csc"></label>
                                      <input type="text" class="form-control" placeholder="CSC" name="csc" id="csc">
                                  </div>
                                  <div class="cont_izq1">
                                    <strong>
                                      <FONT SIZE=4 COLOR=#000000>Dirección de Facturación</FONT>
                                    </strong>
                                  </div>
                                  <div class="form-group">
                                      <label for="pais"></label>
                                      <select name="pais" id="pais" class="form-control">
                                          <option value="alemania">Alemania</option>
                                          <option value="colombia">Colombia</option>
                                          <option value="dinamarca">Dinamarca</option>
                                          <option value="ecuador">Ecuador</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label for="direc"></label>
                                      <input type="text" class="form-control" placeholder="Calle Principal" name="Calle_pin"
                                          id="dirección">
                                  </div>
                                  <div class="form-group">
                                      <label for="direc"></label>
                                      <input type="text" class="form-control" placeholder="Calle secundaria" name="Calle_sec"
                                          id="dirección">
                                  </div>
                                  <div class="form-group">
                                      <label for="post"></label>
                                      <input type="text" class="form-control" placeholder="Código Postal" name="email"
                                          id="email">
                                  </div>
                                  <div class="form-group">
                                      <label for="pass">Email</label>
                                      <input type="text" class="form-control" placeholder="@correo.com" name="email"
                                          id="email">
                                  </div>
                                  <div class="form-check">
                                      <label class="form-check-label">
                                          <input type="checkbox" name="terminos" id="terminos" class="form-check-input mr-2">
                                          <FONT SIZE=3 COLOR="#597e8d">Acepto términos y condiciones</FONT>
                                      </label>
                                  </div>
                                  <center>
                                      <button type="submit" class="btn btn-primary mt-5">Comprar Ahora</button>
                                  </center>
                                  <div class="espacio">
                                    <hr>
                                    </hr>
                                  </div>
                              </form>
                          </div>
                      </div>
                        <center><script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
                        <div id="paypal-button-container"></div>
                        <script>
                          paypal.Buttons({
                          // Sets up the transaction when a payment button is clicked
                          createOrder: (data, actions) => {
                            return actions.order.create({
                              purchase_units: [{
                                amount: {
                                  value: '77.44' // Can also reference a variable or function
                                }
                              }]
                            });
                          },
                          // Finalize the transaction after payer approval
                          onApprove: (data, actions) => {
                            return actions.order.capture().then(function(orderData) {
                              // Successful capture! For dev/demo purposes:
                              console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                              const transaction = orderData.purchase_units[0].payments.captures[0];
                              alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);  
                            });
                          }
                        }).render('#paypal-button-container');
                      </script></center>
                    </div>
              </div>
        </div>
    </div>

</body>
<script src="js/jquery.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/alime.bundle.js"></script>

<script src="js/default-assets/active.js"></script>

</html>
