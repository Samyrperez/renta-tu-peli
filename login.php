<?php
		include"cabeza.php";
		include("menu.php");

		?>


		<div class="container">
			<div class="row">
		
				<div class="col-md-5">
					<img src="img/cine1.jpg" width="100%">
				</div>

				<div class="col-md-5"><h2 class="fw-bold text-center pt-5 mb-5 py-5">Bienvenido</h2>
					<form method="POST" action="validar.php">
						<div class="mb-3">
						<label for="usuario" class="form-label"> Usuario</label>
						<input type="text" class="
						form-control" name="usuario"></div>
						<div class="mb-3">
						<label for="password" class="form-label">Contraseña</label>
						<input type="password" class="
						form-control" name="clave"></div>
						<div class="mb-3" form-check>
							<input type="checkbox" class="
						form-check-input" name="connected">
						<label for="connected" class="form-check-label">Mantenerme conectado</label>	
						</div>
						<div class="d-grid">
							<button type="submit" class="btn btn-primary"> Ingresar </button>
						</div>
						<div class="my-3">
							<span><a href="">Recuperar contraseña</a></span>
							
						</div>
					</form></div>


					

					
			</div>
		
		</div>
	</div>




 <?php 
		 include("pie.php");
		   ?>