<?php
/*
 * Template name: Events Maker Template
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
  <link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/css/estilos-events-maker.css">
  <?php wp_head(); ?>
</head>
<body>
  <div class="foto-cabecera" id="inicio">
    <img src="<?php bloginfo('template_url' ); ?>/img/cabecera.jpg" width ="100%">
  </div>
  <div class="cont-logo">
    <div class="logo">
      <img src="<?php bloginfo('template_url' ); ?>/img/logo-em.png" height="100%;">
    </div>
  </div>
  <div class="cont-menu">
    <div class="menu">
      <div class="item" id="somos">
        <div class="flecha">
          <img src="<?php bloginfo('template_url' ); ?>/img/flecha.png">
        </div>
        <div class="contenido">
          <?php _e( 'Quienes Somos', 'mibodaencusco' ); ?>
        </div>
      </div>
      <div class="item" id="portafolio">
        <div class="flecha">
          <img src="<?php bloginfo('template_url' ); ?>/img/flecha.png">
        </div>
        <div class="contenido">
          <?php _e( 'Portafolio', 'mibodaencusco' ); ?>
        </div>
      </div>
      <div class="item" id="servicios">
        <div class="flecha">
          <img src="<?php bloginfo('template_url' ); ?>/img/flecha.png">
        </div>
        <div class="contenido">
          <?php _e( 'Servicios', 'mibodaencusco' ); ?>
        </div>
      </div>
      <div class="item" id="contacto">
        <div class="flecha">
          <img src="<?php bloginfo('template_url' ); ?>/img/flecha.png">
        </div>
        <div class="contenido">
          <?php _e( 'Contacto', 'mibodaencusco' ); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Language selector -->
  <div class="lang-selector events-maker">
    <?php if ( is_active_sidebar( 'menu-widgets' ) ) : ?>
      <img src="<?php bloginfo('template_url'); ?>/img/lang.png" height="50" width="50" class="lang-selector-img">
      <?php dynamic_sidebar( 'menu-widgets' ); ?>
    <?php endif; ?>
  </div>
  <!-- /Language selector -->
  <div class="l1">
    <div class="l11"></div>
    <div class="l12"></div>
    <div class="l13"></div>
    <div class="l14"></div>
  </div>
  <div class="cont-qs" id="somos1">
    <div class="verde-i">
      <img src="<?php bloginfo('template_url' ); ?>/img/flechai.png">
    </div>
    <?php query_posts( array('page_id' => pll_get_post(20) ) ); ?>
    <?php the_post(); ?>
    <div class="qs-cont-contenido">
      <div class="qs-titulo">
        <?php the_title(); ?>
      </div>
      <div class="qs-cont-texto">
        <div class="qs-texto">
          <img src="<?php bloginfo('template_url' ); ?>/img/logo.png" alt="" id="logo-em">
           <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="fondo1">
    <div class="imagen">
      <img src="<?php bloginfo('template_url' ); ?>/img/f1.png" height="100%;">
    </div>
  </div>
  <div class="portafolio" id="portafolio1">
    <div class="p-cabeza">
      <div class="cont-titulo">
        <div class="titulo text-uppercase">
          <?php _e('Portafolio', 'mibodaencusco'); ?>
        </div>
      </div>
      <div class="flecha">
        <img src="<?php bloginfo('template_url' ); ?>/img/flechad.png">
      </div>
    </div>
    <div class="cont-fotos">
      <div class="fotos">
        <?php echo do_shortcode('[wonderplugin_gallery id="2"]'); ?>
      </div>
    </div>
  </div>
  <?php query_posts( array('page_id' => pll_get_post(27) ) ); ?>
  <?php the_post(); ?>
  <div class="cont-qs serv" id="servicios1">
    <div class="verde-i">
      <img src="<?php bloginfo('template_url' ); ?>/img/flechai.png">
    </div>
    <div class="qs-cont-contenido">
      <div class="qs-titulo">
        <?php the_title(); ?>
      </div>
      <div class="qs-cont-texto">
        <div class="qs-texto">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="fondo2">
    <div class="imagen">
      <img src="<?php bloginfo('template_url' ); ?>/img/f2.png" height="100%;">
    </div>
  </div>
  <div class="fondo3">
    <div class="imagen">
      <img src="<?php bloginfo('template_url' ); ?>/img/f3.png" height="100%;">
    </div>
  </div>
  <div class="l2">
    <div class="l11"></div>
  </div>
  <?php query_posts( array('page_id' => pll_get_post(58) ) ); ?>
  <?php the_post(); ?>
  <div class="portafolio contacto" id="contacto1">
    <div class="p-cabeza">
      <div class="cont-titulo">
        <div class="titulo">
          <?php the_title(); ?>
        </div>
      </div>
      <div class="flecha">
        <img src="<?php bloginfo('template_url' ); ?>/img/flechad.png">
      </div>
    </div>
    <?php the_content(); ?>
    <div class="l3">
      <div class="l11"></div>
    </div>
  </div>
  <div class="fondo4">
    <img src="<?php bloginfo('template_url' ); ?>/img/f4.png" height="100%;">
  </div>
  <script src="<?php bloginfo('template_url' ); ?>/js/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url' ); ?>/js/bootstrap.js"></script>
   <script src="<?php bloginfo('template_url' ); ?>/js/jquery-scrollto.js"></script>
  <script src="<?php bloginfo('template_url' ); ?>/js/jquery.sticky.js"></script>
  <script>
    $(document).ready(function() {
      $('.cont-menu').sticky({topSpacing:0});
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
    $('#servicios').click(function(){
        $('#servicios1').ScrollTo({
          duration: 2000,
          easing: 'linear'
      });
    });
  </script>
  <?php wp_footer(); ?>
</body>
</html>