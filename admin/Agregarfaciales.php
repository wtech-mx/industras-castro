<?php
$title="Agregar Nuevo ANT-DESP";
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
  <body>  	<?php include("top_menu.php");?>
<?php
	error_reporting( ~E_NOTICE ); // avoid notice
	if(isset($_POST['btnsave']))
	{
		$username = $_POST['user_name'];// user name
		$userjob = $_POST['user_job'];// user email
		
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];	

		$imgFile2 = $_FILES['user_image2']['name'];
		$tmp_dir2 = $_FILES['user_image2']['tmp_name'];
		$imgSize2 = $_FILES['user_image2']['size'];

		if(empty($username)){
			$errMSG = "Ingrese la marca";
		}
		else if(empty($userjob)){
			$errMSG = "Ingrese el tipo.";
		}
		else if(empty($imgFile)){
			$errMSG = "Seleccione el archivo de imagen.";
		}
		else if(empty($imgFile2)){
			$errMSG2 = "Seleccione el archivo de imagen 2.";
		}
		else{
			$upload_dir = '../galy/vistas/imagenes/'; // upload directory
			$upload_dir2 = '../galy/vistas/imagenes/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$imgExt2 = strtolower(pathinfo($imgFile2,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$valid_extensions2 = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
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
			$stmt = $DB_con->prepare('INSERT INTO faciales(Imagen_Marca,Imagen_Tipo,Imagen_Img,Imagen_Img2) VALUES(:uname, :ujob, :upic, :upic2)');
			$stmt->bindParam(':uname',$username);
			$stmt->bindParam(':ujob',$userjob);
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':upic2',$userpic2);

			
			if($stmt->execute())
			{
				$successMSG = "Nuevo registro insertado correctamente ...";
				header("refresh:1;faciales-ab.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "Error al insertar ...";
			}
		}
	}
?>

	
<div class="contenedor p-5">
	<div class="row-xl-6">
		<div class="col-md-12">
			  <form method="post" enctype="multipart/form-data" class="form-horizontal">
			    <table class="table table-bordered table-responsive">
			      <tr>
			        <td><label class="control-label">Titulo</label></td>
			        <td><input class="form-control" type="text" name="user_name" placeholder="Ingrese Titulo" value="<?php echo $username; ?>" /></td>
			      </tr>
			      <tr>
			        <td><label class="control-label">Descripcion</label></td>
			        <td><input class="form-control" type="text" name="user_job" placeholder="Ingrese Descripcion" value="<?php echo $userjob; ?>" /></td>
			      </tr>
			      <tr>
			        <td><label class="control-label">Imáge antes </label></td>
			        <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
			      </tr>
			      <tr>
			        <td><label class="control-label">Imágen despues</label></td>
			        <td><input class="input-group" type="file" name="user_image2" accept="image/*" /></td>
			      </tr>
			      <tr>
			        <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default"> <span class="glyphicon glyphicon-save"></span> &nbsp; Guardar Imagen </button></td>
			      </tr>
			    </table>
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
