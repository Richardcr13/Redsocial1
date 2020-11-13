<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
	* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: arial;
}
header {
    width: 100%;
    height: 60px;
    background: #FEF186;
    padding: 10px;
}
#input-search{
	width: 150px;
	height: 40px;
	text-indent: 10px;
	background: #FEF186;
}
.content-search{
	width: 100%;
	height: 100vh;
	position: fixed;
	top: 60px;
	left: 0;
	background: rgb(79, 197, 124);
}
.content-table{
	width: 20%;
	max-height: 200px;
	height: auto;
    background-color:hsla(120,100%,75%,0.3);
    margin-left: 10px;
    overflow-y: visible;
    overflow-x: hidden;

}
.content-table{
	width: 20%;
}
tbody tr td a{
	display: block;
	padding: 10px;
	color: white;
	text-decoration: none;
}
tbody tr td a:hover{
	background-color:hsla(120,100%,75%,0.3);
}


</style>

</head>
<body>

<header>
<input type="search" id="input-search" placeholder="Buscar aquí">

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
						<a href="#">Inicio</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
</header>
</body>
</html>
