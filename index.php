<!DOCTYPE html><!--El tipo de documento-->
<html lang="es"> <!-- El lenguaje de la página-->
  <head><!--Cabezera-->
    <link rel="stylesheet" href="estilos/estilos.css"><!--Conectar a  la hoja de estilos css-->
    <meta charset="utf-8"><!--Tipo de codificación del lenguaje-->
    <title>HANZELL RIVERA | Página de Hanzell Web</title>

    <!-- tipos de letras -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">

    <!-- carousel -->
    <link rel="stylesheet" href="owl/owl.carousel.min.css"> 
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">

<!--viewport es la pantalla del celular, va a estar adactado al ancho del dispositivo, y el usuario no  podra hacer zoom-->
<meta name="viewport" content="width=device-width,user-scalable=no">
<style>
#actualizar {

  text-decoration: none;
  color: white;

}
</style>
  </head>
  <body>

    <!-- API de whatsapp -->
    <a id="whatsapp"
    href="https://api.whatsapp.com/send?phone=50587146772"> <img src="imagenes/whatsapp.png" alt=""></a>

    <!--Encabezado-->
    <header>
      <div class="menu" ><!--Contenedor puede tener clases y id-->
        <div class="Contenedor">
          <p class="logo"> <a id="actualizar"href="index.php">HANZELL RIVERA</a></p>
          <img class="menu-icon" src="imagenes/menu.png" alt="">
          <nav><!--Todo menu debe de ir un nav-->
            <ul><!--Lista sin ordenar-->
              <li><a href="#sobre-mi">Sobre mí</a></li>
              <li><a href="#servicios">Servicios</a></li>
              <li><a href="#mis-trabajos">Mis Trabajos</a></li>
              <li><a href="#por-que-trabajar">¿Por qué trabajar conmigo?</a></li>
              <li><a href="#blog">Blog</a></li>
              <li><a href="#contacto">Contacto</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <div class="Contenedor" id="Contenedor-titulo-flex">
        <div class="Contenedor-titulo">
        <h1>Hanzell Rivera</h1><!--Titular principal de la pagina, solo debe a ver uno en la página-->
        <h2>Desarrollador de Aplicaciones Web</h2>
        <a href="#mis-trabajos">VER MIS TRABAJOS</a>
      </div>
      </div>
    </header>
    <main><!--sirve para que google entienda que este es el contenido principal-->
<section id="sobre-mi"><!--Una seccion-->
  <div class="Contenedor">
    <h3>Sobre mí</h3>
    <div class="Contenedor-sobremi">
      <div class="computadoras">
        <img src="imagenes/computadoras.png"><!--img para imagenes principales, no de fondos-->
      </div>
      <div class="texto">
        <p>Mi nombre es Hanzell Rivera y soy desarrollador de aplicaciones web.</p>
        <p>Me aseguro de utilizar siempre las últimas tecnologías de desarrollo web: HTML5, CSS3, JavaScript, jQuery, Angular, Nodejs, MongoDB, Wordpress. Si necesitás una página web moderna, funcional, que se adapte a todos los diferentes tipos de pantalla, te aseguro que llegaste al lugar correcto.</p>
        <p>Podes ponerte en contacto conmigo a través de Facebook, Linkedin o completando el formulario de contacto que se encuentra al final de mi sitio web.</p>
        <a href="#mis-trabajos">VER MIS TRABAJOS</a>
      </div>
    </div>

  </div>

