    <!--   maquetacion html si sirve -->

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!~~ Indicators ~~>
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!~~ Wrapper for slides ~~>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="<?php echo $url; ?>vistas/images/Photos/9.jpg" alt="...">
                  <div class="carousel-caption">
                    <h3><strong>Fabricamos perfiles de plástico, para la presentación y acabados de escaleras para interiores, esta tiene dos presentaciones que son:</strong></h3>
                    <p><strong>
                      <ul>
                      <li>Lisas </li>
                      <li>Marmoleadas </li>
                    </ul>
                  </strong></p>
                  </div>
                </div>
                <div class="item">
                  <img src="<?php echo $url; ?>vistas/images/Photos/10.jpg" alt="...">
                      <div class="carousel-caption">
                        <h3><strong>Los perfiles de plásticos lisas, son de varios colores para adaptarse al acabado de la escalera u otro tipo de mueble de cocina o baño y mas </strong></h3>
                         <p><strong></strong></p>
                      </div>
                </div>
                <div class="item">
                  <img src="<?php echo $url; ?>vistas/images/Photos/15.jpg" alt="...">
                      <div class="carousel-caption">
                        <h3><strong>Por lo que respecta a los perfiles de plástico tipo mármol, son también de varias presentaciones, así como de colores </strong></h3>
                         <p><strong></strong></p>
                      </div>
                </div>
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
            </div>

<!--   maquetacion html dinamica si sirve -->
<!--    <?php
        $sql_slider=mysqli_query($con,"select * from slider where estado=1 order by orden");
        $nums_slides=mysqli_num_rows($sql_slider);
     ?>   
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <?php
              $active="active";
              while ($rw_slider=mysqli_fetch_array($sql_slider)){
            ?>

              <!~~ Indicators ~~>

              <!~~ Wrapper for slides ~~>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img  src="<?php echo $urlServidor; ?>img/slider/<?php echo $rw_slider['url_image'];?>" alt="...">
                  <div class="carousel-caption">
                    <h3><strong><?php echo $rw_slider['titulo'];?></strong></h3>
                    <p><strong><?php echo $rw_slider['descripcion'];?></strong></p>
                    <a class='btn btn-lg btn-<?php echo $rw_slider['estilo_boton'];?> text-right' data-animation="fadeInLeft" data-delay="800ms" href="<?php echo $rw_slider['url_boton'];?>" style="padding: 15px;"><?php echo $rw_slider['texto_boton'];?></a>
                  </div>
                </div>
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

       
                   <?php
                        $active="";
                    }
                ?>
        </div>-->