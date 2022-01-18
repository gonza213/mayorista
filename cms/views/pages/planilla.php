<?php
$planilla = ControllerPlanilla::ctrMostrarPlanilla();
?>
<?php if ($_SESSION["rol"] == "administrador") : ?>
    <div class="main-container">

        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Planilla de descarga</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="inicio">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Planilla</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <!-- <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#Medium-modal" type="button">
                                    Nueva Categoría
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Simple Datatable start -->
                <div class="card-box mb-30">
                    <div class="card">
                        <div class="card-body">
                            <div class="pb-20">
                                <div class="row">
                                    <div class="col-md-8 mx-auto">
                                        <div class="row">
                                            <div class="col-md-6 p-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <form method="post" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <input type="hidden" class="form-control" name="id" value="1">
                                                                <label for="">Archivo</label>
                                                                <input type="file" class="form-control-file" name="archivo">
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
                                                            </div>
                                                            <?php
                                                            $editar = new ControllerPlanilla();
                                                            $editar->ctrEditarPlanilla();
                                                            ?>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6 p-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <span>Ver archivo</span> <br>
                                                        <?php foreach ($planilla as $key => $value) : ?>
                                                            <a href="<?php echo $value['archivo'] ?>" class="btn btn-secondary" download><i class="fa fa-download"></i> Descargar</a>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Simple Datatable End -->
            </div>
            <br><br>
            <?php include 'modules/footer.php' ?>
        </div>
    </div>
<?php else : ?>
    <?php include 'error-404.php' ?>
<?php endif; ?>