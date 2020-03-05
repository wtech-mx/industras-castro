<?php 
require '../views/estilos.php'; 
//include ("../config/conexion.php");

?>

<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Pagina <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../admin/index.php">Noticias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../sliderslist.php">Carrusel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../servicios-ad.php">Antes y Despues</a>
      </li>
    </ul>
  </div>
</nav>


<div class="contenedor p-5">
	<h2>Panel de Control</h2>
	<a href="nuevo.php" class="btn btn-success p-3">Nuevo Post</a>
	<a href="cerrar.php"class="btn btn-dark p-3">Cerrar Sesion</a>

	<?php foreach($posts as $post): ?>
	<section class="post">
		<article>
			<h2 class="titulo"><?php echo $post['id'] . '.- ' . $post['titulo']; ?></h2>
			<a type="button" class="btn btn-warning" href="editar.php?id=<?php echo $post['id']; ?>">Editar</a>
			<a type="button" class="btn btn-primary" href="<?php echo ver ?>single.php?id=<?php echo $post['id']; ?>">Ver</a>
			<a type="button" class="btn btn-danger" href="borrar.php?id=<?php echo $post['id']; ?>">Borrar</a>


		</article>
	</section>
	<?php endforeach; ?>
</div>

<?php require '../paginacion.php'; ?>





