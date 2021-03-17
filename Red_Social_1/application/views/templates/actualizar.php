
<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Restablece la contraseña,,</h4>
                        <p>Los campos marcados con '*' son obligatorios.</p>
					</div>
					<div class="row">

						<form action="Actualizar/update" class="needs-validation" method="POST"  novalidate >
							<div class="form - group">
                        <label for="idusuario">Correo: </label>
                        <select name="idusuario"  class="form - control" required>
                            <option value="">Seleccionar un destinatario</option>
                            <?php foreach ($update as $usuario): ?>
                                <option value=" <?php echo $usuario->idusuario ?>"><?php echo $usuario->correo ?></option>
                            <?php endforeach?>
                        </select>
                    </div>

							<div class="form-row">

                                <div class="col-sm-4">
									<label for="contrasena">Contraseña*</label>
									<input type="password" class="form-control" name="contrasena"  required>
									<div class="invalid-feedback">
										Campo obligatorio.
									</div>
								</div>
                                <div class="col-sm-4">
									<label for="contrasena2">Contraseña*</label>
									<input type="password" class="form-control" name="contrasena2"  required>
									<div class="invalid-feedback">
										Campo obligatorio.
									</div>
								</div>
							</div>


                            <button class="btn btn-primary" value="registrar" type="submit" >Actualizar</button>
                            <input type="Reset" value="Limpiar">
                            <a class="regresar" href="Welcome">¿Ya restableciste tu contraseña? Login</a>
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
