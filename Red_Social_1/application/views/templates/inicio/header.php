<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dragón Y & G</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../CSS/inicio.css">
	<link rel="stylesheet" type="text/css" href="../CSS/nav_bar.css">
	<link rel="stylesheet" type="text/css" href="../CSS/menu_perfil.css">
	<link rel="stylesheet" type="text/css" href="../CSS/logout.css">
	<link rel="stylesheet" type="text/css" href="../CSS/home.css">

	<script src="../js/jquery.js"></script>
	<script src="../js/jquery.dataTables.min.js"></script>


</head>
<body>



<header>
<input type="search" id="input-search" placeholder="Buscar aquí...">

<div class="content-search">

	<div class="content-table">
		<table id="table">
			<thead>
				<tr>
					<td></td>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>
						<a href="#">
						</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

</div>
</header>


<div class="h">
	<a href="#">
		<img src="../images/nav-bar/k.jpg"  width="60" height="40">
	</a>
</div>

<div class="home">
	<a href="Pagina_inicio">
		<img src="../images/nav-bar/home.png"  width="60" height="40">
	</a>
</div>

<div class="mensaje">
	<a href="Mensajes">
		<img src="../images/nav-bar/mensajes.png"  width="60" height="40">
	</a>
</div>

<div class="notificacion">
	<a href="#">
		<img src="../images/nav-bar/notificacion.png"  width="60" height="40">
	</a>
</div>

<div class="salir">
	<?php if ($this->session->userdata('username')): ?>
	<a class="restablece" href="<?=site_url('Welcome/logout')?>">salir..</a>
	<?php endif;?>

</div>
