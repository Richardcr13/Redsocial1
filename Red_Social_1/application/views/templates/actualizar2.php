
<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Restablece la contraseña...</h4>
                        <p>Los campos marcados con '*' son obligatorios.</p>
                        <p>Ingresa tu correo para restablecer la contraseña.</p>
					</div>
					<div class="row">
						<form action="Actualizar/update2" class="needs-validation" method="POST" id="guardar" novalidate >
							<div class="form-row">

								<div class="col-sm-4">
									<label for="correo">Correo*</label>
									<input type="text" class="form-control" name="correo"  required>
									<div class="invalid-feedback">
										Campo obligatorio.
									</div>
								</div>



							</div>


                            <button class="btn btn-primary" value="registrar" type="submit" >Actualizar</button>
                            <input type="Reset" value="Limpiar">
                            <a class="regresar" href="Welcome">Regresar</a>
						</form>

						<script>
						// Example starter JavaScript for disabling form submissions if there are invalid fields
						(function() {
							'use strict';
							window.addEventListener('load', function() {
							// Fetch all the forms we want to apply custom Bootstrap validation styles to
							var forms = document.getElementsByClassName('needs-validation');
							// Loop over them and prevent submission
							var validation = Array.prototype.filter.call(forms, function(form) {
								form.addEventListener('submit', function(event) {
									if (form.checkValidity() === false) {
										event.preventDefault();
										event.stopPropagation();
									}
									form.classList.add('was-validated');
								}, false);
							});
						}, false);
                    })();

				</script>
			</div>
		</div>
	</div>
</div>

<div class="imagen">
    <img src="../images/registrar/upiicsa2.jpg" width="500" height="250" >
</div>
