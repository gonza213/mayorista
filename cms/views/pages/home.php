<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="views/vendors/images/banner-img.png" alt="">
                </div>
                <div class="col-md-8">
                    <h4 class="font-20 weight-500 mb-10">
                        Bienvenido de nuevo <div class="weight-600 font-30 text-blue text-capitalize"><?php echo $_SESSION['nombre'] ?></div>
                    </h4>
                    <p class="font-18 max-width-600">a tu panel de control de Tus Compras Online</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 mb-30">
                <a href="categorias">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data mt-3 p-3">
                                <i class="micon dw dw-list3 text-primary" style="font-size: 35px;"></i>
                            </div>
                            <div class="widget-data">
                                <div class="h4 mb-0 mt-2">Categorias</div>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 mb-30">
                <a href="productos">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data mt-3 p-3">
                                <i class="micon dw dw-box-1 text-success" style="font-size: 35px;"></i>
                            </div>
                            <div class="widget-data">
                                <div class="h4 mb-0 mt-2">Productos</div>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 mb-30">
                <a href="cotizaciones">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data mt-3 p-3">
                                <i class="micon dw dw-invoice text-info" style="font-size: 35px;"></i>
                            </div>
                            <div class="widget-data">
                                <div class="h4 mb-0 mt-2">Cotizaciones</div>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 mb-30">
                <a href="planilla">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data mt-3 p-3">
                                <i class="micon dw dw-file text-danger" style="font-size: 35px;"></i>
                            </div>
                            <div class="widget-data">
                                <div class="h4 mb-0 mt-2">Planilla</div>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <?php include 'modules/footer.php' ?>
    </div>
</div>