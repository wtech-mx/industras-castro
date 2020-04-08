		<div id="colorlib-main">

		<?php 
			include("slide.php");
		?>

			<div class="colorlib-about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?php echo $url; ?>vistas/images/img_bg_2.jpg);">
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">Bienvenido a </span>
								<h2 class="colorlib-heading">Industrias Castros</h2>
								<h3>Quienes somos:</h3>
								<p>Somos una empresa mexicana que fabrica perfiles y separadores de platico para la presentación en las escaleras interiores y colocación de pisos </p>
							</div>
							<div class="row padding">
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps active">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Honestidad<br></h3>
									</a>
								</div>
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Puntuales <br></h3>
									</a>
								</div>
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Honrados <br></h3>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(<?php echo $url; ?>vistas/images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="colorlib-narrow-content">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-skyline"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="1539" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">perfiles  </span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-engineer"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="3653" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Separadores </span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-architect-with-helmet"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="5987" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Construccion</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-worker"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="3999" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Acabados</span>
						</div>
					</div>
				</div>
			</div>

<?php 

        
        $conexion = conexion($bd_config);
        // Obtenemos los post
        $posts = obtener_post($blog_config['post_por_pagina'], $conexion);
        $posts2 = obtener_post($blog_config2['post_por_pagina2'], $conexion);


?>

			<div class="colorlib-blog">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta"></span>
							<h2 class="colorlib-heading">Noticias y Tips</h2>
						</div>
					</div>

					<div class="row">

						 <?php foreach($posts as $post): ?>
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<a href="<?php echo $urlServidor; ?>single.php?id=<?php echo $post['id']; ?>" class="blog-img">
									<img class="img-responsive" src="<?php echo $urlServidor; ?>imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo'] ?>">
								</a>
								<div class="desc">
									<span><small><?php echo fecha($post['fecha']); ?></small><small></small></span>
									<h3><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo'] ?></a></h3>
									<p><?php echo $post['extracto'] ?></p>
								</div>
							</div>
						</div>
						 <?php endforeach; ?>          
					</div>


<style type="text/css" media="screen">
	/* --- Paginacion --- */

.paginacion {
	margin-bottom: 30px;
}

.paginacion ul {
	list-style: none;
	text-align: center;
}

.paginacion ul li {
	display: inline-block;
	margin:0 5px;
	color:#fff;
}

.paginacion ul li a {
	display: block;
	padding:10px 20px;
	background: #595959;
	color:#fff;
}

.paginacion ul li a:hover {
	background: #051240;
	text-decoration: none;
}

.paginacion ul .active {
	background: #051240;
	padding:10px 20px;
}

.paginacion ul .disabled{
	background: #a8a8a8;
	padding:10px 20px;
	cursor: not-allowed;
}

.paginacion ul .disabled:hover {
	background: #a8a8a8;
}

</style>
			            <section class="paginacion">
		                <ul>
		                    <?php 
		                        # Establecemos el numero de paginas
		                        $numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexion);
		                    ?>
		                    <!-- Mostramos el boton para retroceder una pagina -->
		                    <?php if (pagina_actual() === 1): ?>
		                        <li class="disabled">&laquo;</li>
		                    <?php else: ?>
		                        <li><a href="index.php?p=<?php echo pagina_actual() - 1?>#blog">&laquo;</a></li>
		                    <?php endif; ?>

		                    <!-- Creamos un elemento li por cada pagina que tengamos -->
		                    <?php for ($i = 1; $i <= $numero_paginas; $i++): ?>
		                        <!-- Agregamos la clase active en la pagina actual -->
		                        <?php if (pagina_actual() === $i): ?>
		                            <li class="active">
		                                <?php echo $i; ?>
		                            </li>
		                        <?php else: ?>
		                            <li>
		                                <a href="index.php?p=<?php echo $i?>#blog"><?php echo $i; ?></a>
		                            </li>
		                        <?php endif; ?>
		                    <?php endfor; ?>

		                    <!-- Mostramos el boton para avanzar una pagina -->
		                    <?php if (pagina_actual() == $numero_paginas): ?>
		                        <li class="disabled">&raquo;</li>
		                    <?php else: ?>
		                        <li><a href="index.php?p=<?php echo pagina_actual() + 1; ?>#blog">&raquo;</a></li>
		                    <?php endif; ?>
		                </ul>
		            </section>
            <!-- Paginacion -->
				</div>
			</div>

		</div>


	</div>
	