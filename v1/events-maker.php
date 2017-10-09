<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mi Boda en Cusco | Events Maker</title>
  <!--  CSS's -->
  <link rel="stylesheet" href="css/bootstrap-4.0.css">
  <link rel="stylesheet" href="css/bootstrap-4.0-flex.css">
  <link rel="stylesheet" href="css/estilos-events-maker.css">

  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
  <div class="foto-cabecera" id="inicio">
    <img src="img/cabecera.jpg" width ="100%">
  </div>
  <div class="cont-logo">
    <div class="logo">
      <img src="img/logo-em.png" height="100%;">
    </div>
  </div>
  <div class="cont-menu">
    <div class="menu">
      <div class="item" id="somos">
        <div class="flecha">
          <img src="img/flecha.png">
        </div>
        <div class="contenido">
          Quienes Somos
        </div>
      </div>
      <div class="item" id="portafolio">
        <div class="flecha">
          <img src="img/flecha.png">
        </div>
        <div class="contenido">
          Portafolio
        </div>
      </div>
      <div class="item" id="servicios">
        <div class="flecha">
          <img src="img/flecha.png">
        </div>
        <div class="contenido">
          Servicios
        </div>
      </div>
      <div class="item" id="contacto">
        <div class="flecha">
          <img src="img/flecha.png">
        </div>
        <div class="contenido">
          Contacto
        </div>
      </div>
    </div>
  </div>
  <div class="l1">
    <div class="l11"></div>
    <div class="l12"></div>
    <div class="l13"></div>
    <div class="l14"></div>
  </div>
  <div class="cont-qs" id="somos1">
    <div class="verde-i">
      <img src="img/flechai.png">
    </div>
    <div class="qs-cont-contenido">
      <div class="qs-titulo">
        ¿QUIENES SOMOS?
      </div>
      <div class="qs-cont-texto">
        <div class="qs-texto">
          <img src="img/logo.png" alt="" id="logo-em">
        <p>
          &nbsp&nbspEquipo de profesionales especializados en la organización y producción  de eventos corporativos a toda escala,  contamos con amplia experiencia en los campos necesarios para la organización de un evento.

          Somos un equipo de profesionales expertos en producción de eventos, con un alto grado de exigencia, dinámico y eficaz orientado a aportar valor al diseño, organización y ejecución de eventos.
          Nuestra Misión Brindar soluciones integrales e innovadoras, con un alto nivel profesional para lograr impactar y asegurar el resultado esperado por nuestros clientes. PLANEAMOS, DISEÑAMOS, ORGANIZAMOS, PRODUCIMOS.
        </p>
        </div>
      </div>
    </div>
  </div>
  <div class="fondo1">
    <div class="imagen">
      <img src="img/f1.png" height="100%;">
    </div>
  </div>

  <div class="portafolio" id="portafolio1">
    <div class="p-cabeza">
      <div class="cont-titulo">
        <div class="titulo">
          PORTAFOLIO
        </div>
      </div>
      <div class="flecha">
        <img src="img/flechad.png">
      </div>
    </div>
    <div class="cont-fotos">
      <div class="fotos">
        <div id="carousel" class="flexslider">
          <ul class="slides">
          <?php
            $indexes = range(1, 41);
            shuffle($indexes);

            foreach ($indexes as $key => $value) {
              $img_src = 'img/events/em(' . $value . ').jpg';
              ?>
              <li><img src="<?php echo $img_src; ?>" alt=""></li>
              <?php
            }
          ?>          </ul>
        </div>
        <div id="slider" class="flexslider">
          <ul class="slides">
          <?php
            foreach ($indexes as $key => $value) {
              $img_src = 'img/events/em(' . $value . ').jpg';
              ?>
              <li><img src="<?php echo $img_src; ?>" alt=""></li>
              <?php
            }
          ?>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="cont-qs serv" id="servicios1">
    <div class="verde-i">
      <img src="img/flechai.png">
    </div>
    <div class="qs-cont-contenido">
      <div class="qs-titulo">
        SERVICIOS
      </div>
      <div class="qs-cont-texto">
        <div class="qs-texto">
          <ul>
            <li><img src="img/flechah.png">
              PRODUCCION <br>
              <small>Ferias, eventos corporativos, congresos, lanzamientos de productos, eventos artisticos, campañas BTL, eventos oficiales, team building.</small>
            </li>
            <li><img src="img/flechah.png"> LOGISTICA <br>
              <small>Stands feriales, toldos y estructuras, escenarios, tabladillos, mesas, sillas, tiendas de campaña, branding</small></li>
            <li><img src="img/flechah.png"> EQUIPOS TECNICOS <br>
              Fotografia y video, Mapping, equipos audiovisuales, luz y sonido, instalasiones electricas, produccion y supervision tecnica.</li>
            <li><img src="img/flechah.png"> PERSONAL <br>
              <small>Event planner, ambientadores, Anfitrionas, impulsadoras, personal técnico, personal de seguridad, personal de limpieza y mantenimiento para eventos</small></li>
            <li><img src="img/flechah.png"> CATERING ESPECIALIZADO <br>
              <small>Almuerzos y cenas especializadas, picnics al aire libre, alimentación en campamentos, cocteles, box lunch, coffe breaks, Bruchs, servicio de mozos y mensajería.</small></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="fondo2">
    <div class="imagen">
      <img src="img/f2.png" height="100%;">
    </div>
  </div>
  <div class="fondo3">
    <div class="imagen">
      <img src="img/f3.png" height="100%;">
    </div>
  </div>
  <div class="l2">
    <div class="l11"></div>
  </div>
  <div class="portafolio contacto" id="contacto1">
    <div class="p-cabeza">
      <div class="cont-titulo">
        <div class="titulo">
          CONTACTO
        </div>
      </div>
      <div class="flecha">
        <img src="img/flechad.png">
      </div>
    </div>
    <div class="cont-fotos" style="flex-direction: column; align-items: center;">
      <div class="fotos blanco contact">
        <div class="c-titulo">
          CUSCO
        </div>
        <br>
        <br>
        <div class="c-texto">
          Urb Santa Monica C-6
        </div>
        <br>
        <br>
        <div class="c-texto">
          T.984660101
        </div>
        <div class="c-texto">
          950311256
        </div>
        <br>
        <br>
        <div class="c-texto">
          info@eventsmakerperu.com
        </div>
      </div>
      <div class="formulario">
         <div class="container">
        <form id="events-contact" method="post" action="mailer-events.php" class="horizontal-form">
          <div class="form-group i-formulario">
            <label for="full-name" class="control-label col-sm-offset-2 col-sm-4">Empresa: </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="empresa" name="empresa">
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group i-formulario">
            <label for="country" class="control-label col-sm-offset-2 col-sm-4">Nombre y Apellido: </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="name" name="name">
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group i-formulario">
            <label for="email" class="control-label col-sm-offset-2 col-sm-4">Cargo: </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="cargo" name="cargo">
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group i-formulario">
            <label for="telefono" class="control-label col-sm-offset-2 col-sm-4">Teléfono: </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="telefono" name="telefono">
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group i-formulario">
            <label for="skype" class="control-label col-sm-offset-2 col-sm-4">Correo Electrónico: </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="email" name="email">
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group i-formulario">
            <label for="require" class="control-label col-sm-offset-2 col-sm-4">Servicio que requiere: </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="requirement" name="requirement">
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group i-formulario">
            <label for="message" class="control-label col-sm-offset-2 col-sm-4">Descripción: </label>
            <div class="col-sm-4">
              <textarea class="form-control" rows="3" id="descripcion" name="descripcion"></textarea>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group enviar">
            <button id="submit" class="btn btn-success col-sm-4 col-sm-offset-4 col-xs-12">Enviar</button>
          </div>
          <div class="clearfix"></div>
          <div id="form-messages"></div>
        </form>
      </div>
      </div>
    </div>
    <div class="l3">
      <div class="l11"></div>
    </div>
  </div>
  <div class="fondo4">
    <img src="img/f4.png" height="100%;">
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
   <script src="js/jquery-scrollto.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script defer src="js/jquery.flexslider.js"></script>
  <script src="js/local.js"></script>
  <script>
    $(document).ready(function() {
      $('.cont-menu').sticky({topSpacing:0});
    });

    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 210,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: true,
        sync: "#carousel",
        slideshowSpeed: 2500,
        smoothHeight: true,
      });
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
</body>
</html>