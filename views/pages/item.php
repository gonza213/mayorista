<?php

$productos = ControllerProductos::ctrMostrarProductos();
$imagenes = ControllerProductos::ctrMostrarImagenes();
$id = $_GET["id"];

?>
<!-- Start Shop Detail  -->
<div class="shop-detail-box-main">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-6">
                <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <?php foreach ($productos as $key => $value) : ?>
                            <?php if ($value['id_p'] == $id) : ?>
                                <div class="carousel-item active"> <img class="d-block w-100" src="cms/<?php echo $value['imagen'] ?>" alt="First slide"> </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <?php foreach ($imagenes as $key => $value) : ?>
                            <?php if ($value['id_producto'] == $id) : ?>
                                <div class="carousel-item"> <img class="d-block w-100" src="cms/<?php echo $value['imagenes'] ?>" alt="Second slide"> </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                    <ol class="carousel-indicators">
                        <?php foreach ($productos as $key => $value) : ?>
                            <?php if ($value['id_p'] == $id) : ?>
                                <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                    <img class="d-block w-100 img-fluid" src="cms/<?php echo $value['imagen'] ?>" alt="" />
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <?php foreach ($imagenes as $key => $value) : ?>
                            <?php if ($value['id_producto'] == $id) : ?>
                                <li data-target="#carousel-example-1" data-slide-to="<?php echo $key + 1 ?>">
                                    <img class="d-block w-100 img-fluid" src="cms/<?php echo $value['imagenes'] ?>" alt="" />
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
            <?php foreach ($productos as $key => $value) : ?>
                <?php if ($value['id_p'] == $id) : ?>
                    <div class="col-xl-7 col-lg-7 col-md-6">
                        <div class="single-product-details">
                            <h2><?php echo $value['nombre'] ?></h2>
                            <h5>$<?php echo $value['precio'] ?></h5>
                            <p>
                            <h4>Descripción:</h4>
                            <p><?php echo $value['descripcion'] ?></p>
                            <ul>
                                <li>
                                    <div class="form-group quantity-box">
                                        <label class="control-label">Cantidad</label>
                                        <input class="form-control producto<?php echo $value['id_p'] ?>" value="1" type="number">
                                    </div>
                                </li>
                            </ul>

                            <div class="price-box-bar">
                                <div class="cart-and-bay-btn">
                                    <a class="btn hvr-hover text-white" data-fancybox-close="" style="cursor:pointer" onclick="anadirLista(<?php echo $value['id_p'] ?>)">Añadir a Lista</a>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

    </div>
</div>
<!-- End Cart -->