<?php
$title="Serv antes-despues";
/* Llamar la Cadena de Conexion*/ 
include ("admin/config.php");
$active="active";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title;?></title>
    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
  </head>
  <body>
	<?php include("top_menu.php");?>


	
<div class="contenedor p-5">
	<div class="row">
			<div class="col-md-12">
				<h2>Panel de Galerias</h2>
				<!--<a href="" class="btn btn-primary" style="color: #fff">Agregar Slide</a> -->
				<br>
				<br>
				<table class="table table-bordered">

				<thead>
					<th>Servicios</th>
					<th>Accion</th>
				</thead>

				<tr>
				<td>
					
					<h5>Tratamienots Faciales</h5>
				</td>
				<td>
					<a class="btn btn-primary" href="faciales-ab.php">Seleccionar</a>
				</td>	
				</tr>

				<tr>

				<td>
					
					<h5>Masajes</h5>
				</td>
				<td>
					<a class="btn btn-success" href="masajes-ab.php">Seleccionar</a>
				</td>	
				</tr>


				<tr>

				<td>
					
					<h5>Manicura y Pedicura</h5>
				</td>
				<td>
					<a class="btn btn-warning" href="manipedi-ab.php">Seleccionar</a>
				</td>	
				</tr>

				<tr>

				<td>
					
					<h5>Salon de belleza</h5>
				</td>
				<td>
					<a class="btn btn-danger" href="antes-despues.php">Seleccionar</a>
				</td>	
				</tr>

				</table>

		</div>
	</div>
</div>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
