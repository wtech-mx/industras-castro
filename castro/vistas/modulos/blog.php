<div id="colorlib-page">
	<div id="colorlib-main">
		<div class="colorlib-work">
			<div class="colorlib-narrow-content">					
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
                        <?php foreach($posts2 as $posts2): ?>
                        <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="blog-entry">
                                <a class="blog-img">
                                    <img class="img-responsive" src="<?php echo $urlServidor; ?>imagenes/<?php echo $posts2['thumb']; ?>" alt="<?php echo $posts2['titulo'] ?>">
                                </a>
                                <div class="desc">
                                    <span><small><?php echo fecha($posts2['fecha']); ?></small></span>
                                    <h3><?php echo $posts2['titulo'] ?></a></h3>
                                    <p><?php echo $posts2['texto'] ?></p>
                                </div>
                            </div>
                        </div>
                         <?php endforeach; ?>          
                    </div>
                </div>
            </div>
	
		<!-- 	<section class="paginacion">
                <ul>
                    <?php 
                        # Establecemos el numero de paginas
                        $numero_paginas = numero_paginas($blog_config2['post_por_pagina2'], $conexion);
                    ?>
                    Mostramos el boton para retroceder una pagina 
                    <?php if (pagina_actual() === 1): ?>
                        <li class="disabled">&laquo;</li>
                    <?php else: ?>
                        <li><a href="blog.php?p=<?php echo pagina_actual() - 1?>#blog">&laquo;</a></li>
                    <?php endif; ?>

                    Creamos un elemento li por cada pagina que tengamos
                    <?php for ($i = 1; $i <= $numero_paginas; $i++): ?>
                        Agregamos la clase active en la pagina actual 
                        <?php if (pagina_actual() === $i): ?>
                            <li class="active">
                                <?php echo $i; ?>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="blog.php?p=<?php echo $i?>#blog"><?php echo $i; ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endfor; ?>

                    Mostramos el boton para avanzar una pagina 
                    <?php if (pagina_actual() == $numero_paginas): ?>
                        <li class="disabled">&raquo;</li>
                    <?php else: ?>
                        <li><a href="blog.php?p=<?php echo pagina_actual() + 1; ?>#blog">&raquo;</a></li>
                    <?php endif; ?>
                </ul>
			</section>-->
			</div>
		</div>
	</div>
</div>