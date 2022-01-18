<?php

$operacion = mt_rand(1000, 9999);

?>

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-uppercase">Formulario Carrito <i class="fa fa-shopping-cart"></i> </h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active"> Carrito </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Contact Us  -->
<form  method="POST">
<div class="contact-box-main">
    <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-12">
                    <div class="contact-form-right">
                        <h2>Complete Formulario</h2>
                        <p class="text-danger">Campos obligatorios (*)</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nombreForm"  name="nombre" placeholder="Nombre Completo (*)" required >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Correo electrónico (*)" id="emailForm" class="form-control" name="email" required >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="tel" id="telForm" placeholder="Teléfono (*)" required >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="dni" id="dniForm"  placeholder="DNI (*)"  required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="domicilio" id="domForm" placeholder="Domicilio (*)"  required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="ciudad" id="ciudadForm" placeholder="Ciudad (*)" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="provincia" id="provinciaForm" placeholder="Provincia (*)"  required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <input type="hidden" id="tuLista" name="lista">
                            <input type="hidden" id="totalCarrito" name="total">
                            <input type="hidden" name="operacion" value="<?php echo $operacion ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12 mt-3">
                    <div class="card">
                        <div class="card-header" style="background: #b0b435;">
                            <h3 class="text-uppercase text-white">Mi Lista</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="tuLista">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h2 class="text-right text-uppercase">Total: <b style="color: #b0b435">$<span id="totalLista"></span></b></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 p-3">
                    <button type="submit" onclick="submitForm()" class="btn btn-secondary float-right btn-lg"><i class="fa fa-shopping-cart"></i> COTIZAR</button>
                </div>
            </div>
            <?php

            $solicitud = new ControllerSolictud();
            $solicitud-> ctrEnviarSolicitud();


            ?>
    </div>
</div>
</form>
<!-- End Cart -->