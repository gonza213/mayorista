
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="#">
					<img src="views/images/logo.png" style="width: 100px">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="http://localhost/mayorista">Volver al Sitio</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">

				<div class="col-md-6 col-lg-5 mx-auto">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Panel de Control</h2>
						</div>
						<form method="post">
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" name="usuario" placeholder="Usuario">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" name="password" class="form-control form-control-lg" placeholder="Contraseña">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
										<button type="submit" class="btn btn-primary btn-lg btn-block" href="index.html">Ingresar</button>
									</div>
								</div>
							</div>
                            <?php
                               
                               $ingresar = new ControllerUsuario();
                               $ingresar-> ctrIngresarUsuario();
                            ?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
