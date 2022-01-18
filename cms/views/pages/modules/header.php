<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
    </div>
    <div class="header-right">
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="<?php echo $_SESSION['foto'] ?>" alt="">
                    </span>
                    <span class="user-name"><?php echo $_SESSION['nombre'] ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="index.php?pagina=mi-perfil&id=<?php echo $_SESSION['id'] ?>"><i class="dw dw-user1"></i> Perfil</a>
                    <a class="dropdown-item" href="salir"><i class="dw dw-logout"></i> Salir</a>
                </div>
            </div>
        </div>
    </div>
</div>