</section>
<section id="servicios">
  <div class="Contenedor">
    <h3>Servicios</h3>
    <div class="Contenedor-servicios">
      <div class="servicios violeta">
        <h4>Diseño Web</h4>
        <p>Páginas web atractivas y funcionales con el objetivo de satisfacer todas tus expectativas. La importancia del diseño es fundamental para tener éxito y atraer a tus visitantes. También lo es la velocidad de carga del sitio web, deben ser rápidos para que el visitante tenga la mejor experiencia</p>
        <img class="icono" src="imagenes/monitor.png">
        <img class="ondas" src="imagenes/waves.png">

      </div>
      <div class="servicios celeste">
        <h4>Responsive Design</h4>
        <p>Hoy en día las páginas web se ven en multitud de dispositivos como tablets, celulares, libros electrónicos, notebooks, PCs, etc. La tecnología móvil es el presente y el futuro. Para eso es importante y me aseguro de que tu sitio web sea compatible con todos los tamaños de pantalla de esta época moderna</p>
        <img class="icono" src="imagenes/mobile.png">
        <img class="ondas" src="imagenes/waves.png">

      </div>
      <div class="servicios violeta">
        <h4>SEO</h4>
        <p>Al crear sitios web, tengo muy en cuenta la optimización de motores de búsqueda (SEO). Llevo a cabo prácticas de SEO estándar en cada página del sitio web, lo que permite que tu sitio tenga una clasificación más alta en los resultados de Google y asi generar mas tráfico a la web</p>
        <img class="icono" src="imagenes/seo.png">
        <img class="ondas" src="imagenes/waves.png">

      </div>
      <div class="servicios celeste">
        <h4>Autoadministrable</h4>
        <p>Es importante que puedas administrar tu página web tu mismo, desde cualquier lugar y en cualquier momento. Desarrollo sistemas de gestión de contenido que te permiten ver los datos de tu página web y editar el contenido que quieras, lo que te permite mantenerte actualizado</p>
        <img class="icono" src="imagenes/wordpress.png">
        <img class="ondas" src="imagenes/waves.png">

      </div>
      <div class="servicios violeta">
        <h4>Mantenimiento</h4>
        <p>Podés contactarme si necesitas actualizar tu página web, agregar nuevas secciones o cualquier cambio que necesites. Esto es perfecto para los sitios web de pequeñas empresas, donde no se necesita un diseñador de páginas web a tiempo completo, sino solo en distintas ocasiones</p>
        <img class="icono" src="imagenes/mante.png">
        <img class="ondas" src="imagenes/waves.png">

      </div>
      <div class="servicios celeste">
        <h4>Marketing Digital</h4>
        <p>Utilizo las herramientas mas importantes como Google Adwords y Google Analytics, para que tu negocio aparezca en los resultados de búsqueda de Google justo cuando alguien te necesita y analizar como los usuarios interactúan con tu página web</p>
        <img class="icono" src="imagenes/marketing.png">
        <img class="ondas" src="imagenes/waves.png">

      </div>

    </div>

  </div>

</section>
<section  id="mis-trabajos">
  <div class="Contenedor"><!--libreria owl carousel 2-->
    <h3>Mis Trabajos</h3>
    <div class="owl-carousel owl-theme">
    <div class="item"><a href=""><img src="imagenes/sassy.jpg"></a></div>
    <div class="item"><a href=""><img src="imagenes/chaia.jpg"></a></div>
    <div class="item"><a href=""><img src="imagenes/alimentar.jpg"></a></div>
    <div class="item"><a href=""><img src="imagenes/sassy.jpg"></a></div>
    <div class="item"><a href=""><img src="imagenes/alimentar.jpg"></a></div>
    <div class="item"><a href=""><img src="imagenes/sassy.jpg"></a></div>
    <div class="item"><a href=""><img src="imagenes/chaia.jpg"></a></div>

</div>

  </div>

</section>
<section id="por-que-trabajar">
  <div class="Contenedor">
    <h3>¿Por qué trabajar conmigo?</h3>
    <div class="contenedor-trabajar">
      <div class="item">
        <ul>
          <li><img src="imagenes/velocidad.png"></li>
          <li>Velocidad</li>
          <li>Me aseguro de que tu web cargue entre 2 y 4 segundos (depende de la cantidad de contenido del sitio). Si una web tarda más de 5 segundos en cargar, el 70% de los usuarios lo cierra y no vuelve a entrar más</li>
        </ul>
      </div>
      <div class="item">
        <ul>
          <li><img src="imagenes/mantenimiento.png"></li>
          <li>Mantenimiento</li>
          <li>Mantengo una comunicación constante con mi cliente, para enseñarle a modificar contenido mediante el panel de Wordpress o para cualquier duda/cambio que quiera hacer en su sitio web</li>
        </ul>
      </div>
      <div class="item">
        <ul>
          <li><img src="imagenes/mobile2.png"></li>
          <li>Mobile Priority</li>
          <li>Cada vez mas personas navegan desde sus celulares en cualquier parte del mundo. Me aseguro de que tu web esté optimizada para cualquier tipo de dispositivo móvil</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section id="blog">
  <div class="Contenedor">
    <h3>Blog</h3>
    <div class="contenedor-publicaciones">
      <div class="publicacion">
        <img src="imagenes/blog1.jpg">
        <div class="contenido">
        <h4>No alcanza con tener solamente una página web</h4>
        <p>¿Querés aprender cuales son las herramientas que usan las mejores marcas para generar tráfico?</p>
        <a href="">Leer más →</a>
        </div>
      </div>
      <div class="publicacion">
        <img src="imagenes/blog2.jpg">
        <div class="contenido">
        <h4>¿Qué es el remarketing y como utilizarlo?</h4>
        <p>El remarketing es una de las técnicas mas utlizadas por las mejores companías! ¿Querés saber de que se trata?</p>
        <a href="">Leer más →</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="que-esperas">
  <div class="Contenedor">
    <h3>¿Qué esperas para tener tu página web?</h3>
    <a href="#contacto">CHARLEMOS</a>
  </div>
