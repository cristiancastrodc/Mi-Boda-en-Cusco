<?php
/*
 * Template name: Mi Boda en Cusco Template
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mi Boda en Cusco | Events Maker</title>
  <!--  CSS's -->
  <link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/css/bootstrap-4.0.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/css/bootstrap-4.0-flex.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/css/estilos-miboda-en-cusco.css">
  <?php wp_head(); ?>
</head>
<body>
  <div class="c-mbc-principal">
    <div class="cabecera-principal" id="inicio">
      <div class="logo-blanco">
        <img src="<?php bloginfo('template_url' ); ?>/img/logo-blanco.png">
      </div>
      <img src="<?php bloginfo('template_url' ); ?>/img/intro-mbc1.jpg" class="header-img">
    </div>
  </div>
  <div class="seccion menu" id="menu">
    <div class="menu-mbc">
      <div class="item-menu-mbc" id="somos">Somos</div>
      <div class="item-menu-mbc" id="servicios">Servicios</div>
      <div class="item-menu-mbc" id="portafolio">Portafolio</div>
      <div class="item-menu-mbc" id="contacto">Contacto</div>
    </div>
  </div>
  <div class="nueva-seccion" id="somos1">
    <div class="cont-titulo-p">
      <div class="titulo-img">
        <img src="<?php bloginfo('template_url' ); ?>/img/somos.png" width="100%;">
      </div>
    </div>
    <?php query_posts( array('page_id' => pll_get_posts(30) ) ); ?>
    <?php the_post(); ?>
    <div class="contenido-seccion">
      <div class="conte-somos">
        <?php the_content(); ?>
      </div>
    </div>
    <div class="sep">
      <div class="sep-sep">
        <img src="<?php bloginfo('template_url' ); ?>/img/sep.png" width="100%;">
      </div>
    </div>
  </div>
  <div class="nueva-seccion" id="servicios1">
    <div class="cont-titulo-p">
      <div class="titulo-img">
        <img src="<?php bloginfo('template_url' ); ?>/img/servicios.png" width="100%;">
      </div>
    </div>
    <div class="conte-seccion">
      <?php query_posts( array('page_id' => pll_get_posts(32) ) ); ?>
      <?php the_post(); ?>
      <div class="conte-servicios">
        <div id="servicios-esp">
          <div class="conte-servicios">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
      <div class="sep">
        <div class="sep-sep">
          <img src="<?php bloginfo('template_url' ); ?>/img/sep.png" width="100%;">
        </div>
      </div>
    </div>
  </div>
  <div class="nueva-seccion" id="portafolio1">
    <div class="cont-titulo-p">
      <div class="titulo-img">
        <img src="<?php bloginfo('template_url' ); ?>/img/portafolio.png" width="100%;">
      </div>
    </div>
    <div class="conte-portafolio">
      <?php echo do_shortcode('[wonderplugin_gallery id="1"]'); ?>
    </div>
    <div class="sep">
      <div class="sep-sep">
        <img src="img/sep.png" width="100%;">
      </div>
    </div>
  </div>
  <div class="nueva-seccion" id="contacto1">
    <div class="cont-titulo-p">
      <div class="titulo-img">
        <img src="<?php bloginfo('template_url' ); ?>/img/contacto.png" width="100%;">
      </div>
    </div>
    <div class="conte-contacto">
      <div class="contac-imagen">
        <div class="contact-conte-foto">
          <img src="<?php bloginfo('template_url' ); ?>/img/pajaro.png" height="100%">
        </div>
      </div>
      <?php query_posts( array('page_id' => pll_get_posts(50) ) ); ?>
      <?php the_post(); ?>
      <div class="contac-imagen">
        <div class="contact-conte">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="contac-imagen">
        <div class="contact-conte-foto">
          <img src="<?php bloginfo('template_url' ); ?>/img/pensamiento.png" height="100%">
        </div>
      </div>
      <?php if (get_field('telefono')): ?>
        <div class="contac-imagen">
          <div class="contact-conte">
            <?php the_field('telefono'); ?>
            <br>
            <small>
            Telefono
            </small>
          </div>
        </div>
      <?php endif ?>
      <?php if (get_field('emails')): ?>
        <div class="contac-imagen">
          <div class="contact-conte-foto">
            <img src="<?php bloginfo('template_url' ); ?>/img/arroba.png" height="100%">
          </div>
        </div>
        <div class="contac-imagen">
          <div class="contact-conte-correo">
            <?php the_field('emails'); ?>
          </div>
        </div>
      <?php endif ?>
    </div>
    <div class="sep" style="margin-top: -100px;">
      <div class="sep-sep">
        <img src="<?php bloginfo('template_url' ); ?>/img/sep.png" width="100%;">
      </div>
    </div>
  </div>
  <!-- Copyright Section -->
  <div id="copyright">
    <a href="http://insidelab.net" target="_blank"></a>
  </div>
  <script src="<?php bloginfo('template_url' ); ?>/js/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url' ); ?>/js/bootstrap.js"></script>
  <script src="<?php bloginfo('template_url' ); ?>/js/jquery.sticky.js"></script>
  <script src="<?php bloginfo('template_url' ); ?>/js/jquery-scrollto.js"></script>
  <script>
    $(document).ready(function() {
      var window_width = $(window).width();
      if (window_width > 640) {
        $('#menu').sticky({topSpacing:0});
      };
    });

    $('#top').click(function(){
        $('#inicio').ScrollTo({
          duration: 2000,
          easing: 'linear'
      });
    });
    $('#somos').click(function(){
        $('#somos1').ScrollTo({
          duration: 2000,
          easing: 'linear'
      });
    });
    $('#servicios').click(function(){
        $('#servicios1').ScrollTo({
          duration: 2000,
          easing: 'linear'
      });
    });
    $('#portafolio').click(function(){
        $('#portafolio1').ScrollTo({
          duration: 2000,
          easing: 'linear'
      });
    });
    $('#contacto').click(function(){
        $('#contacto1').ScrollTo({
          duration: 2000,
          easing: 'linear'
      });
    });
  </script>
  <?php wp_footer(); ?>
</body>
</html>