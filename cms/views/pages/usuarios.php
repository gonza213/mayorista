<?php
$usuarios = ControllerUsuario::ctrMostrarUsuarios();
?>
<?php if ($_SESSION["rol"] == "administrador") : ?>
    <div class="main-container">

        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Usuarios</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="inicio">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#Medium-modal" type="button">
                                    Nuevo usuario
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
                                <h4 class="text-blue h4">Lista de Usuarios</h4>
                            </div>
                            <div class="pb-20">
                                <table class=" table  stripe hover nowrap" id="example">
                                    <thead>
                                        <tr>
                                            <th class="table-plus datatable-nosort">#</th>
                                            <th>Nombre</th>
                                            <th>Usuario</th>
                                            <th>Email</th>
                                            <th>Rol</th>
                                            <th>Foto</th>
                                            <th>Fecha Ingreso</th>
                                            <th class="datatable-nosort">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($usuarios as $key => $value) : ?>
                                            <tr>
                                                <td class="table-plus"><?php echo $key + 1 ?></td>
                                                <td><?php echo $value["nombre"] ?></td>
                                                <td><?php echo $value["usuario"] ?></td>
                                                <td><?php echo $value["email"] ?></td>
                                                <?php if ($value["rol"] == "administrador") : ?>
                                                    <td>Administrador</td>
                                                <?php else : ?>
                                                    <td>Usuario</td>
                                                <?php endif ?>
                                                <td>
                                                    <img src="<?php echo $value["foto"] ?>" class="img-thumbnail" style="width: 50px; height: 50px;">
                                                </td>
                                                <td><?php echo $value["fecha"] ?></td>
                                                <td>
                                                    <div class="dropdown">

                                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                            <i class="dw dw-more"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                            <?php if ($value["usuario"] == 'admin') : ?>
                                                                <button class="dropdown-item btnVer" data-toggle="modal" data-target="#Medium-modal21" idEditarUsuario="<?php echo $value["id"] ?>"><i class="dw dw-eye"></i>Ver</button>
                                                                <button class="dropdown-item btnEditar" data-toggle="modal" data-target="#Medium-modal2" idEditarUsuario="<?php echo $value["id"] ?>"><i class="dw dw-edit2"></i>Editar</button>
                                                            <?php else : ?>
                                                                <button class="dropdown-item btnVer" data-toggle="modal" data-target="#Medium-modal21" idEditarUsuario="<?php echo $value["id"] ?>"><i class="dw dw-eye"></i>Ver</button>
                                                                <button class="dropdown-item btnEditar" data-toggle="modal" data-target="#Medium-modal2" idEditarUsuario="<?php echo $value["id"] ?>"><i class="dw dw-edit2"></i>Editar</button>
                                                                <button class="dropdown-item btnBorrar" idBorrarUsuario="<?php echo $value["id"] ?>"><i class="dw dw-delete-3"></i>Borrar</button>
                                                            <?php endif ?>
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
    $borrar = new ControllerUsuario();
    $borrar->ctrBorrarUsuario();
    ?>
<?php else : ?>
    <?php include 'error-404.php' ?>
<?php endif; ?>


<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Nuevo usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <!-- Default Basic Forms Start -->
                <div class="pd-20 card-box mb-30">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Nombre completo</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" name="nombre" id="nombreId" placeholder="Escribe su nombre" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Usuario</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" name="usuario" type="text" id="usuarioId" placeholder="Escribe su usuario" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Email</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" name="email" id="emailId" placeholder="Escribe su email" type="email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Contraseña</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" name="password" type="password" id="passwordId" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Rol</label>
                            <div class="col-sm-12 col-md-9">
                                <select class="custom-select col-12" name="rol" id="rolId" required>
                                    <option selected>Elige un rol...</option>
                                    <option value="administrador">Administrador</option>
                                    <option value="editor">Editor</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Foto</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control imagen" name="foto" type="file">
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <img src="views/src/images/person.svg" alt="" class="img-fluid p-3 previsualizar" style="width: 150px; height: 150px;">
                        </div>

                </div>
                <!-- Default Basic Forms End -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" onclick="crear()">Crear usuario</button>
            </div>
            <?php
            $crear = new ControllerUsuario();
            $crear->ctrCrearUsuario();
            ?>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="Medium-modal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Editar usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <!-- Default Basic Forms Start -->
                <div class="pd-20 card-box mb-30">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Nombre completo</label>
                            <input type="hidden" name="idE" id="id">
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" name="nombreE" id="nombre" placeholder="Escribe su nombre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Usuario</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" name="usuarioE" id="usuario" type="text" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Email</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" name="emailE" id="email" placeholder="Escribe su email" type="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Nueva Contraseña </label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" name="passwordE" type="password">
                            </div>
                            <input class="form-control" name="passwordActual" id="passwordE" type="hidden">
                        </div>
                        <div class="form-group row" id="adminRol">
                            <label class="col-sm-12 col-md-3 col-form-label">Rol</label>
                            <div class="col-sm-12 col-md-9">
                                <select class="custom-select col-12" name="rolE" id="rolE">
                                    <option selected=""></option>
                                    <option value="administrador">Administrador</option>
                                    <option value="editor">Editor</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Foto</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control imagen" name="fotoE" type="file">
                            </div>
                            <input type="hidden" name="fotoActual" id="fotoE">
                        </div>
                        <div class="form-group mt-2" id="visualizar">
                            <img src="" alt="" class="img-fluid p-3 previsualizar" style="width: 150px; height: 150px;">
                        </div>

                </div>
                <!-- Default Basic Forms End -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-warning">Editar usuario</button>
            </div>
            <?php
            $editar = new ControllerUsuario();
            $editar->ctrEditarUsuario();
            ?>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="Medium-modal21" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Ver usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <!-- Default Basic Forms Start -->
                <div class="pd-20 card-box mb-30">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Nombre completo</label>
                            <input type="hidden" name="idE" id="id">
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" type="text" id="nombreV" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Usuario</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" id="usuarioV" type="text" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Email</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" id="emailV" type="email" readonly>
                            </div>
                        </div>
                        <div class="form-group row" id="adminRol">
                            <label class="col-sm-12 col-md-3 col-form-label">Rol</label>
                            <div class="col-sm-12 col-md-9">
                                <input class="form-control" id="rolV" type="text" readonly>
                            </div>
                        </div>
                        <div class="form-group mt-2" id="visualizar">
                            <img src="" alt="" class="img-fluid p-3 previsualizar" style="width: 150px; height: 150px;">
                        </div>

                </div>
                <!-- Default Basic Forms End -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>

            </form>
        </div>
    </div>
</div>