  <!-- Start Footer  -->
  <footer>
      <div class="footer-main">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                      <div class="footer-widget">
                          <h4>Nosotros</h4>
                          <p>Somos una Empresa joven, dinámica, y con basta experiencia en venta online de Golosinas, Vinos y Delicatesen.</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                      <div class="footer-top-box">
                          <h3>Boletin informativo</h3>
                          <form class="newsletter-box" method="POST">
                              <div class="form-group">
                                  <input type="hidden" name="nombre2" value="1" />
                                  <input class="" type="email" name="email2" placeholder="Correo electrónico" required />
                                  <i class="fa fa-envelope"></i>
                              </div>
                              <button class="btn hvr-hover" type="submit">Suscribirme</button>
                              <?php

                                $suscribir = new ControllerSolictud();
                                $suscribir->ctrEnviarSuscripcion();

                                ?>
                          </form>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                      <div class="footer-link-contact">
                          <h4>Contacto</h4>
                          <ul>
                              <li>
                                  <p><i class="fas fa-phone-square"></i>Teléfono: <a href="tel:+54 9 11 39441625">+54 9 11 3944 1625</a></p>
                              </li>
                              <li>
                                  <p><i class="fas fa-envelope"></i>Email: <a href="mailto:info@tuscomprasonline.com.ar">info@tuscomprasonline.com.ar</a></p>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- End Footer  -->
  <!-- Start copyright  -->
  <div class="footer-copyright">
      <p class="footer-company">&copy; <script>
              document.write(new Date().getFullYear());
          </script><a href="#"> Tus Compras Online. </a> Desarrollado por:
          <a href="http://www.marketingvirtualweb.com/">Marketing Virtual-Web</a>
      </p>
  </div>
  <!-- End copyright  -->