<?php
$suscripciones = ControllerContacto::ctrMostrarSuscriptores();
?>
<?php if ($_SESSION["rol"] == "administrador") : ?>
    <div class="main-container">

        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Suscripciones</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="inicio">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Suscripciones</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <!-- <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#Medium-modal" type="button">
                                    Nuevo usuario
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Simple Datatable start -->
                <div class="card-box mb-30">
                    <div class="card">
                        <div class="card-body">
                            <div class="pd-20">
                                <h4 class="text-blue h4">Lista de suscripciones</h4>
                            </div>
                            <div class="pb-20">
                                <table class=" table  stripe hover nowrap" id="example">
                                    <thead>
                                        <tr>
                                            <th class="table-plus datatable-nosort">#</th>
                                            <th>Email</th>
                                            <th>Fecha</th>
                                            <th class="datatable-nosort">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($suscripciones as $key => $value) : ?>
                                            <tr>
                                                <td class="table-plus"><?php echo $key + 1 ?></td>
                                                <td><?php echo $value["email"] ?></td>
                                                <td><?php echo $value["fecha"] ?></td>
                                                <td>
                                                    <div class="dropdown">

                                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                            <i class="dw dw-more"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                            <button class="dropdown-item"  onclick="borrarSuscriptor(<?php echo $value["id"] ?>)"><i class="dw dw-delete-3"></i>Borrar</button>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
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
    <?php
    $borrar = new ControllerContacto();
    $borrar->ctrBorrarSuscriptor();
    ?>
<?php else : ?>
    <?php include 'error-404.php' ?>
<?php endif; ?>

