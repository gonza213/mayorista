<?php
$categorias = ControllerCategoria::ctrMostrarCategorias();
?>
<?php if ($_SESSION["rol"] == "administrador") : ?>
    <div class="main-container">

        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Categorias</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="inicio">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Categorias</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#Medium-modal" type="button">
                                    Nueva Categoría
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Simple Datatable start -->
                <div class="card-box mb-30">
                    <div class="card">
                        <div class="card-body">
                            <div class="pd-20">
                                <h4 class="text-blue h4">Lista de Categorias</h4>
                            </div>
                            <div class="pb-20">
                                <table class=" table  stripe hover nowrap" id="example">
                                    <thead>
                                        <tr>
                                            <th class="table-plus datatable-nosort">#</th>
                                            <th>Categoria</th>
                                            <th>Fecha Creada</th>
                                            <th class="datatable-nosort">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($categorias as $key => $value) : ?>
                                            <tr>
                                                <td class="table-plus"><?php echo $key + 1 ?></td>
                                                <td><?php echo $value["categoria"] ?></td>
                                                <td><?php echo $value["fecha"] ?></td>
                                                <td>
                                                    <div class="dropdown">

                                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                            <i class="dw dw-more"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

                                                            <button class="dropdown-item btnBorrarCategoria" onclick="borrarCategoria(<?php echo $value["id"] ?>)"><i class="dw dw-delete-3"></i>Borrar</button>

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
    $borrar = new ControllerCategoria();
    $borrar->ctrBorrarCategoria();
    ?>
<?php else : ?>
    <?php include 'error-404.php' ?>
<?php endif; ?>


<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Nueva Categoría</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <!-- Default Basic Forms Start -->
                <div class="pd-20 card-box mb-30">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Nombre categoría</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" name="categoria" id="nombreId" placeholder="Escribe su nombre" required>
                            </div>
                        </div>

                </div>
                <!-- Default Basic Forms End -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Crear categoria</button>
            </div>
            <?php
            $crear = new ControllerCategoria();
            $crear->ctrCrearCategoria();
            ?>
            </form>
        </div>
    </div>
</div>