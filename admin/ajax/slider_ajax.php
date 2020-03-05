<?php
/* Llamar la Cadena de Conexion*/ 
include ("../admin/config.php");

$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
	//Elimino producto
	if (isset($_REQUEST['id'])){
		$id_slide=intval($_REQUEST['id']);
		if ($delete=mysqli_query($con,"delete from slider where id='$id_slide'")){
			$message= "Datos eliminados satisfactoriamente";
		} else {
			$error= "No se pudo eliminar los datos";
		}
	}
	
	
	$tables=" slider";
	$sWhere=" ";
	$sWhere.=" ";
	
	
	$sWhere.=" order by orden";
	include 'pagination.php'; //include pagination file
	//pagination variables
	$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
	$per_page = 12; //how much records you want to show
	$adjacents  = 4; //gap between pages after number of adjacents
	$offset = ($page - 1) * $per_page;
	
	//Count the total number of row in your table*/
	$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables  $sWhere ");
	if ($row= mysqli_fetch_array($count_query))
	{
	$numrows = $row['numrows'];
	}
	else {echo mysqli_error($con);}
	$total_pages = ceil($numrows/$per_page);
	$reload = './productslist.php';
	//main query to fetch the data
	$query = mysqli_query($con,"SELECT * FROM  $tables  $sWhere LIMIT $offset,$per_page");
	
	if (isset($message)){
		?>
		<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			<strong>Aviso!</strong> <?php echo $message;?>
		</div>
		
		<?php
	}
	if (isset($error)){
		?>
		<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			<strong>Error!</strong> <?php echo $error;?>
		</div>
		
		<?php
	}
	//loop through fetched data
	if ($numrows>0)	{
		?>
		
<div class="contenedor p-5">
	<div class="row">
			<div class="col-md-12">
				<h1>Carrusel</h1> <br>
				<table class="table table-bordered">
							<thead>
								<th>Imagen</th>
								<th>Titulo</th>
								<th>Texto a mostrar</th>
								<th>Acciones</th>
								
							</thead>
				<?php
				while($row = mysqli_fetch_array($query)){
					$url_image=$row['url_image'];
					$titulo=$row['titulo'];
					$descripcion=$row['descripcion'];
					$id_slide=$row['id'];
				
					?>
				<tr>

				<td style="width:auto;"><img src="img/slider/<?php echo $url_image;?>" alt="..." style="width:60%;"></td>
				<td><?php echo $titulo;?></td>
				<td><?php echo $descripcion;?></td>
				<td>
					<a class="btn btn-warning btn-sm" href="slidesedit.php?id=<?php echo intval($id_slide);?>">Editar</a>
					<a class="btn btn-danger btn-sm" onclick="eliminar_slide('<?php echo $id_slide;?>');">Eliminar</a>

				</td>
				<?php } ?>
				</tr>

				</table>

		</div>
	</div>
</div>
					




		
		<div class="table-pagination text-right">
			
			<?php echo paginate($reload, $page, $total_pages, $adjacents);?>
		</div>
		<?php
	}
}
?>
