  <?php

    $categorias = ControllerCategorias::ctrMostrarCategorias();

    if (isset($_COOKIE['TotalCarrito'])) {

        $total =  $_COOKIE['TotalCarrito'];
    } else {

        $total = 0;
    }

    ?>

  <!-- Start Main Top -->
  <div class="main-top">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="right-phone-box">
                      <p><i class="fas fa-phone-square"></i> Teléfono : <a href="#">+54 9 11 3944 1625</a></p>
                  </div>
                  <div class="right-phone-box">
                      <p><i class="fas fa-envelope"></i> Email : <a href="#">info@tuscomprasonline.com.ar</a></p>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="text-slid-box">
                      <div id="offer-box" class="carouselTicker">
                          <ul class="offer-box">
                              <li>
                                  <i class="fab fa-opencart"></i> TIENDA DE GOLOSINAS
                              </li>
                              <li>
                                  <i class="fab fa-opencart"></i> TIENDA DE VINOS
                              </li>
                              <li>
                                  <i class="fab fa-opencart"></i> REALICE SU PEDIDO
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Main Top -->

  <!-- Start Main Top -->
  <header class="main-header">
      <!-- Start Navigation -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
          <div class="container">
              <!-- Start Header Navigation -->
              <div class="navbar-header">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                      <i class="fa fa-bars"></i>
                  </button>
                  <a class="navbar-brand" href="index.html"><img src="views/images/logo.png" class="logo" style="width: 120px" alt=""></a>
              </div>
              <!-- End Header Navigation -->

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="navbar-menu">
                  <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                      <li class="nav-item active"><a class="nav-link" href="index">Home</a></li>
                      <li class="dropdown">
                          <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Categorias</a>
                          <ul class="dropdown-menu">
                              <?php foreach ($categorias as $key => $value) : ?>
                                  <li><a href="index.php?pagina=categorias&id=<?php echo $value['id'] ?>"><?php echo $value['categoria'] ?></a></li>
                              <?php endforeach; ?>
                          </ul>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="contacto">Contacto</a></li>
                  </ul>
              </div>
              <!-- /.navbar-collapse -->

              <!-- Start Atribute Navigation -->
              <div class="attr-nav">
                  <ul>
                      <li class="side-menu">
                          <a style="cursor: pointer" onclick="verCarrito()">
                              <i class="fas fa-clipboard-list" style="font-size: 30px"></i>
                              <p class="text-uppercase"> Mi Lista</p>
                          </a>
                      </li>
                  </ul>
              </div>
              <!-- End Atribute Navigation -->
          </div>
          <!-- Start Side Menu -->
          <div class="side">
              <a href="#" class="close-side"><i class="fa fa-times"></i></a>
              <li class="cart-box">              
                      <ul class="cart-list">
                          <li class="total">
                              <a style="cursor:pointer" onclick="form()" class="btn btn-default hvr-hover btn-cart">Continuar</a>
                              <span class="float-right"><strong>Total</strong>: $ <span id="total"></span> </span>
                          </li>
                      </ul>  
              </li>
          </div>
          <!-- End Side Menu -->
      </nav>
      <!-- End Navigation -->
  </header>
  <!-- End Main Top -->