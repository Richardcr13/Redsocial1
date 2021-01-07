
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dragón Y & G</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<style type="text/css">
		::selection {
    background-color: #EFF56D;
    color: white;
}
::-moz-selection {
    background-color: #E13300;
    color: white;
}
body {
    background-color: #EFF56D;
    margin: 40px;
    font: 13px/20px normal Helvetica, Arial, sans-serif;
    color: #4F5155;
}
h1 {
    color: #444;
    background-color: transparent;
    border-bottom: 1px solid #D0D0D0;
    font-size: 19px;
    font-weight: normal;
    margin: 0 0 14px 0;
    padding: 14px 15px 10px 500px;
    font: 18px/20px normal Helvetica, Arial, sans-serif;
}
#body {
    margin: 0 15px 0 15px;
}
p.descripcion {
    text-align: center;
    font-size: 11px;
    padding: 0 10px 0 10px;
    margin: 20px 0 0 0;
    font: 15px/20px normal Helvetica, Arial, sans-serif;
}
div.login-screen {
    border: 1px solid black;
    margin-top: 50px;
    margin-bottom: 100px;
    margin-right: 450px;
    margin-left: 280px;
    background-color: rgb(79, 197, 124);
}
div.login-form {
    padding: 30px 40px 40px 50px;
}
p.pregunta {
    padding: 15px 0px 0px 0px;
}
a.restablece {
    padding: 0px 0px 0px 0px;
    color: #008000;
}
	</style>

</head>
<body>


<div>
	<h1>Dragón amarillo y verde</h1>

	<div id="body">

		<p class="descripcion">Sitio creado para que puedas tener un mejor contacto con los
		"UPIICSIANOS". Inicia sesión o registraste</p>

	</div>

</div>


<div class="login-screen">
  <div class="container container-login animated fadeIn">
  	<h3 class="text-center">Iniciar sesión...</h3>
			<form action="" method="POST">
			  <div class="login-form">
				<div class="form-group form-floating-label">
					<form>
					<input id="username" name="username" type="text" class="form-control input-border-bottom" required>
					<label for="username" class="placeholder">Usuario</label>
				</div>
				<div class="form-group form-floating-label">
					<input id="password" name="password" type="password" class="form-control input-border-bottom" required>
					<label for="password" class="placeholder">Contraseña</label>
					<div class="show-password">
						<i class="flaticon-interface"></i>
					</div>
				</div>

				<input  type="submit" value="Ingresar" class="btn btn-primary">
				<p class="pregunta">¿Olvidaste tu contraseña?</p>
				<a class="restablece" href="index.php/Pagina_inicio">Restablece la contraseña.</a>
              </form>
			</div>
</div>
</body>
</html>
