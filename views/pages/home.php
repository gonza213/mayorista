<?php

$categorias = ControllerCategorias::ctrMostrarCategorias();
$productos = ControllerProductos::ctrMostrarProductos();
$planilla = ControllerPlanilla::ctrMostrarPlanilla();

?>
<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <li class="text-center">
            <img src="views/images/banner/banner-1.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Bienvenidos a <br> Tus Compras Online.</strong></h1>
                        <p class="m-b-40">Tienda de Golosinas, Vinos y Delicatesen.</p>
                        <p><a class="btn hvr-hover" href="#recomendado">Comprar Ahora</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="views/images/banner/banner-2.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Bienvenidos a <br> Tus Compras Online.</strong></h1>
                        <p class="m-b-40">Tienda de Golosinas, Vinos y Delicatesen.</p>
                        <p><a class="btn hvr-hover" href="#recomendado">Comprar Ahora</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="views/images/banner/banner-4.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Bienvenidos a <br> Tus Compras Online.</strong></h1>
                        <p class="m-b-40">Tienda de Golosinas, Vinos y Delicatesen.</p>
                        <p><a class="btn hvr-hover" href="#recomendado">Comprar Ahora</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End Slider -->

<!-- Start Products  -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" id="recomendado">
                <div class="title-all text-center">
                    <h1>Productos Recomendados</h1>
                    <p>Prestigio y Calidad en todos nuestros productos.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button class="active" data-filter="*">Todos</button>
                        <?php foreach ($categorias as $key => $value) : ?>
                            <button data-filter=".<?php echo $value['id'] ?>"><?php echo $value['categoria'] ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row special-list">
            <?php foreach ($productos as $key => $value) : ?>
                <?php if ($value['recomendar'] == '1') : ?>
                    <div class="col-lg-3 col-md-6 special-grid <?php echo $value['id_categoria'] ?>">
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
                                <h5> $<?php echo $value['precio'] ?></h5>
                                <hr>
                                <div class="input-group input-group-sm mb-3" id="contactForm">
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
</div>
<!-- End Products  -->

<div class="products-box" style="margin-top: -90px">
    <div class="card m-5">
        <div class="card-body">
            <div class="row p-4">
                <div class="col-md-9">
                    <h1 class="text-center" style="color: #b0b435">Descargue la lista completa de todos nuestros productos</h1>
                </div>
                <div class="col-md-3">
                <?php foreach($planilla as $key => $value): ?>
                    <a href="cms/<?php echo $value['archivo'] ?>" class="btn hvr-hover text-white btn-block" download>
                        <i class="fa fa-download"></i> Descargar
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</div>