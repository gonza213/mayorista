<?php
$usuarios = ControllerUsuario::ctrMostrarUsuarios();
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
                                <h4>Mi Perfil</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="inicio">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Mi Perfil</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Simple Datatable start -->
                <div class="card-box mb-30">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mx-auto">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Mi Perfil</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="pb-20">
                                                <?php foreach ($usuarios as $key => $value) : ?>
                                                    <?php if($value['id'] == $id) : ?>
                                                    <form method="POST" enctype="multipart/form-data">
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Nombre completo</label>
                                                            <input type="hidden" name="idP" id="id" value="<?php echo $value['id'] ?>">
                                                            <div class="col-sm-12 col-md-9">
                                                                <input class="form-control" type="text" name="nombreP" id="nombre" placeholder="Escribe su nombre" value="<?php echo $value['nombre'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Usuario</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input class="form-control" name="usuarioP" id="usuario" type="text" value="<?php echo $value['usuario'] ?>" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Email</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input class="form-control" name="emailP" id="email" placeholder="Escribe su email" type="email" value="<?php echo $value['email'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Nueva Contraseña </label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input class="form-control" name="passwordP" type="password">
                                                            </div>
                                                            <input class="form-control" name="passwordActual" id="passwordE" type="hidden" value="<?php echo $value['password'] ?>">
                                                        </div>
                                                        <div class="form-group row" id="adminRol">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Rol</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <select class="custom-select col-12" name="rolP" id="rolE">
                                                                    <option value="<?php echo $value['rol'] ?>"></option>
                                                                    <option value="administrador">Administrador</option>
                                                                    <option value="editor">Editor</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-md-3 col-form-label">Foto</label>
                                                            <div class="col-sm-12 col-md-9">
                                                                <input class="form-control imagen" name="fotoP" type="file">
                                                            </div>
                                                            <input type="hidden" name="fotoActual" id="fotoE" value="<?php echo $value['foto'] ?>">
                                                        </div>
                                                        <div class="form-group mt-2" id="visualizar">
                                                            <img src="<?php echo $value['foto'] ?>" alt="" class="img-fluid p-3 previsualizar" style="width: 150px; height: 150px;">
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary btn-sm btn-block">Actualizar</button>
                                                        </div>
                                                        <?php 
                                                          $perfil = new ControllerUsuario();
                                                          $perfil -> ctrEditarMiPerfil();
                                                        ?>
                                                    </form>
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
                <!-- Simple Datatable End -->
            </div>
            <br><br>
            <?php include 'modules/footer.php' ?>
        </div>
    </div>

<?php else : ?>
    <?php include 'error-404.php' ?>
<?php endif; ?>