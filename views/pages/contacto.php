
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contacto</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active"> Contacto </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2 class="text-uppercase">Contáctenos</h2>
                        <p class="text-danger">Campos obligatorios (*)</p>
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" name="idC" value="1">
                                        <input type="text" class="form-control" id="nombreC" name="nombre" placeholder="Nombre (*)" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email (*)" id="emailC" class="form-control" name="email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="asuntoC" name="asunto" placeholder="Asunto (*)" required data-error="Please enter your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="mensajeC" name="mensaje" placeholder="Escribe un mensaje (*)" rows="4" data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" onclick="contactForm()" id="submit" type="submit">Enviar Mensaje</button>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            
                            $contacto = new ControllerSolictud();
                            $contacto-> ctrEnviarContacto();
                            ?>
                        </form>
                    </div>
                </div>
				<div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>Otras vías de contacto</h2>
                        <ul>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Teléfono: <a href="tel:+549111602090">+54 9 11 3160 2090</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">info@tuscomprasonline.com.ar</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

   

