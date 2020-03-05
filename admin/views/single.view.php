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
  <!-- Load Facebook SDK for JavaScript -->
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
                        <a class="nav-brand" href=" <?php echo link ?>"><img src="<?php echo estilos ?>img/core-img/logo-galy.png" alt="<?php estilos ?>img/core-img/logo-galy.png"></a>

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
<!--                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./index.html">- Home</a></li>
                                            <li><a href="./room.html">- Rooms</a></li>
                                            <li><a href="./single-room.html">- Single Rooms</a></li>
                                            <li><a href="./about.html">- About Us</a></li>
                                            <li><a href="./blog.html">- Blog</a></li>
                                            <li><a href="./single-blog.html">- Single Blog</a></li>
                                            <li><a href="./contact.html">- Contact</a></li>
                                            <li><a href="#">- Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>-->
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
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(<?php echo estilos ?>img/bg-img/17.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <div class="breadcrumb-post-content">
                            <h2 class="post-title"><?php echo $post['titulo'] ?></h2>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo fecha($post['fecha']); ?></a>
                            </div>
                        </div>
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
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail mb-50">
                        <img src="../galy/vistas/img/core-img/logo-galy.png" alt=""  style="position: absolute;top:0%;width: 15%;opacity: 0.5">
                        <img src="../admin/imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['thumb'] ?>">
                    </div>
                    <!-- Blog Details Text -->
                    <div class="blog-details-text">
                         <p><?php echo $post['texto'] ?></p>
                    </div>

                    <!-- Post Author Area -->
                    <div class="post-author-area d-flex align-items-center justify-content-between mb-50">

                        <!-- Author Social Info -->
                        <div class="author-social-info d-flex align-items-center">
                            <p>Share:</p>
                              <!-- Your share button code -->
                              <div class="fb-share-button" 
                                data-href="https://www.your-domain.com/your-page.html" 
                                data-layout="button_count">
                              </div>
                        </div>
                    </div>

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

                        <!-- Recent Post -->
<!--                        <div class="single-widget-area mb-100">
                            <h4 class="widget-title mb-30">Recent News</h4>

                            <!~~ Single Recent Post ~~>
                            <div class="single-recent-post d-flex">
                                <!~~ Thumb ~~>
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="<?php estilos ?>vistas/img/bg-img/29.jpg" alt=""></a>
                                </div>
                                <!~~ Content ~~>
                                <div class="post-content">
                                    <!~~ Post Meta ~~>
                                    <div class="post-meta">
                                        <a href="#" class="post-author">Jan 29, 2019</a>
                                        <a href="#" class="post-tutorial">Event</a>
                                    </div>
                                    <a href="single-blog.html" class="post-title">Proven Techniques Help You Herbal Breast</a>
                                </div>
                            </div>

                            <!~~ Single Recent Post ~~>
                            <div class="single-recent-post d-flex">
                                <!~~ Thumb ~~>
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="<?php estilos ?>vistas/img/bg-img/30.jpg" alt=""></a>
                                </div>
                                <!~~ Content ~~>
                                <div class="post-content">
                                    <!~~ Post Meta ~~>
                                    <div class="post-meta">
                                        <a href="#" class="post-author">Jan 29, 2019</a>
                                        <a href="#" class="post-tutorial">Event</a>
                                    </div>
                                    <a href="single-blog.html" class="post-title">Cooking On A George Foreman Grill</a>
                                </div>
                            </div>

                            <!~~ Single Recent Post ~~>
                            <div class="single-recent-post d-flex">
                                <!~~ Thumb ~~>
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="<?php estilos ?>vistas/img/bg-img/31.jpg" alt=""></a>
                                </div>
                                <!~~ Content ~~>
                                <div class="post-content">
                                    <!~~ Post Meta ~~>
                                    <div class="post-meta">
                                        <a href="#" class="post-author">Jan 29, 2019</a>
                                        <a href="#" class="post-tutorial">Event</a>
                                    </div>
                                    <a href="single-blog.html" class="post-title">Selecting The Right Hotel</a>
                                </div>
                            </div>

                            <!~~ Single Recent Post ~~>
                            <div class="single-recent-post d-flex">
                                <!~~ Thumb ~~>
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="<?php estilos ?>vistas/img/bg-img/32.jpg" alt=""></a>
                                </div>
                                <!~~ Content ~~>
                                <div class="post-content">
                                    <!~~ Post Meta ~~>
                                    <div class="post-meta">
                                        <a href="#" class="post-author">Jan 29, 2019</a>
                                        <a href="#" class="post-tutorial">Event</a>
                                    </div>
                                    <a href="single-blog.html" class="post-title">Comment Importance Of Human Life</a>
                                </div>
                            </div>
                        </div>
-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Area End -->

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


