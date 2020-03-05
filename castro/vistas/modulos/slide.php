    <!--   maquetacion html si sirve -->

<!--            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!~~ Indicators ~~>
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!~~ Wrapper for slides ~~>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="<?php echo $url; ?>vistas/images/img_bg_1.jpg" alt="...">
                  <div class="carousel-caption">
                    <h3><strong>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</strong></h3>
                    <p><strong>Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </strong></p>
                  </div>
                </div>
                <div class="item">
                  <img src="<?php echo $url; ?>vistas/images/img_bg_2.jpg" alt="...">
                      <div class="carousel-caption">
                        <h3><strong>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</strong></h3>
                         <p><strong>Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</strong></p>
                      </div>
                </div>
                ...
              </div>

              <!~~ Controls ~~>
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>-->
<!--   maquetacion html dinamica si sirve -->
    <?php
        $sql_slider=mysqli_query($con,"select * from slider where estado=1 order by orden");
        $nums_slides=mysqli_num_rows($sql_slider);
     ?>   
                         <?php
                        $active="active";
                        while ($rw_slider=mysqli_fetch_array($sql_slider)){
                    ?>


            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="<?php echo $urlServidor; ?>img/slider/<?php echo $rw_slider['url_image'];?>" alt="...">
                  <div class="carousel-caption">
                    <h3><strong><?php echo $rw_slider['titulo'];?></strong></h3>
                    <p><strong><?php echo $rw_slider['descripcion'];?></strong></p>
                    <a class='btn btn-lg btn-<?php echo $rw_slider['estilo_boton'];?> text-right' data-animation="fadeInLeft" data-delay="800ms" href="<?php echo $rw_slider['url_boton'];?>" style="padding: 15px;"><?php echo $rw_slider['texto_boton'];?></a>
                  </div>
                </div>
                                                                      <?php
                            $active="";
                        }
                    ?>
              </div>

