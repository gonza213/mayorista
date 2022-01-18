<?php

$categorias = ControllerCategorias::ctrMostrarCategorias();
$productos = ControllerProductos::ctrMostrarProductos();
$id = $_GET['id'];

?>

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php foreach ($categorias as $key => $value) : ?>
                    <?php if ($value['id'] == $id) : ?>
                        <h2 class="text-uppercase"><?php echo $value['categoria'] ?> </h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Home</a></li>
                            <li class="breadcrumb-item">Categoría</li>
                            <li class="breadcrumb-item active text-capitalize"><?php echo $value['categoria'] ?></li>
                        </ul>
                    <?php endif; ?>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Shop Page  -->
<div class="shop-box-inner">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                <div class="right-product-box">
                    <div class="product-item-filter row">
                        <div class="col-12 col-sm-8 text-center">
                            <?php foreach ($categorias as $key => $value) : ?>
                                <?php if ($value['id'] == $id) : ?>
                                    <h2 class="text-left text-uppercase">Lista de <?php echo $value['categoria'] ?></h2>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-12 col-sm-4 text-center text-sm-right">
                            <ul class="nav nav-tabs ml-auto">
                                <li>
                                    <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="product-categorie-box">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                <div class="row">
                                    <?php foreach ($productos as $key => $value) : ?>
                                        <?php if ($value['id_categoria'] == $id) : ?>
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="sale">Venta</p>
                                                        </div>
                                                        <img src="cms/<?php echo $value['imagen'] ?>" class="img-fluid" alt="Image" style="width: 100% !important; height: 300px !important">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="index.php?pagina=item&id=<?php echo $value['id_p'] ?>" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                                            </ul>
                                                            <a class="cart" style="cursor:pointer" onclick="anadirLista(<?php echo $value['id_p'] ?>)">Añadir a Lista</a>
                                                        </div>
                                                    </div>
                                                    <div class="why-text">
                                                        <h4 class="text-uppercase"><?php echo $value['nombre'] ?></h4>
                                                        <h5>$<?php echo $value['precio'] ?></h5>
                                                        <hr>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text cantidadT" id="inputGroup-sizing-sm">Cantidad</span>
                                                            </div>
                                                            <input type="number" class="form-control cantidad text-center producto<?php echo $value['id_p'] ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="list-view">
                                <div class="list-view-box">
                                    <div class="row">
                                        <?php foreach ($productos as $key => $value) : ?>
                                            <?php if ($value['id_categoria'] == $id) : ?>
                                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                    <div class="products-single fix">
                                                        <div class="box-img-hover">
                                                            <div class="type-lb">
                                                                <p class="sale">Venta</p>
                                                            </div>
                                                            <img src="cms/<?php echo $value['imagen'] ?>" class="img-fluid" alt="Image" style="width: 100% !important; height: 300px !important">
                                                            <div class="mask-icon">
                                                                <ul>
                                                                    <li><a href="index.php?pagina=item&id=<?php echo $value['id_p'] ?>" data-toggle="tooltip" data-placement="right" title="Ver"><i class="fas fa-eye"></i></a></li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                    <div class="why-text full-width">
                                                        <h4><?php echo $value['nombre'] ?></h4>
                                                        <h5 class="text-white">$<?php echo $value['precio'] ?></h5>
                                                        <p><?php echo $value['info'] ?></p>
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <div class="input-group input-group-sm mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text cantidadT" id="inputGroup-sizing-sm">Cantidad</span>
                                                                    </div>
                                                                    <input type="number" class="form-control cantidad text-center producto<?php echo $value['id_p'] ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="1">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <a class="btn hvr-hover" style="cursor:pointer" onclick="anadirLista(<?php echo $value['id_p'] ?>)">Añadir a Lista</a>
                                                            </div>
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
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                <div class="product-categori">
                    <div class="filter-sidebar-left">
                        <div class="title-left">
                            <h3>Categorías</h3>
                        </div>
                        <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                            <?php foreach ($categorias as $key => $value) : ?>
                                <a href="index.php?pagina=categorias&id=<?php echo $value['id'] ?>" class="list-group-item list-group-item-action text-capitalize"><?php echo $value['categoria'] ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Shop Page -->