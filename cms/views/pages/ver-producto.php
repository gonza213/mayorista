<?php
$categorias = ControllerCategoria::ctrMostrarCategorias();
$productos = ControllerProductos::ctrMostrarProductos();
$imagenes = ControllerProductos::ctrMostrarImagenes();
$id = $_GET['id'];
?>
<?php if ($_SESSION["rol"] == "administrador") : ?>
    <div class="main-container">

        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <?php foreach ($productos as $key => $value) : ?>
                                    <?php if ($value['id_p'] == $id) : ?>
                                        <h4>Producto: <?php echo $value["nombre"] ?> </h4>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="home">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="productos">Productos</a></li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary" href="productos">
                                    Ir a Productos
                                </a>
                                <a class="btn btn-warning" href="index.php?pagina=editar-producto&id=<?php echo $id ?>">
                                    Editar Producto
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Simple Datatable start -->
                <div class="card-box mb-30">
                    <div class="card">
                        <div class="card-body">
                            <div class="pb-20">
                                <div class="row p-3">
                                    <?php foreach ($productos as $key => $value) : ?>
                                        <?php if ($value['id_p'] == $id) : ?>
                                            <div class="col-md-3 p-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p><span class="text-dark" style="font-weight: bold;">Categoría:</span> <?php echo $value["categoria"] ?></p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-3 p-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p><span class="text-dark" style="font-weight: bold;">Nombre:</span> <?php echo $value["nombre"] ?></p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-3 p-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p><span class="text-dark" style="font-weight: bold;">Precio</span> $<?php echo $value["precio"] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 p-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p><span class="text-dark" style="font-weight: bold;">Stock:</span> <?php echo $value["stock"] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 p-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p><span class="text-dark" style="font-weight: bold;">Pequeña descripción: </span> <?php echo $value["info"] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 p-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p><span class="text-dark" style="font-weight: bold;">Descripción:</span> <?php echo $value["descripcion"] ?></p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p><span class="text-dark" style="font-weight: bold;">Recomendación:</span>
                                                            <?php if ($value['recomendar'] == '1') : ?>
                                                                Recomendado
                                                            <?php else : ?>
                                                                No recomendar
                                                            <?php endif; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 p-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img src="<?php echo $value["imagen"] ?>" alt="" class="img-thumbnail" style="width: 100%">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- Simple Datatable End -->
                <!-- Simple Datatable start -->
                <div class="card-box mb-30">
                    <div class="card">
                        <div class="card-body">
                            <div class="pd-20">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Lista de imagenes</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="float-right btn btn-secondary" data-toggle="modal" data-target="#subir-modal" type="button">Subir Imagenes</button>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-20">
                                <div class="row p-3">
                                    <div class="col-md-6 p-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <table class="p-4 table  stripe hover nowrap" id="example2">
                                                    <thead>
                                                        <tr>
                                                            <th class="table-plus datatable-nosort">#</th>
                                                            <th>Imagen</th>
                                                            <th class="datatable-nosort">Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($imagenes as $key => $value) : ?>
                                                            <?php if ($value['id_producto'] == $id) : ?>
                                                                <tr>
                                                                    <td class="table-plus"><?php echo $key + 1 ?></td>
                                                                    <td>
                                                                        <img src="<?php echo $value["imagenes"] ?>" class="img-thumbnail" style="width: 120px; height: 120px">
                                                                    </td>

                                                                    <td>
                                                                        <div class="dropdown">

                                                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                                                <i class="dw dw-more"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

                                                                                <a class="dropdown-item" href="<?php echo $value["imagenes"] ?>" target="_blank"><i class="dw dw-eye"></i>Ver</a>
                                                                                <button class="dropdown-item btnBorrarImagen" idGet="<?php echo $id ?>" onclick="borrarImagen(<?php echo $value["id"] ?>)"><i class="dw dw-delete-3"></i>Borrar</button>

                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 p-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <?php foreach ($imagenes as $key => $value) : ?>
                                                        <?php if ($value['id_producto'] == $id) : ?>
                                                            <div class="col-md-4 p-0">
                                                                <img src="<?php echo $value["imagenes"] ?>" alt="" style="width:100%; height: 250px">
                                                            </div>
                                                        <?php endif; ?>
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
                <!-- Simple Datatable End -->
            </div>
            <br><br>
            <?php include 'modules/footer.php' ?>
        </div>
    </div>

    <?php
    $borrar = new ControllerProductos();
    $borrar->ctrBorrarImagen();
    ?>

<?php else : ?>
    <?php include 'error-404.php' ?>
<?php endif; ?>

<div class="modal fade" id="subir-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Subir imagenes</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <!-- Default Basic Forms Start -->
                <div class="pd-20 card-box mb-30">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Imagenes</label>
                            <div class="col-sm-12 col-md-9">
                                <input type="hidden" value="<?php echo $id ?>" name="id_producto">
                                <input class="form-control-file" type="file" name="imagenes[]" required multiple>
                            </div>
                        </div>

                </div>
                <!-- Default Basic Forms End -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Cargar imagenes</button>
            </div>
            <?php
            $crear = new ControllerProductos();
            $crear->ctrSubirImagenes();
            ?>
            </form>
        </div>
    </div>
</div>