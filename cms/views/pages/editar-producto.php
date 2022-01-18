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
                                        <h4>Editar producto: <?php echo $value["nombre"] ?> </h4>
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
                                <a class="btn btn-secondary" href="index.php?pagina=ver-producto&id=<?php echo $id ?>">
                                    Volver
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
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="row p-3">
                                        <?php foreach ($productos as $key => $value) : ?>
                                            <?php if ($value['id_p'] == $id) : ?>
                                                <div class="col-md-3 p-2">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <label for="">Categoria:</label>
                                                            <input type="hidden" class="form-control" name="id_p" value="<?php echo $value["id_p"] ?>">
                                                            <select name="id_categoria" class="form-control" id="">
                                                                <option value="<?php echo $value["id"] ?>"><?php echo $value["categoria"] ?></option>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                        <?php foreach ($categorias as $key => $value) : ?>
                                                            <option class="form-control" value="<?php echo $value["id"] ?>"><?php echo $value["categoria"] ?></option>
                                                        <?php endforeach; ?>
                                                        <?php foreach ($productos as $key => $value) : ?>
                                                            <?php if ($value['id_p'] == $id) : ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-3 p-2">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <label for="">Nombre:</label>
                                                            <input type="text" class="form-control" name="nombre" value="<?php echo $value["nombre"] ?>">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-3 p-2">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <label for="">Precio:</label>
                                                            <input type="text" class="form-control" name="precio" value="<?php echo $value["precio"] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 p-2">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <label for="">Stock:</label>
                                                            <input type="text" class="form-control" name="stock" value="<?php echo $value["stock"] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 p-2">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <label for="">Pequeña descripción:</label>
                                                            <textarea name="info" id="summernote"><?php echo $value["info"] ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 p-2">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <label for="">Descripción:</label>
                                                            <textarea name="descripcion" id="summernote2"><?php echo $value["descripcion"] ?></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <label for="">Recomendación:</label>
                                                             <select name="recomendar" id="" class="form-control">
                                                                 <option value="<?php echo $value['recomendar'] ?>"></option>
                                                                 <option value="1">Recomendar</option>
                                                                 <option value="0">No recomendar</option>
                                                             </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6  p-2">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <label for="">Imagen:</label>
                                                            <input type="file" class="form-control-file imagen" name="imagen">
                                                            <input type="hidden" name="imagenActual" value="<?php echo $value["imagen"] ?>">
                                                            <img src="<?php echo $value["imagen"] ?>" alt="" class="img-thumbnail p-3 previsualizar" style="width: 100%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="btn btn-warning float-right" type="submit">Actualizar datos</button>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php
                                    $crear = new ControllerProductos();
                                    $crear->ctrEditarProducto();
                                    ?>
                                </form>

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