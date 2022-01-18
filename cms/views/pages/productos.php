<?php
$categorias = ControllerCategoria::ctrMostrarCategorias();
$productos = ControllerProductos::ctrMostrarProductos();
?>
<?php if ($_SESSION["rol"] == "administrador") : ?>
    <div class="main-container">

        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Productos</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="inicio">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Productos</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#Medium-modal" type="button">
                                    Nuevo Producto
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
                                <h4 class="text-blue h4">Lista de Productos</h4>
                            </div>
                            <div class="pb-20">
                                <table class=" table  stripe hover nowrap" id="example">
                                    <thead>
                                        <tr>
                                            <th class="table-plus datatable-nosort">#</th>
                                            <th>Categoría</th>
                                            <th>Nombre del producto</th>
                                            <th>Precio</th>
                                            <th>Imagen</th>
                                            <th>Fecha Creada</th>
                                            <th class="datatable-nosort">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($productos as $key => $value) : ?>
                                            <tr>
                                                <td class="table-plus"><?php echo $key + 1 ?></td>
                                                <td><?php echo $value["categoria"] ?></td>
                                                <td><?php echo $value["nombre"] ?></td>
                                                <td>$<?php echo $value["precio"] ?></td>
                                                <td>
                                                    <img src="<?php echo $value["imagen"] ?>" class="img-thumbnail" style="width: 120px; height: 120px">
                                                </td>
                                                <td><?php echo $value["fecha_p"] ?></td>
                                                <td>
                                                    <div class="dropdown">

                                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                            <i class="dw dw-more"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">

                                                            <a class="dropdown-item" href="index.php?pagina=ver-producto&id=<?php echo $value["id_p"] ?>"><i class="dw dw-eye"></i>Ver</a>
                                                            <button class="dropdown-item btnBorrarCategoria" onclick="borrarProducto(<?php echo $value["id_p"] ?>)"><i class="dw dw-delete-3"></i>Borrar</button>

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
    $borrar = new ControllerProductos();
    $borrar->ctrBorrarProducto();
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
                            <label class="col-sm-12 col-md-3 col-form-label">Nombre producto</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" name="nombre" id="nombreId" placeholder="Escribe su nombre" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Categoria a pertenecer:</label>
                            <div class="col-sm-12 col-md-9">
                                <select id="" class="form-control" name="id_categoria">
                                    <option value="">Seleccione una categoria..</option>
                                    <?php foreach ($categorias as $key => $value) : ?>
                                        <option value="<?php echo $value['id'] ?>"><?php echo $value['categoria'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Precio</label>
                            <div class="col-sm-12 col-md-4">
                                <input class="form-control" type="text" name="precio" id="nombreId" placeholder="Escribe su nombre" required>
                            </div>
                            <label class="col-sm-12 col-md-2 col-form-label">Stock</label>
                            <div class="col-sm-12 col-md-4">
                                <input class="form-control" type="number" name="stock" id="nombreId" placeholder="Escribe su nombre" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Pequeña descripción</label>
                            <div class="col-sm-12 col-md-9">
                                <textarea id="summernote" name="info"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Descripción</label>
                            <div class="col-sm-12 col-md-9">
                                <textarea id="summernote2" name="descripcion"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Recomendación</label>
                            <div class="col-sm-12 col-md-9">
                                <select name="recomendar" id="" class="form-control">
                                    <option value="1">Recomendar</option>
                                    <option value="0">No Recomendar</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Imagen ppal</label>
                            <div class="col-sm-12 col-md-9">
                                <input type="file" class="form-control-file imagen" name="imagen">
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <img src="views/src/images/imagen-neutral.png" alt="" class="img-fluid p-3 previsualizar" style="width: 250px; height: 250px;">
                        </div>
                </div>
                <!-- Default Basic Forms End -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Crear categoria</button>
            </div>
            <?php
            $crear = new ControllerProductos();
            $crear->ctrCrearProducto();
            ?>
            </form>
        </div>
    </div>
</div>