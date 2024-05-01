<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>e-Genya</title>

  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/slick-theme.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    /* navbar */
    header nav {
      background: white;
      padding: 7px 0;
    }

    .nav-logo-container img {
      width: 100px;
    }

    nav ul {
      list-style: none;
      font-size: .9rem;
      padding: 0;
    }

    .nav-desktop {
      display: none;
    }

    .nav-mobile {
      display: block;
      position: relative;
    }

    .nav-user-icon {
      cursor: pointer;
      display: inline-block;
    }

    .title-section {
      color: var(--black);
      font-size: 1.6rem;
      margin: 0;
      margin-bottom: 10px;
      font-family: 'hn bold';
    }

    .title-section-lg {
      font-size: 1.6rem !important;
      /* margin-bottom: 0 !important; */
    }

    .title-section span {
      color: var(--gray);
    }

    @media(min-width: 992px) {
      .title-section {
        font-size: 2.7rem;
      }

      .title-section-lg {
        font-size: 3rem !important;
      }
    }

    .nav-mobile ul li i {
      font-size: 1.2rem;
    }

    .btn-secondary {
      background: var(--secondary);
      color: var(--black);
      border-radius: 10px;
      padding: 5px 30px;
      border: 1px solid var(--primary);
      cursor: pointer;
      transition: all .3s ease 0s;
      font-size: 1.2rem;
    }

    .btn-secondary:hover {
      background: var(--primary);
    }

    li.dropdown {
      display: inline-block;
      position: relative;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      right: 0;
      background-color: #f9f9f9;
      transform: translateX(15%);
      border-radius: 15px;
      min-width: 160px;
      box-shadow: 0px 8px 36px 0px rgb(0 0 0 / .2);
      z-index: 1;
      overflow: hidden;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:last-of-type {
      color: tomato;
    }



    .dropdown:hover .dropdown-content {
      display: block;
    }

    .nav-mobile-menu {
      display: none;
    }

    .open-mobile-menu .nav-mobile-menu {
      position: fixed;
      height: 100%;
      width: 100%;
      top: 0;
      z-index: 9999999999;
      display: block;
    }

    .open-mobile-menu .nav-mobile-menu .mobile-menu-container {
      position: absolute;
      width: 100vw;
      background: white;
      height: 100%;
      top: 0;
      right: 0;
      animation: enterMenu .5s ease 0s;
      padding: 7px 15px 15px 15px;
      z-index: 9999999999;
    }

    .open-mobile-menu .nav-mobile-menu .mobile-menu-container a {
      display: inline-block;
      padding: 12px 0;
    }

    .open-mobile-menu .black-filter {
      background: rgb(0 0 0 / .3);
      animation: enterBlackFilter .5s ease 0s;
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      z-index: 999999999;
    }

    .close-open-menu {
      text-align: end;
    }

    .close-menu i {
      font-size: 1.4rem;
    }

    .close-icon {
      font-size: 1.4rem;
    }

    @keyframes enterBlackFilter {
      from {
        visibility: hidden;
        opacity: 0;
      }

      to {
        visibility: visible;
        opacity: 1;
      }
    }

    @keyframes enterMenu {
      from {
        right: -100%;
      }

      to {
        right: 0;
      }
    }

    @media(min-width: 992px) {
      .nav-desktop {
        display: block;
      }

      .nav-mobile {
        display: none;
      }

      .dropdown-content a:hover {
        background-color: #f1f1f1;
      }

      .nav-logo-container img {
        width: 140px;
      }

      .nav-user-icon {
        font-size: 1rem;
        padding-bottom: 7px;
      }

      .open-mobile-menu .nav-mobile-menu {
        display: none;
      }
    }

    @media(min-width: 992px) {
      .header-nav {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 999;
      }
    }

    @media(min-width: 1200px) {
      .dropdown-content {
        transform: translateX(10%);
      }
    }

    /* navbar end */



    /* banner */
    /* .desktop-background-1{
      background: url('');
    } */
    .main-animation {
      position: absolute;
      top: 0;
      height: 100%;
      width: 100%;
      z-index: 0;
      object-fit: cover;
      object-position: center;
    }

    .main-animation-mobile {
      position: absolute;
      top: 0;
      height: 1000px;
      width: 100%;
      z-index: -1;
      object-fit: cover;
      object-position: center;

    }

    .banner-section .info-container h1 {
      font-size: 1.4rem;
      margin-top: 40px;

    }

    .banner-section .info-container p {
      font-size: 1rem;
    }

    .mobile-banner-img-container img {
      width: 100%;
    }

    @media(min-width: 992px) {
      .banner-section {
        height: 100vh;
        max-height: 800px;
      }

      .banner-section .info-container {
        position: absolute;
        width: 100%;
        top: 50%;
        transform: translateY(-50%);
      }

      .banner-section .info-container h1 {
        margin-bottom: 20px;
        font-size: 1.7rem;

      }

      .banner-section .info-container p {
        font-size: 1.2rem;
        margin-bottom: 15px;
      }

      .banner-section .info-container button {
        font-size: 1.2rem;
      }

      .banner-section .img-banner {
        right: 0;
        top: 50%;
        transform: translateY(-45%);
        max-width: 100%;
        max-height: 900px;
      }


    }


    /* banner end */


    /* clients */
    /* clients end */
  </style>
</head>

<body class="position-relative" id="body">
  <video class="main-animation main-animation-mobile d-block d-lg-none" playsinline autoplay="true" muted="true" loop="true">
    <source src="assets/video/animacion_principal_mobile.mp4" type="video/mp4">
  </video>
  <img class="static-background-mobile d-block d-lg-none" src="assets/img/static_background_mobile.png" alt="">
  <img class="static-background-mobile2 d-block d-lg-none" src="assets/img/static_background_mobile.png" alt="">
  <img class="static-background-mobile3 d-block d-lg-none" src="assets/img/static_background_mobile.png" alt="">
  <?php include_once('partials/_navbar.php'); ?>
  <main>
    <div class="desktop-background-1 position-relative">
      <video class="main-animation d-none d-lg-block" autoplay="true" muted="true" loop="true">
        <source src="assets/video/animacion_principal_desktop.mp4" type="video/mp4">
      </video>
      <section class="banner-section position-relative mb-4">
        <img class="position-absolute img-banner d-none d-lg-inline-block" src="assets/img/imagen_principal.png" alt="">
        <div class="container h-100">
          <div class="row h-100 g-0">
            <div class="col-lg-6 position-relative h-100">
              <div class="info-container">
                <h1 class="text-black">
                  CONTROLA TUS INSTALACIONES.</br>
                  LIBERA RECURSOS
                </h1>
                <p class="text-black">
                  e-Genya te da las herramientas para dar visibilidad
                  al proceso de aseo y mantención en tu empresa. <br />
                  En tiempo real, con reportería y gestión de
                  incidentes.
                </p>
                <a href="#contact">
                  <button class="btn-secondary btn-lg py-2 px-4">
                    Agenda una demo
                  </button>
                </a>
              </div>
            </div>
            <div class="col-lg-6">
              <figure class="d-block d-lg-none mobile-banner-img-container">
                <img src="assets/img/imagen_principal_mobile.png" alt="">
              </figure>
            </div>
          </div>
        </div>
      </section>
      <section class="clients-section">
        <div class="container">
          <!-- <div class="row">
            <div class="col-12"> -->
          <div class="clients-container">
            <h2 class="text-center position-relative title-section title-section-lg ">Confían <span>en nosotros</span></h2>
            <div class="clients-logos">
              <div>
                <img src="assets/img/chilexpress.webp" alt="">
              </div>
              <div>
                <img src="assets/img/Clean-Copper.png" alt="">
              </div>
              <div>
                <img src="assets/img/corfo.webp" alt="">
              </div>
              <div>
                <img src="assets/img/softys.webp" alt="">
              </div>
              <div>
                <img src="assets/img/teck.webp" alt="">
              </div>
              <div>
                <img src="assets/img/Universidad.png" alt="">
              </div>
              <div>
                <img src="assets/img/universidad.webp" alt="">
              </div>
              <div>
                <img src="assets/img/Veolia.png" alt="">
              </div>
              <div>
                <img src="assets/img/pucv.png" alt="">
              </div>
            </div>
          </div>
          <!-- </div>
          </div> -->
        </div>
      </section>
    </div>
    <section class="managements-section">
      <div class="container">
        <h2 class="title-section title-section-lg text-center mb-0" style="margin-top: 49px"><span>Realiza una gestión</span> eficiente</h2>
        <div class="managements-overflow-container pb-3">
          <div class="managements-container d-flex justify-content-between justify-content-lg-around">
            <div class="pb-3">

              <div class="management management-start ">
                <figure class="m-0 mb-2">
                  <img src="assets/img/Control.svg" alt="">
                </figure>
                <p class="text-black">Control</p>
                <p class="text-black">Verifica en línea <span class="text-gray">el proceso</span></p>
                <p class="text-gray">de limpieza y mantención.</p>
  
              </div>
            </div>
            <div class="pb-3">

              <div class="management management-center ">
                <figure class="m-0 mb-2">
                  <img src="assets/img/Gestion_de_incidentes.svg" alt="">
                </figure>
                <p class="text-black">Gestión de incidentes</p>
                <p class="text-gray">Recibe y gestiona incidentes <span class="text-black">de</span></p>
                <p class="text-black">manera rápida y fácil <span class="text-gray">(WhatsApp).</span></p>
  
  
              </div>
            </div>
            <div class="pb-3">

              <div class="management management-end">
                <figure class="m-0 mb-2">
                  <img src="assets/img/Reportes_y_auditorías.svg" alt="">
                </figure>
                <p class="text-black">Reportes y auditorías</p>
                <p class="text-gray"> Accede a la información <span class="text-black">
                    en
                    cualquier momento
                  </span> en el formato
                  que necesites.</p>
              </div>
            </div>
            <div class="pb-3">
              <div class="management management-end">
                <figure class="m-0 mb-2">
                  <img src="assets/img/Mayor_eficiencia.svg" alt="">
                </figure>
                <p class="text-black">Mayor eficiencia</p>
                <p class="text-gray">
                  Aplica herramientas de Inteligencia
                  Artificial (Al) para la
  
                  <span class="text-black">
                    generación
                    de eficiencias.
  
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="why-e-genya-section" id="why-e-genya">
      <div class="container">
        <div class="d-none d-lg-block why-e-genya-desktop-container">
          <h2 class="title-section title-section-lg text-gray text-center">¿Por qué <span class="text-black">e-genya</span>?</h2>
          <div class="cards-container">
            <div class="card-container shadow-bottom-right card-first">
              <h3>Sistema</h3>
              <p>
                El área de <span>limpieza y mantención</span>, </br>
                necesita herramientas que logren </br>
                generar <span>eficiencias</span>.
              </p>
            </div>
            <div class="card-container shadow-bottom-left card-second">
              <h3>Recursos</h3>
              <p>
                <span>Disponibilizamos y automatizamos</span>
                la información de tu operación.

              </p>
            </div>
            <div class="card-container shadow-bottom-right">
              <h3>Medición</h3>
              <p>
                Enfoque en clientes que quieren
                <span>automatizar y digitalizar procesos.</span>

              </p>
            </div>
            <div class="card-container shadow-bottom-left">
              <h3>Diseño</h3>
              <p>
                Funciona porque está diseñado
                para los <span>distintos perfiles.</span>
              </p>
            </div>
          </div>
        </div>
        <div class="d-block d-lg-none why-e-genya-mobile-container">
          <h2 class="title-section text-gray text-center title-section-lg mb-3">¿Por qué <span class="text-black">e-genya</span>?</h2>
          <div class="cards-container">
            <div class="card-container shadow-bottom-right card-first">
              <h3>Sistema</h3>
              <p>
                El área de <span>limpieza y mantención</span>, </br>
                necesita herramientas que logren </br>
                generar <span>eficiencias</span>.
              </p>
            </div>
            <div class="card-container shadow-bottom-right card-second">
              <h3>Recursos</h3>
              <p>
                <span>Disponibilizamos y automatizamos</span>
                la información de tu operación.

              </p>
            </div>
            <div class="card-container shadow-bottom-right">
              <h3>Medición</h3>
              <p>
                Enfoque en clientes que quieren
                <span>automatizar y digitalizar procesos.</span>

              </p>
            </div>
            <div class="card-container shadow-bottom-right">
              <h3>Diseño</h3>
              <p>
                Funciona porque está diseñado
                para los <span>distintos perfiles.</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="benefits-section">
      <div class="container">
        <div class="row ">
          <div class="col-12">
            <h2 class="title-section title-section-lg text-gray text-center">
              Estos son algunos de los <span class="text-black">beneficios</span>
              <br class="d-none d-lg-block">
              que logran obtener nuestros clientes.
            </h2>
          </div>
          <div class="col-6 col-lg-3">
            <div class="benefit">
              <figure>
                <img src="assets/img/Compromiso.svg" alt="">
                <figcaption class="text-black">Compromiso</figcaption>
              </figure>
              <p class="text-gray">
                67% reducción en el tiempo de
                solución de incidencias.
              </p>
            </div>
          </div>
          <div class="col-6 col-lg-3">
            <div class="benefit">
              <figure>
                <img src="assets/img/Costos.svg" alt="">
                <figcaption class="text-black">Costos</figcaption>
              </figure>
              <p class="text-gray">
                10% de reducción de costos
                al término del primer año.
              </p>
            </div>
          </div>
          <div class="col-6 col-lg-3">
            <div class="benefit">
              <figure>
                <img src="assets/img/Productividad.svg" alt="">
                <figcaption class="text-black">Productividad</figcaption>
              </figure>
              <p class="text-gray">
                27% aumento en la
                productividad de los equipos.
              </p>
            </div>
          </div>
          <div class="col-6 col-lg-3">
            <div class="benefit">
              <figure>
                <img src="assets/img/Calidad.svg" alt="">
                <figcaption class="text-black">Calidad</figcaption>
              </figure>
              <p class="text-gray">
                38% reducción de
                problemas recurrentes.
              </p>
            </div>
          </div>
          <div class="col-12" id="how-work-it">
            <!-- <h2 class="title-section text-gray text-center d-block d-lg-none mt-4">
              ¿Como <span class="text-black">funciona</span>?
            </h2> -->
          </div>
        </div>
      </div>
    </section>
    <section class="video-section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h2 class="  title-section title-section-lg text-gray text-center mb-4">
              ¿Como <span class="text-black">funciona</span>?
            </h2>
          </div>
          <div class="col-12 p-0">
            <div class="position-relative">

              <div class="video-container iframe-video-container">
                <!-- <iframe class="iframe-video" src="https://www.youtube.com/embed/1ilegqzbPj8?si=5D6c-flGXhawoXyQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                <div id="player"></div>
              </div>
              <div class="video-container img-video-container">
                <i class="fa-regular fa-circle-play yt-play"></i>
                <figure class="position-relative ">
                  <!-- <img src="assets/img/img-youtube.webp" class="w-100 iframe-video" alt=""> -->
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="product" class="desktop-background-2 position-relative">
      <section class="cleaning-section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="title-section title-section title-section-lg text-gray text-center">
                Producto
              </h2>
            </div>
            <div class="col-12">
              <h3 class="subtitle-section text-center text-black">
                Módulo de Limpieza / Mantención.
              </h3>
            </div>
            <div class="col-lg-6">
              <div class="card-product position-relative">
                <div class="info-container">
                  <h4 class="text-black  ">Registro</h4>
                  <p class="text-gray">
                    El Staff de limpieza /
                    mantención escanea el código
                    QR en el dispositivo móvil y
                    <span class="text-black">registra información</span> de tareas
                    con opciones predefinidas.
                  </p>
                </div>
                <figure class="img-container">
                  <!-- <video class="d-none d-lg-block" autoplay="true" loop="true" muted="true">
                    <source src="assets/video/mp4_op/modulo-de-limpieza-registro.mp4" type="video/mp4">
                  </video> -->
                  <video class="" id="producto1" playsinline autoplay loop muted >
                    <source src="assets/video/mp4_op/movil/modulo-de-limpieza-registro.mp4" type="video/mp4">
                    <source src="assets/video/webm/movil/modulo-de-limpieza-registro.webm" type="video/webm">
                  </video>
                </figure>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card-product position-relative">
                <div class="info-container">
                  <h4 class="text-black  ">Monitoreo</h4>
                  <p class="text-gray">
                    Los encargados de las
                    instalaciones <span class="text-black">
                      monitorean el
                      proceso
                    </span> desde la plataforma
                    con<span class="text-black"> información en línea.</span>

                  </p>
                </div>
                <figure class="img-container">
                  <!-- <video class="d-none d-lg-block" autoplay="true" loop="true" muted="true">
                    <source src="assets/video/mp4_op/modulo-de-limpieza-monitoreo.mp4" type="video/mp4">
                  </video> -->
                  <video class="" id="producto2" playsinline autoplay="true" loop="true" muted="true">
                    <source src="assets/video/mp4_op/movil/modulo-de-limpieza-monitoreo.mp4" type="video/mp4">
                    <source src="assets/video/webm/movil/modulo-de-limpieza-monitoreo.webm" type="video/webm">
                  </video>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="incidents-section">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3 class="subtitle-section text-center">
                Módulo de incidentes.
              </h3>
            </div>
            <div class="col-lg-6">
              <div class="card-product position-relative">
                <div class="info-container">
                  <h4 class="text-black  ">Registro</h4>
                  <p class="text-gray">
                    El personal escanea el código
                    QR en el dispositivo móvil y
                    <span class="text-black">
                      registra el incidente para ser
                      resuelto.
                    </span>

                  </p>
                </div>
                <figure class="img-container">
                  <!-- <video class="d-none d-lg-block" autoplay="true" loop="true" muted="true">
                    <source src="assets/video/mp4_op/modulo-de-incidentes-registro.mp4" type="video/mp4">
                  </video> -->
                  <video class="" id="producto3" playsinline autoplay="true" loop="true" muted="true">
                    <source src="assets/video/mp4_op/movil/modulo-de-incidentes-monitoreo-registro.mp4" type="video/mp4">
                    <source src="assets/video/webm/movil/modulo-de-incidentes-monitoreo-registro.webm" type="video/webm">
                  </video>

                </figure>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card-product position-relative">
                <div class="info-container">
                  <h4 class="text-black  ">Resolución</h4>
                  <p class="text-gray">
                    El Supervisor del Staff
                    recibe el incidente y
                    <span class="text-black">resuelve</span> oportunamente
                    <span class="text-black">dejando registro.</span>

                  </p>
                </div>
                <figure class="img-container">
                  <!-- <video class="d-none d-lg-block" autoplay="true" loop="true" muted="true">
                    <source src="assets/video/mp4_op/modulo-de-incidentes-resolucion.mp4" type="video/mp4">
                  </video> -->
                  <video class="" id="producto4" playsinline autoplay="true" loop="true" muted="true">
                    <source src="assets/video/mp4_op/movil/modulo-de-incidentes-resolucion.mp4" type="video/mp4">
                    <source src="assets/video/webm/movil/modulo-de-incidentes-resolucion.webm" type="video/webm">
                  </video>
                </figure>
              </div>
            </div>
            <div class="col-12">
              <div class="card-product card-large position-relative">
                <div class="info-container">
                  <h4 class="text-black  ">Monitoreo</h4>
                  <p class="text-gray">
                    Los encargados de las
                    instalaciones <span class="text-black">
                      monitorean el
                      proceso
                    </span> desde la Plataforma
                    con <span class="text-black">información en línea.</span>

                  </p>
                </div>
                <figure class="img-container">
                  <!-- <video class="d-none d-lg-block" autoplay="true" loop="true" muted="true">
                    <source src="assets/video/mp4_op/modulo-de-incidentes-monitoreo.mp4" type="video/mp4">
                  </video> -->
                  <video class="" id="producto5" playsinline autoplay="true" loop="true" muted="true">
                    <source src="assets/video/mp4_op/movil/modulo-de-incidentes-monitoreo.mp4" type="video/mp4">
                    <source src="assets/video/webm/movil/modulo-de-incidentes-monitoreo.webm" type="video/webm">
                  </video>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <section class="reporting-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3 class="subtitle-section text-center text-black">
              Módulo de reportería.
            </h3>
          </div>
          <div class="col-12">
            <div class="card-product card-large position-relative m-0">
              <div class="info-container">
                <h4 class="text-black  ">Reportes</h4>
                <p class="text-gray">
                  Nuestra plataforma provee un <span class="text-black">
                    módulo
                    de reportería de tareas y de gestión de
                    incidentes
                  </span>, los cuales pueden ser
                  usados para una gestión interna,
                  auditorías y/o certificaciones.

                </p>
              </div>
              <figure class="img-container">
                <!-- <video class="d-none d-lg-block" autoplay="true" loop="true" muted="true">
                  <source src="assets/video/mp4_op/modulo-de-reportes.mp4" type="video/mp4">
                </video> -->
                <video class="" id="producto6" playsinline autoplay="true" loop="true" muted="true" src="assets/video/mp4_op/movil/modulo-de-reportes.mp4" preload="metadata" controlslist="nodownload"></video>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="form-contact-section" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="form-contact-container">
              <h2 class="title-section title-section title-section-lg text-gray text-center">
                Contáctanos
              </h2>
              <form action="" method="post">
                <div class="mb-3">
                  <label for="fullname">Nombre y Apellido</label>
                  <input id="fullname" class="form-control" type="text">
                </div>
                <div class="mb-3">
                  <label for="company ">Compañia</label>
                  <input id="company" class="form-control" type="text">
                </div>
                <div class="mb-3">
                  <label for="email">E-mail</label>
                  <input id="email" class="form-control" type="email">
                </div>
                <div class="mb-3">
                  <label for="tel">Teléfono</label>
                  <input id="tel" class="form-control" type="text">
                </div>
                <div class="mb-3">
                  <label for="message">Mensaje</label>
                  <textarea id="message" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                  <div>
                    <label class="cb-container">
                      Al enviar este formulario, confirma que ha leído y acepta los Términos de servicio y la Declaración de
                      privacidad de e-Genya.
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div>
                    <label class="cb-container">
                      Mantenme informado sobre noticias y ofertas.
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
                <div class="text-center">
                  <button class="btn-primary btn-lg">Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include_once('partials/_footer.php'); ?>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="assets/js/slick.min.js"></script>
  <script defer>
    $(document).ready(function() {
      $('.clients-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
      });
      window.addEventListener('resize', () => {

      })
      if(window.innerWidth >= 992){

        $('.managements-container').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2500,
          arrows: false,
          dots: false,
          pauseOnHover: false,
        });
      }
    });
  </script>
  <script>
    // JavaScript para animar el desplazamiento suave al hacer clic en enlaces de anclaje
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();

        const targetId = this.getAttribute('href').substring(1);
        const targetSection = document.getElementById(targetId);

        window.scrollTo({
          top: targetSection.offsetTop,
          behavior: 'smooth'
        });
      });
    });
  </script>
  <script>
    var close_open_menu = document.querySelectorAll('.close-open-menu');
    var ejecucionPermitida = true; // Variable de control para permitir la ejecución del código

    close_open_menu.forEach((item) => {
      item.addEventListener('click', (e) => {
        if (ejecucionPermitida) {
          ejecucionPermitida = false; // Bloquea la ejecución del código
        } else {
          return;
        }

        document.querySelector('body').classList.toggle('open-mobile-menu');

        // Espera un breve período de tiempo antes de permitir la ejecución nuevamente
        setTimeout(function() {
          ejecucionPermitida = true;
        }, 100); // Por ejemplo, 500 milisegundos (0.5 segundos)
      });
    })
  </script>
  <script>
    let isDragging = false;
    let startX;
    let scrollLeft;
    const content = document.querySelector('.managements-overflow-container');
    const img_video_container = document.querySelector('.img-video-container');
    const iframe_video_container = document.querySelector('.iframe-video-container');


    document.addEventListener('DOMContentLoaded', () => {
      var video1 = document.querySelector('#producto1');
      var video2 = document.querySelector('#producto2');
      var video3 = document.querySelector('#producto3');
      var video4 = document.querySelector('#producto4');
      var video5 = document.querySelector('#producto5');
      var video6 = document.querySelector('#producto6');


      window.addEventListener('scroll', function() {
        var posicionVertical = window.scrollY;
        // console.log(posicionVertical);
        if (posicionVertical >= 1800 && posicionVertical <= 1850) {
          // console.log('ya esta en 1800');
          video1.pause();
          video1.currentTime = 0;
          video1.play();
        }
        if (posicionVertical >= 2300 && posicionVertical <= 2350) {
          // console.log('ya esta en 2300');
          video2.pause();
          video2.currentTime = 0;
          video2.play();
        }
        if (posicionVertical >= 2300 && posicionVertical <= 2350) {
          // console.log('ya esta en 2300');
          video2.pause();
          video2.currentTime = 0;
          video2.play();
        }
        if (posicionVertical >= 2800 && posicionVertical <= 2850) {
          // console.log('ya esta en 2800');
          video3.pause();
          video3.currentTime = 0;
          video3.play();
        }
        if (posicionVertical >= 3250 && posicionVertical <= 3300) {
          // console.log('ya esta en 3250');
          video4.pause();
          video4.currentTime = 0;
          video4.play();
        }
        if (posicionVertical >= 3750 && posicionVertical <= 3800) {
          // console.log('ya esta en 3250');
          video5.pause();
          video5.currentTime = 0;
          video5.play();
        }
        if (posicionVertical >= 4200 && posicionVertical <= 4250) {
          // console.log('ya esta en 4200');
          video6.pause();
          video6.currentTime = 0;
          video6.play();
        }
      });

      // // Obtén todos los elementos de video en la página
      // const videos = document.querySelectorAll('video');
      // reproducirVideos();
      // // Función para reproducir todos los videos
      // function reproducirVideos() {

      //   videos.forEach(video => {
      //     video.pause();
      //     video.currentTime = 0;
      //     video.play();
      //   });
      // }




      // var miCarrusel = document.querySelector('.managements-container');



      // iniciarCarrusel();

      // function iniciarCarrusel() {
      //   // Desplaza automáticamente el carrusel cada 3 segundos

      //   avanzarCarrusel();

      //   miCarrusel.style.transform = 'translateX(-70%)'; // Desplaza un slide a la izquierda
      // }




    });


    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;

    img_video_container.addEventListener('click', (e) => {
      img_video_container.style.display = 'none';
      iframe_video_container.style.display = 'block';
      onPlayerReady({
        target: player
      });
    });

    content.addEventListener('mousedown', (e) => {
      isDragging = true;
      startX = e.pageX - content.offsetLeft;
      scrollLeft = content.scrollLeft;
      content.style.cursor = 'grabbing';
    });

    content.addEventListener('mousemove', (e) => {
      if (!isDragging) return;
      const x = e.pageX - content.offsetLeft;
      const walk = (x - startX) * 2; // Ajusta la velocidad del scroll
      content.scrollLeft = scrollLeft - walk;
    });

    window.addEventListener('mouseup', () => {
      isDragging = false;
      content.style.cursor = 'grab';
    });



    function onYouTubeIframeAPIReady() {
      player = new YT.Player('player', {
        height: '100%',
        width: '100%',
        videoId: 'mFZIYqa79PY',
        playerVars: {
          'playsinline': 1
        },
        events: {
          // 'onReady': onPlayerReady,
          // 'onStateChange': onPlayerStateChange
        }
      });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
      event.target.playVideo();
    }

    // 5. The API calls this function when the player's state changes.
    //    The function indicates that when playing a video (state=1),
    //    the player should play for six seconds and then stop.
    var done = false;

    // function onPlayerStateChange(event) {
    //   if (event.data == YT.PlayerState.PLAYING && !done) {
    //     setTimeout(stopVideo, 6000);
    //     done = true;
    //   }
    // }

    function stopVideo() {
      player.stopVideo();
    }
  </script>
</body>

</html>