</section>
<section id="contacto">
  <?php
      if(@$_GET['i']=='ok') { // QUIERE DECIR QUE EL FORMULARIO SE ENVIO CORRECTAMENTE ?>

      <h3>La consulta se envio correctamente. Nos contactaremos a la brevedad.</h3>

      <?php
      } else{
      ?>
  <div class="Contenedor">
    <h3>Contacto</h3>
    <form class="" action="envio-formulario.php" method="post" enctype="multipart/form-data"><!--post para que los datos se envien en forma oculta multipart para enviar archivos adjuntos-->
      <input type="text" placeholder="Nombre" name="nombre" required><!--php llama lo que este en el atributo name-->
      <input type="email" placeholder="Email" name="email" required>
      <textarea placeholder="Mensaje" name="mensaje" required></textarea>
      <input type="submit" value="ENVIAR MENSAJE"><!--submit es cuando se envia el formulario. El value es el boton-->
    </form>
    <?php } ?>

    <div class="contacto-info">
      <div class="mail"> <img src="imagenes/mail-icon.png" alt="">hanzellrivera95@gmail.com</div>
      <div class="whatssap"> <img src="imagenes/whatsapp-icon.png" alt="">50587146772</div>
    </div>

  </div>

</section>

    </main>
    <!--Para instalar el jQuery desde jQuery CDN o https://code.jquery.com/-->
    <footer><!--Pie de página-->

      <div class="Contenedor">
        <div class="redes">
          <a href="https://www.facebook.com/hanzellerivera/"> <img src="imagenes/facebook.png" alt="imagen-facebook"> </a>
          <a href="https://www.instagram.com/hanzellriverap/"> <img src="imagenes/instagram.png" alt="imagen-medium"> <title>https://www.flaticon.es/autores/pixel-perfect</title> </a>
          <a href="https://github.com/RiveraHan"> <img src="imagenes/github.png" alt="imagen-github"> </a>
          <a href="https://www.linkedin.com/in/hanzell-rivera-027539175/"> <img src="imagenes/linkedin.png" alt="imagen-linkedin"> </a>
        </div>
        <div class="parrafo">
          <p> &copy2020 Hanzell Rivera | Desarrollador Web Nicaragua. Todos los derechos reservados</p>
        </div>
      </div>

    </footer>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script><!--Para descargar e instalar las librerias de owl carousel 2 https://owlcarousel2.github.io-->
    <script>
    $('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots:false,
  responsive:{
      0:{//para mostrar en telefono
          items:1
      },
      600:{//para mostrar en tablet
          items:3
      },
      1000:{//para mostrar en escritorio
          items:4
      }
  }
})
    </script>
    <script>

    $(document).ready(function(){

      $(window).scroll(function(){
        scroll = $(window).scrollTop();
        if (scroll > 100) {
          $('.menu').css({"position":"fixed"});
          $('.menu').css({"width":"100%"});
          $('.menu').css({"top":"0"});
          $('.menu').css({"background":"#fff"});
          $('.menu a').css({"color":"#000"});
          $('.logo').css({"color":"#000"});
          $('.menu').css({"box-shadow":"rgba(0, 0, 0, 0.22) 6px 1px 1px"});
          $('.menu').css({"z-index":"10"});/*Va encima de cualquier elemento*/
          // $('.menu nav ul li').css({"background":"#5cb8ff"});
        } else {
          $('.menu').css({"position":"relative"});/*Posicion por defecto*/
          $('.menu').css({"background":"transparent"});
          $('.menu').css({"box-shadow":"0 0 0"});
          $('.menu a').css({"color":"#fff"});
          $('.logo').css({"color":"#fff"});
        }
      })

      $('.menu-icon').click(function(){
        $('header nav').slideToggle();/*El combina el alideDown y slideUP*/
      })

    })

    </script>
  </body>
</html>
