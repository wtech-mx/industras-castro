    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="salon de belleza, Tratamientos Faciales, Masajes, Tratamientos Corporales, Manicura y Pedicura, Salon de belleza, salon , galy , galy spa" />
    <meta name="author" content="" />
  <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="salon de belleza | Tratamientos Faciales | Masajes | Tratamientos Corporales | Manicura y Pedicura | Salon de belleza"/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content="http://salongalyspa.com.mx/vistas/img/core-img/logo-galy.png"/>
    <meta property="og:site_name" content="Salon Galy Spa<"/>
    <meta property="og:description" content=""/>

    <link rel="stylesheet" href="<?php echo estilos ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo estilos ?>css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?php echo estilos ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo estilos ?>css/bootstrap.css.map">
    <link rel="stylesheet" href="<?php echo estilos ?>css/default-assets/classy-nav.css">
    <link rel="stylesheet" href="<?php echo estilos ?>css/flexslider.css">
    <link rel="stylesheet" href="<?php echo estilos ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo estilos ?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo estilos ?>css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo estilos ?>css/jquery-ui.min.css">  
    <link rel="stylesheet" href="<?php echo estilos ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo estilos ?>css/nice-select.css">
    <link rel="stylesheet" href="<?php echo estilos ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo estilos ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo estilos ?>style.css">
    <link rel="stylesheet" href="<?php echo estilos ?>gulpfile.js">
    <link rel="stylesheet" href="<?php echo estilos ?>css/paginacion.css">

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

     <!-- Header Area Start -->
    <header class="header-area">
        <!-- Search Form -->
        <div class="search-form d-flex align-items-center">
            <div class="container">
                <form action="buscar.php" method="get" name="busqueda">
                    <input type="search" name="busqueda" id="searchFormInput" placeholder="Escribe lo que deseas buscar">
                    <button type="submit"><i class="icon_search"></i></button>
                </form>            
            </div>
        </div>

        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="icon_phone"></i> <span>55 4432 0116</span></a>
                            <a href="#"><i class="icon_mail"></i> <span>salongalyspa@gmail.com</span></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="top-header-content">
                            <!-- Top Social Area -->
                            <div class="top-social-area ml-auto">
                                <a href="https://www.facebook.com/pg/Galyspa/services/" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
<!--                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="<?php echo link ?>"><img src="<?php echo estilos ?>img/core-img/logo-galy.png" alt="<?php estilos ?>img/core-img/logo-galy.png"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="<?php echo link ?>">Inicio</a></li>
                                    <li><a href="<?php echo estilos ?>../servicios">Servicios</a></li>
                                    <li><a href="<?php echo estilos ?>../nosotros">Nosotros</a></li>
                                    <li><a href="<?php echo estilos ?>../blog">blog</a></li>
                                    <li><a href="<?php echo estilos ?>../contacto">Contacto</a></li>
                                </ul>

                                <!-- Search -->
                                <div class="search-btn ml-4">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                                <!-- Book Now -->
                                <div class="book-now-btn ml-3 ml-lg-5">
                                    <a href="<?php echo estilos ?>../login">Iniciar Sesion<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->



    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(<?php echo estilos ?>img/HD/facial.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title"><?php echo $titulo; ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">

                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Blog Area Start -->
    <div class="roberto-news-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <h2></h2>
                    <!-- Single Blog Post Area -->
                    <?php foreach($resultados as $post): ?>
                    <div class="single-blog-post d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                        <a href="single.php?id=<?php echo $post['id']; ?>">
                            <img src="../galy/vistas/img/core-img/logo-galy.png" alt=""  style="position: absolute;top:0%;width: 15%;opacity: 0.5">
                            <img src="imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo'] ?>">
                        </a>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a href="#" class="post-author"><?php echo fecha($post['fecha']); ?></a>
                            </div>
                            <!-- Post Title -->
                            <a class="post-title" href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo'] ?></a>
                            <p><?php echo $post['extracto'] ?></p>
                            <a href="single.php?id=<?php echo $post['id']; ?>" class="btn continue-btn">Leer Más</a>
                        </div>
                    </div>
                    <?php endforeach; ?>  
            <!-- Paginacion -->
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
                        <li><a href="blog?p=<?php echo pagina_actual() - 1?>">&laquo;</a></li>
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
                                <a href="blog?p=<?php echo $i?>"><?php echo $i; ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <!-- Mostramos el boton para avanzar una pagina -->
                    <?php if (pagina_actual() == $numero_paginas): ?>
                        <li class="disabled">&raquo;</li>
                    <?php else: ?>
                        <li><a href="blog?p=<?php echo pagina_actual() + 1; ?>">&raquo;</a></li>
                    <?php endif; ?>
                </ul>
            </section>
            <!-- Paginacion -->
                </div>

                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="roberto-sidebar-area pl-md-4">

                        <!-- Newsletter -->
<!--                        <div class="single-widget-area mb-100">
                            <div class="newsletter-form">
                                <h5>Boletin informativo</h5>
                                <p>Suscríbase a nuestro boletín de noticias y reciba nuevas actualizaciones.</p>
                                
                                <form action="#" method="post">
                                    <input type="email" name="nl-email" id="nlEmail" class="form-control" placeholder="Enter your email...">
                                    <button type="submit" class="btn roberto-btn w-100">Subscribirse</button>
                                </form>
                            </div>
                        </div>-->

                    </div>
                </div>
            </div>
        </div>
    </div>

        <script src="<?php echo estilos ?>js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="<?php echo estilos ?>js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo estilos ?>js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="<?php echo estilos ?>js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="<?php echo estilos ?>js/default-assets/active.js"></script>

    <script src="<?php echo estilos ?>js/main.js"></script>

    <script src="<?php echo estilos ?>js/map-custom.js"></script>

