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
error_reporting( ~E_NOTICE );	

if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
{
	$id = $_GET['edit_id'];
	$stmt_edit = $DB_con->prepare('SELECT Imagen_Marca, Imagen_Tipo, Imagen_Img, Imagen_Img2 FROM tbl_imagenes WHERE Imagen_ID =:uid');
	$stmt_edit->execute(array(':uid'=>$id));
	$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
	extract($edit_row);
}


if(isset($_POST['btn_save_updates']))
{
	$username = $_POST['user_name'];// user name
	$userjob = $_POST['user_job'];// user email
		
	$imgFile = $_FILES['user_image']['name'];
	$tmp_dir = $_FILES['user_image']['tmp_name'];
	$imgSize = $_FILES['user_image']['size'];

	$imgFile2 = $_FILES['user_image2']['name'];
	$tmp_dir2 = $_FILES['user_image2']['tmp_name'];
	$imgSize2 = $_FILES['user_image2']['size'];
				
	if($imgFile)
	{
		$upload_dir = '../galy/vistas/imagenes/'; // upload directory	
		$upload_dir2 = '../galy/vistas/imagenes/'; // upload directory

		$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		$imgExt2 = strtolower(pathinfo($imgFile2,PATHINFO_EXTENSION)); // get image extension

		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		$valid_extensions2 = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

		$userpic = rand(10000,10000000).".".$imgExt;
		$userpic2 = rand(10000,10000000).".".$imgExt2;

			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '1MB'
				if($imgSize < 10000000){
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Su archivo es muy grande.";
				}
			}

			else{
				$errMSG = "Solo archivos JPG, JPEG, PNG & GIF son permitidos.";		
			}
			// allow valid image file formats
			if(in_array($imgExt2, $valid_extensions2)){			
				// Check file size '1MB'
				if($imgSize2 < 10000000)				{
					move_uploaded_file($tmp_dir2,$upload_dir2.$userpic2);
				}
				else{
					$errMSG2 = "Su archivo es muy grande.";
				}
			}
			else{
				$errMSG2 = "Solo archivos JPG, JPEG, PNG & GIF son permitidos.";		
			}
		}
					
	
	// if no error occured, continue ....
	if(!isset($errMSG)){
		$stmt = $DB_con->prepare('UPDATE tbl_imagenes SET Imagen_Marca=:uname, Imagen_Tipo=:ujob, Imagen_Img=:upic, Imagen_Img2=:upic2 WHERE Imagen_ID=:uid');
		$stmt->bindParam(':uname',$username);
		$stmt->bindParam(':ujob',$userjob);
		$stmt->bindParam(':upic',$userpic);
		$stmt->bindParam(':uid',$id);
		$stmt->bindParam(':upic2',$userpic2);
			
		if($stmt->execute()){
			?>
<script>
			alert('Archivo editado correctamente ...');
			window.location.href='antes-despues.php';
			</script>
<?php
		}
		else{
			$errMSG = "Los datos no fueron actualizados !";
		}		
	}						
}	
?>

	
<div class="contenedor p-5">
	<div class="row-xl-6">
		<div class="col-md-12">
			  <form method="post" enctype="multipart/form-data" class="form-horizontal">
			    <?php
				if(isset($errMSG)){
					?>
			    <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $errMSG; ?> </div>
			    <?php
				}
				?>
				    <div class="form-group col-md-6 p-3">
				      <label for="inputEmail4">Titulo</label>
				      <input type="text" class="form-control" name="user_name" placeholder="Titulo" value="<?php echo $Imagen_Marca; ?>" required>
				    </div>

				    <div class="form-group col-md-6">
				      <label for="inputEmail4">Descripcion</label>
				      <input type="text" class="form-control" name="user_job" placeholder="Descripcion" value="<?php echo $Imagen_Tipo; ?>" required>
				    </div>


					<div class="form-group col-md-6">
					  <label class="control-label">Imáge Antes</label>
					  <img src="<?php echo estilos ?>imagenes/<?php echo $Imagen_Img; ?>" height="150" width="150" />
					  <input type="file" class="custom-file-input" name="user_image" accept="image/*">
					  <label class="custom-file-label" for="customFile">Selecciona foto</label>
					</div>

					<div class="form-group col-md-6">
					  <label class="control-label">Imáge Despues</label>
					  <img src="<?php echo estilos ?>imagenes/<?php echo $Imagen_Img2; ?>" height="150" width="150" />
					  <input type="file" class="custom-file-input" name="user_image2" accept="image/*">
					  <label class="custom-file-label" for="customFile">Selecciona foto</label>
					</div>

					<div class="form-group col-md-6">
			        	<button type="submit" name="btn_save_updates" class="btn btn-default">
			        		<span class="glyphicon glyphicon-save"></span> Actualizar 
			        	</button>
<!--			          <a class="btn btn-default" href="index.php">
			          	<span class="glyphicon glyphicon-backward"></span>
			          	 cancelar
			          </a>-->
					</div>
			  </form>
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
