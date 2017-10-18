<?php
/*
 * Template name: Home Template
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
  <link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/css/estilo-index.css">
  <!--<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>style.css">-->
</head>
<body style="padding: 15px;">
  <div class="outer-wrapper">
    <div class="c-principal">
      <div class="b c-evm">
        <a href="<?php echo get_permalink(11); ?>">
          <div class="imagen-inicio">
            <img src="<?php bloginfo('template_url' ); ?>/img/logo-em.png" width="100%">
          </div>
        </a>
      </div>
      <div class="linea"></div>
      <div class="a">
        <a href="<?php the_permalink(); ?>">
          <div class="imagen-inicio">
            <img src="<?php bloginfo('template_url' ); ?>/img/logo-mbc1.png" width="100%">
          </div>
        </a>
      </div>
    </div>
  </div>
  <!-- Copyright Section -->
  <div id="copyright">
    <a href="http://insidelab.net" target="_blank"></a>
  </div>
    <!-- Scripts -->
  <script src="<?php bloginfo('template_url' ); ?>/js/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url' ); ?>/js/bootstrap.js"></script>
</body>
</html>
