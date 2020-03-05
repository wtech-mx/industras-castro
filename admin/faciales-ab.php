<?php
$title="antes-despues";
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

<?php 
// Condicional para validar el borrado de la imagen
if(isset($_GET['delete_id'])){
	// Selecciona imagen a borrar
	$stmt_select = $DB_con->prepare('SELECT Imagen_Img FROM faciales WHERE Imagen_ID =:uid');
	$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
	$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
	// Ruta de la imagen
	unlink("imagenes/".$imgRow['Imagen_Img']);
	
	// Consulta para eliminar el registro de la base de datos
	$stmt_delete = $DB_con->prepare('DELETE FROM faciales WHERE Imagen_ID =:uid');
	$stmt_delete->bindParam(':uid',$_GET['delete_id']);
	$stmt_delete->execute();
	// Redireccioa al inicio
	header("Location: faciales-ab.php");
}

?>

	
<div class="contenedor p-5">

	  <div class="col-xs-12 text-right">
		  <a href="Agregarfaciales.php" class="btn btn-default" ><span class="glyphicon glyphicon-plus"></span> Agregar </a>
	  </div>

	<div class="row p-3">
	  <div class="col text-center">
		<h1>Antes y Despues</h1> 
		<p>Faciales</p>
	  </div>

	  <div class="col text-left" style="padding: 25PX;">
		<a  class="btn btn-success" href="servicios-ad.php" title="">REGRESAR</a>
	  </div>
    <?php
	
	$stmt = $DB_con->prepare('SELECT Imagen_ID, Imagen_Marca, Imagen_Tipo, Imagen_Img, Imagen_Img2 FROM faciales ORDER BY Imagen_ID DESC');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>

			<div class="col-md-12" style="padding: 30px;">
				
				<table class="table-responsive table-bordered">
							<thead>
								<th>Imagen antes</th>
								<th>Imagen despues</th>
								<th>Titulo</th>
								<th>Descripcion</th>
								<th>Acciones</th>
								
							</thead>
				<tr>

				<td style="width: 33%"><img src="<?php echo estilos ?>imagenes/<?php echo $row['Imagen_Img']; ?>" alt="<?php echo estilos ?>imagenes/<?php echo $row['Imagen_Img']; ?>" style="width:40%;"></td>
				<td style="width: 33%"><img src="<?php echo estilos ?>imagenes/<?php echo $row['Imagen_Img2']; ?>" alt="<?php echo estilos ?>imagenes/<?php echo $row['Imagen_Img2']; ?>" style="width:40%;"></td>
				<td><?php echo  $Imagen_Marca;?></td>
				<td><?php echo $Imagen_Tipo;?></td>
				<td>
					<a class="btn btn-warning btn-sm" href="Editarfaciales-bf.php?edit_id=<?php echo $row['Imagen_ID']; ?>">Editar</a>
					<a class="btn btn-danger btn-sm" href="?delete_id=<?php echo $row['Imagen_ID']; ?>" >Eliminar</a>

				</td>
			
				</tr>

				</table>

		</div>
    <?php
		}
	}
	else
	{
		?>
    <div class="col-xs-12">
      <div class="alert alert-warning"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Datos no encontrados ... </div>
    </div>
    <?php
	}
	
?>
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
