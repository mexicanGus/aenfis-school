<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- SEO Meta Tags -->
    <meta
      name="description"
      content="Curso de Italiano online a meses desde tu casa en todos los horarios, clases personalizadas."
    />
    <meta name="author" content="Aenfis School" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook  -->
    <meta property="og:site_name" content="" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Curso Online de Italiano con 30 horas mensuales</title>

    <!-- Styles -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/fontawesome-all.css" rel="stylesheet" />
    <link href="css/swiper.css" rel="stylesheet" />
    <link href="css/magnific-popup.css" rel="stylesheet" />
    <link href="css/italian.css" rel="stylesheet" />

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png" />
  </head>
  <body data-spy="scroll" data-target=".fixed-top">
    <!-- Preloader -->
    <div class="spinner-wrapper">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
    <!-- end of preloader -->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <!-- Text Logo - Use this if you don't have a graphic logo -->
      {{-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aenfis</a> --}}

      <!-- Image Logo -->
      <a class="navbar-brand logo-image" href="#"
        ><img src="images/logo.svg" alt="alternative"
      /></a>

      <!-- Mobile Menu Toggle Button -->
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
      </button>
      <!-- end of mobile menu toggle button -->

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#register"
              >REGISTRARSE <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#description">DETALLES</a>
          </li>

          <!-- Dropdown Menu -->
          <li class="nav-item">
            <a
              class="nav-link dropdown-toggle page-scroll"
              href="#date"
              id="navbarDropdown"
              role="button"
              aria-haspopup="true"
              aria-expanded="false"
              >FECHAS</a
            >
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="article-details.html"
                ><span class="item-text">ARTICLE DETAILS</span></a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/terminos-y-condiciones') }}"
                ><span class="item-text">TERMS CONDITIONS</span></a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/politica-de-privacidad') }}"
                ><span class="item-text">PRIVACY POLICY</span></a
              >
            </div>
          </li>
          <!-- end of dropdown menu -->

          <li class="nav-item">
            <a class="nav-link page-scroll" href="#contact">CONTACTO</a>
          </li>
        </ul>
        <span class="nav-item social-icons">
          <span class="fa-stack">
            <a href="https://www.facebook.com/AenfisTexcoco" target="_blank">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-facebook-f fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="https://www.twitter.com/AenfisTexcoco" target="_blank">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-twitter fa-stack-1x"></i>
            </a>
          </span>
        </span>
      </div>
    </nav>
    <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Header -->
    <header id="header" class="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-container">
              <div class="countdown">
                <span id="clock"></span>
              </div>
              <h1>Curso de Italiano</h1>
              <p class="p-large">
                Aprende con la metodología <strong>Steps</strong> en nuestro <strong>curso de Italiano</strong> 100% en línea. 
                La metodología probada en el país más visitado de Europa, España.
              </p>
              <a class="btn-solid-lg page-scroll" href="#register"
                >REGISTRARSE</a
              >
              <a class="btn-outline-lg page-scroll" href="#instructor"
                >MENTOR</a
              >
            </div>
            <!-- end of text-container -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->

      <!-- Image Slider -->
      <div class="outer-container">
        <div class="slider-container">
          <div class="swiper-container image-slider-1">
            <div class="swiper-wrapper">
              <!-- Slide -->
              <div class="swiper-slide">
                <img
                  class="img-fluid"
                  src="images/details-slide-1.jpg"
                  alt="alternative"
                />
              </div>
              <!-- end of slide -->

              <!-- Slide -->
              <div class="swiper-slide">
                <img
                  class="img-fluid"
                  src="images/details-slide-2.jpg"
                  alt="alternative"
                />
              </div>
              <!-- end of slide -->

              <!-- Slide -->
              <div class="swiper-slide">
                <img
                  class="img-fluid"
                  src="images/details-slide-3.jpg"
                  alt="alternative"
                />
              </div>
              <!-- end of slide -->
            </div>
            <!-- end of swiper-wrapper -->

            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- end of add arrows -->
          </div>
          <!-- end of swiper-container -->
        </div>
        <!-- end of slider-container -->
      </div>
      <!-- end of outer-container -->
      <!-- end of image slider -->
    </header>
    <!-- end of header -->
    <!-- end of header -->

    <!-- Registration -->
    <div id="register" class="form-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="text-container">
              <h2>Quiero registrarme</h2>
              <p>
                Aenfis México, al ser una filial Europea refuerza su compromiso 
                con la efectividad del proceso enseñanza-aprendizaje con cursos
                diseñados a tu medida.
              </p>
              <ul class="list-unstyled li-space-lg">
                <li class="media">
                  <i class="fas fa-square"></i>
                  <div class="media-body">
                    <strong>Con STEPS</strong> avanzamos gradualmente en 4 meses
                  </div>
                </li>
                <li class="media">
                  <i class="fas fa-square"></i>
                  <div class="media-body">
                    <strong>Te ayudamos</strong> a preparar tu certificación
                    del Marco Común Europeo (MCRLM)
                  </div>
                </li>
                <li class="media">
                  <i class="fas fa-square"></i>
                  <div class="media-body">
                    <strong>Comienza ahora</strong> y recibe tu inscripción en 15 minutos
                  </div>
                </li>
              </ul>
            </div>
            <!-- end of text-container -->
          </div>
          <!-- end of col -->
          <div class="col-lg-6">
            <!-- Registration Form -->
            <div class="form-container">
              <form
                id="registrationForm"
                data-toggle="validator"
                data-focus="false"
              >
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control-input"
                    id="rname"
                    name="rname"
                    required
                  />
                  <label class="label-control" for="rname"
                    >Nombre completo</label
                  >
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control-input"
                    id="remail"
                    name="remail"
                    required
                  />
                  <label class="label-control" for="remail"
                    >Correo electrónico</label
                  >
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control-input"
                    id="rphone"
                    name="rphone"
                    required
                  />
                  <label class="label-control" for="rphone"
                    >Número de contacto</label
                  >
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group checkbox">
                  <input
                    type="checkbox"
                    id="rterms"
                    value="Agreed-to-Terms"
                    name="rterms"
                    required
                  />He leído y estoy de acuerdo con la
                  <a href="{{ url('/politica-de-privacidad') }}">Política de privacidad</a> -
                  <a href="{{ url('/terminos-y-condiciones') }}">Términos y condiciones</a>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control-submit-button">
                    REGISTRARSE
                  </button>
                </div>
                <div class="form-message">
                  <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                </div>
              </form>
            </div>
            <!-- end of form-container -->
            <!-- end of registration form -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of form-1 -->
    <!-- end of registration -->

    <!-- Partners -->
    <div class="slider-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p class="p-small">Socios destacados</p>

            <!-- Image Slider -->
            <div class="slider-container">
              <div class="swiper-container image-slider-2">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img
                      class="img-fluid"
                      src="images/customer-logo-7.svg"
                      alt="alternative"
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      class="img-fluid"
                      src="images/customer-logo-8.svg"
                      alt="alternative"
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      class="img-fluid"
                      src="images/customer-logo-9.svg"
                      alt="alternative"
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      class="img-fluid"
                      src="images/customer-logo-10.svg"
                      alt="alternative"
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      class="img-fluid"
                      src="images/customer-logo-11.svg"
                      alt="alternative"
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      class="img-fluid"
                      src="images/customer-logo-12.svg"
                      alt="alternative"
                    />
                  </div>
                </div>
                <!-- end of swiper-wrapper -->
              </div>
              <!-- end of swiper container -->
            </div>
            <!-- end of slider-container -->
            <!-- end of image slider -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of slider-1 -->
    <!-- end of partners -->

    <!-- Instructor -->
    <div id="instructor" class="basic-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img
              class="img-fluid"
              src="images/instructor3.jpg"
              alt="alternative"
            />
          </div>
          <!-- end of col -->
          <div class="col-lg-6">
            <div class="text-container">
              <h2>Soy Erika Castro</h2>
              <p>
                Tu profesora del <strong>curso de Italiano</strong>, además de 
                las clases en vivo, revisaremos materiales de estudio día con día. 
                Cuento con más de 5 años de experiencia impartiendo webinars, seminarios
                y como profesor catedrático.
              </p>
              <p>
                Mi pasión es la enseñanza del idioma, en este <strong>curso online 
                  de Italiano</strong>, quiero guiarte para que te prepares para tu certificación 
                en los niveles más altos del Marco Común Europeo.
                Las certificaciones con los más altos estándares en el idioma.
              </p>
            </div>
            <!-- end of text-container -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of basic-1 -->
    <!-- end of instructor -->

    <!-- Description -->
    <div id="description" class="basic-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>Razones para estudiar Italiano en línea</h2>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
        <div class="row">
          <div class="col-lg-6">
            <ul class="list-unstyled li-space-lg first">
              <li class="media">
                <i class="bullet">1</i>
                <div class="media-body">
                  <h4>Materiales Progretto</h4>
                  <p>
                    Guias de estudio, trabajos y desarollo de las clases con Progretto.
                    La mejor opción para aprendas el idioma <strong>italiano.</strong>
                  </p>
                </div>
              </li>
              <li class="media">
                <i class="bullet">2</i>
                <div class="media-body">
                  <h4>Clases en línea</h4>
                  <p>
                    Preguntas en vivo con tu profesor. Seguimiento después
                    de clases. Nuestros cursos tienen mentoría en todo momento.
                  </p>
                </div>
              </li>
              <li class="media">
                <i class="bullet">3</i>
                <div class="media-body">
                  <h4>Dominio del vocabulario</h4>
                  <p>
                    Aprende frases y palabras de manera fácil. Práctica con tu profesor
                    en este <strong>curso de italiano</strong> constantemente. 
                  </p>
                </div>
              </li>
            </ul>
          </div>
          <!-- end of col -->
          <div class="col-lg-6">
            <ul class="list-unstyled li-space-lg second">
              <li class="media">
                <i class="bullet">4</i>
                <div class="media-body">
                  <h4>Escribe sin problemas</h4>
                  <p>
                    La gramática es muy fácil utilizando los materiales <strong>Progretto</strong>, 
                    escribir en italiano te permitirá avanzar en tus objetivos.
                  </p>
                </div>
              </li>
              <li class="media">
                <i class="bullet">5</i>
                <div class="media-body">
                  <h4>Tareas a distancia</h4>
                  <p>
                    Conéctate desde tu casa u oficina con profesores reales.
                    No te pierdas ninguna clase con nuestra plataforma.
                  </p>
                </div>
              </li>
              <li class="media">
                <i class="bullet">6</i>
                <div class="media-body">
                  <h4>Grupos reducidos</h4>
                  <p>
                    Conoce a alumnos nativos y extranjeros en nuestros cursos, con grupos
                    reducidos práctica tu <strong>dominio del italiano</strong>. 
                  </p>
                </div>
              </li>
            </ul>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of basic-2 -->
    <!-- end of description -->

    <!-- Students -->
    <div class="basic-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="text-container">
              <h2>Aprende en línea</h2>
              <p>
                Garantizamos la calidad de nuestros cursos con nuestra plataforma.
                Estudia en cualquier parte con este <strong>curso de italiano</strong>.
              </p>
              <a
                class="btn-solid-reg popup-with-move-anim"
                href="#register"
                >LEER MÁS</a
              >
            </div>
            <!-- end of text-container -->
          </div>
          <!-- end of col -->
          <div class="col-lg-6">
            <img
              class="img-fluid"
              src="images/students.jpg"
              alt="alternative"
            />
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of basic-3 -->
    <!-- end of students -->

    <!-- Details Lightbox -->
    <div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
      <div class="container">
        <div class="row">
          <button title="Close (Esc)" type="button" class="mfp-close x-button">
            ×
          </button>
          <div class="col-lg-8">
            <div class="image-container">
              <img
                class="img-fluid"
                src="images/details-lightbox.jpg"
                alt="alternative"
              />
            </div>
            <!-- end of image-container -->
          </div>
          <!-- end of col -->
          <div class="col-lg-4">
            <h3>Curso de Italiano</h3>
            <hr />
            <h5>For everybody</h5>
            <p>
              The training course is dedicates to anyone passionate about the
              web and in need of improving their current online presence.
            </p>
            <ul class="list-unstyled li-space-lg">
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Link building</div>
              </li>
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Know your current position</div>
              </li>
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Partnering with blogs</div>
              </li>
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Naming your images</div>
              </li>
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Creating good ideas</div>
              </li>
              <li class="media">
                <i class="fas fa-square"></i>
                <div class="media-body">Create for people</div>
              </li>
            </ul>
            <a class="btn-solid-reg mfp-close page-scroll" href="#register"
              >INSCRIBIRSE</a
            >
            <a class="btn-outline-reg mfp-close as-button" href="#screenshots"
              >BACK</a
            >
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of lightbox-basic -->
    <!-- end of details lightbox -->

    <!-- Video -->
    <div class="basic-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>Experiencias de alumnos</h2>

            <!-- Video Preview -->
            <div class="image-container">
              <div class="video-wrapper">
                <a
                  class="popup-youtube"
                  href="https://www.youtube.com/watch?v=fLCjQJCekTs"
                  data-effect="fadeIn"
                >
                  <img
                    class="img-fluid"
                    src="images/video.jpg"
                    alt="alternative"
                  />
                  <span class="video-play-button">
                    <span></span>
                  </span>
                </a>
              </div>
              <!-- end of video-wrapper -->
            </div>
            <!-- end of image-container -->
            <!-- end of video preview -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of basic-4 -->
    <!-- end of video -->

    <!-- Takeaways -->
    <div class="cards">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>Objetivos del Curso</h2>
            <p class="p-heading">
              Comprende las bases del idioma para que en muy poco tiempo puedas entablar
              conversaciones reales con personas reales. Prepara tu certificación 
              con este curso de Italiano 100% en línea.
            </p>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
        <div class="row">
          <div class="col-lg-12">
            <!-- Card -->
            <div class="card">
              <div class="card-image">
                <i class="fas fa-atom"></i>
              </div>
              <div class="card-body">
                <h4 class="card-title">Pronunciación</h4>
                <p>
                  Clara y correcta que todos pensarán que es tu lengua nativa.
                </p>
              </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
              <div class="card-image">
                <i class="fas fa-key"></i>
              </div>
              <div class="card-body">
                <h4 class="card-title">Lectura</h4>
                <p>
                  Fácil de entender gracias a los ejercicios de comprensión lectora.
                </p>
              </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
              <div class="card-image">
                <i class="fas fa-newspaper"></i>
              </div>
              <div class="card-body">
                <h4 class="card-title">Escritura</h4>
                <p>
                  Tus primeros corres o reservación de viaje sin errores ortográficos.
                </p>
              </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
              <div class="card-image">
                <i class="fas fa-link"></i>
              </div>
              <div class="card-body">
                <h4 class="card-title">Lenguaje</h4>
                <p>
                  Amplio vocabulario para tu vida profesional y cotidiana.
                </p>
              </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
              <div class="card-image">
                <i class="far fa-handshake"></i>
              </div>
              <div class="card-body">
                <h4 class="card-title">Fluidez</h4>
                <p>
                  Conocer amigos y personas nuevas sin miedo a expresarte ¡Hablando bien!
                </p>
              </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
              <div class="card-image">
                <i class="fas fa-chart-bar"></i>
              </div>
              <div class="card-body">
                <h4 class="card-title">Certificación</h4>
                <p>
                  Mentoría para el examen de certificación en el Marco Común Europeo.
                </p>
              </div>
            </div>
            <!-- end of card -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of cards -->
    <!-- end of takeaways -->

    <!-- Testimonials -->
    <div class="slider-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>
              Comentarios que vale la pena compartir
            </h3>

            <!-- Text Slider -->
            <div class="slider-container">
              <div class="swiper-container text-slider">
                <div class="swiper-wrapper">
                  <!-- Slide -->
                  <div class="swiper-slide">
                    <div class="image-wrapper">
                      <img
                        class="img-fluid"
                        src="images/testimonial-1.jpg"
                        alt="alternative"
                      />
                    </div>
                    <!-- end of image-wrapper -->
                    <div class="text-wrapper">
                      <div class="testimonial-text">
                        Tomé el curso de formación de Italiano hace un año y
                        estoy muy contenta. Dos meses después trabajo en Italia.
                      </div>
                      <div class="testimonial-author">
                        Alejandra Vasco - Gerente de Restaurante
                      </div>
                    </div>
                    <!-- end of text-wrapper -->
                  </div>
                  <!-- end of swiper-slide -->
                  <!-- end of slide -->

                  <!-- Slide -->
                  <div class="swiper-slide">
                    <div class="image-wrapper">
                      <img
                        class="img-fluid"
                        src="images/testimonial-2.jpg"
                        alt="alternative"
                      />
                    </div>
                    <!-- end of image-wrapper -->
                    <div class="text-wrapper">
                      <div class="testimonial-text">
                        Buscaba unas vacaciones con amigos, tomé el curso de italiano y en
                        menos de 4 meses mi viaje ya está organizado.
                      </div>
                      <div class="testimonial-author">
                        Friedrich Conesa - Emprendedor
                      </div>
                    </div>
                    <!-- end of text-wrapper -->
                  </div>
                  <!-- end of swiper-slide -->
                  <!-- end of slide -->

                  <!-- Slide -->
                  <div class="swiper-slide">
                    <div class="image-wrapper">
                      <img
                        class="img-fluid"
                        src="images/testimonial-3.jpg"
                        alt="alternative"
                      />
                    </div>
                    <!-- end of image-wrapper -->
                    <div class="text-wrapper">
                      <div class="testimonial-text">
                        Nuestra empresa coordina visitas en México con extranjeros, la mayoría de
                        nuestros clientes hablan Italiano.
                      </div>
                      <div class="testimonial-author">
                        Rodolfo Sosa - Diseñador Gráfico
                      </div>
                    </div>
                    <!-- end of text-wrapper -->
                  </div>
                  <!-- end of swiper-slide -->
                  <!-- end of slide -->

                  <!-- Slide -->
                  <div class="swiper-slide">
                    <div class="image-wrapper">
                      <img
                        class="img-fluid"
                        src="images/testimonial-4.jpg"
                        alt="alternative"
                      />
                    </div>
                    <!-- end of image-wrapper -->
                    <div class="text-wrapper">
                      <div class="testimonial-text">
                        A pesar de la contingencia por el COVID-19 he logrado certificar 
                        envíos nacionales e internacionales gracias a este curso de italiano.
                      </div>
                      <div class="testimonial-author">
                        Samantha Rogue - Escritora
                      </div>
                    </div>
                    <!-- end of text-wrapper -->
                  </div>
                  <!-- end of swiper-slide -->
                  <!-- end of slide -->
                </div>
                <!-- end of swiper-wrapper -->

                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- end of add arrows -->
              </div>
              <!-- end of swiper-container -->
            </div>
            <!-- end of slider-container -->
            <!-- end of text slider -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of slider-2 -->
    <!-- end of testimonials -->

    <!-- Date -->
    <div id="date" class="basic-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-container">
              <h2>
                Aenfis School <br />
                Septiembre 2020
              </h2>
              <p>
                Nuestra misión es ayudar a las personas en su formación
                profesional. Nuestro equipo está encantado de invitarle a la
                próxima sesión del Curso de Italiano en vivo. Rellene el
                formulario para registrarse y nos pondremos en contacto con
                usted en menos de 2 horas.
              </p>
              <a class="btn-solid-lg page-scroll" href="#register"
                >REGISTRARSE</a
              >
            </div>
            <!-- end of text-container -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of basic-5 -->
    <!-- end of date -->

    <!-- Newsletter -->
    <div class="form-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>
              Mantente al día con las noticias de nuestro boletín y sigue
              nuestras redes sociales
            </h3>

            <!-- Newsletter Form -->
            <form
              id="newsletterForm"
              data-toggle="validator"
              data-focus="false"
            >
              <div class="form-group">
                <input
                  type="email"
                  class="form-control-input"
                  id="nemail"
                  required
                />
                <label class="label-control" for="nemail"
                  >Correo electrónico</label
                >
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group checkbox">
                <input
                  type="checkbox"
                  id="nterms"
                  value="Agreed-to-Terms"
                  required
                />He leído y estoy de acuerdo con la
                <a href="{{ url('/politica-de-privacidad') }}">Política de privacidad</a> -
                <a href="{{ url('/terminos-y-condiciones') }}">Términos y condiciones</a>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <button type="submit" class="form-control-submit-button">
                  INSCRIBIRSE
                </button>
              </div>
              <div class="form-message">
                <div id="nmsgSubmit" class="h3 text-center hidden"></div>
              </div>
            </form>
            <!-- end of newsletter form -->

            <!-- Social Links -->
            <div class="icon-container">
              <span class="fa-stack">
                <a
                  href="https://www.facebook.com/AenfisTexcoco"
                  target="_blank"
                >
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x"></i>
                </a>
              </span>
              <span class="fa-stack">
                <a href="https://www.twitter.com/AenfisTexcoco" target="_blank">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x"></i>
                </a>
              </span>
              <span class="fa-stack">
                <a href="https://instagram.com/aenfistexcoco">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x"></i>
                </a>
              </span>
            </div>
            <!-- end of icon-container -->
            <!-- end of social icons -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of form-2 -->
    <!-- end of newsletter -->

    <!-- Contact -->
    <div id="contact" class="form-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="text-container">
              <h2>Contacto</h2>
              <p>
                Para preguntas sobre el registro, por favor, póngase en contacto
                con los datos de contacto que figuran a continuación. Para
                cualquier pregunta use el formulario.
              </p>
              <h3>Oficina Principal</h3>
              <ul class="list-unstyled li-space-lg">
                <li class="media">
                  <i class="fas fa-map-marker-alt"></i>
                  <div class="media-body">
                    Calle Aldama 102, CP. 56100 Texcoco, Estado de México
                  </div>
                </li>
                <li class="media">
                  <i class="fas fa-phone-alt"></i>
                  <div class="media-body">
                    +52 595 955 8381, &nbsp;&nbsp;<i
                      class="fas fa-mobile-alt"
                    ></i
                    >&nbsp; +52 56 1876 4301
                  </div>
                </li>
                <li class="media">
                  <i class="fas fa-envelope"></i>
                  <div class="media-body">
                    <a class="light-gray" href="mailto:contact@aenfis.school"
                      >carlos@aenfis.school</a
                    >
                    <i class="fas fa-globe"></i
                    ><a class="light-gray" href="#your-link"
                      >www.aenfis.school</a
                    >
                  </div>
                </li>
              </ul>
            </div>
            <!-- end of text-container -->
          </div>
          <!-- end of col -->
          <div class="col-lg-6">
            <!-- Contact Form -->
            <form id="contactForm" data-toggle="validator" data-focus="false">
              <div class="form-group">
                <input
                  type="text"
                  class="form-control-input"
                  id="cname"
                  required
                />
                <label class="label-control" for="cname">Nombre completo</label>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <input
                  type="email"
                  class="form-control-input"
                  id="cemail"
                  required
                />
                <label class="label-control" for="cemail"
                  >Correo electrónico</label
                >
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <textarea
                  class="form-control-textarea"
                  id="cmessage"
                  required
                ></textarea>
                <label class="label-control" for="cmessage">Tu mensaje</label>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group checkbox">
                <input
                  type="checkbox"
                  id="cterms"
                  value="Agreed-to-Terms"
                  required
                />He leído y estoy de acuerdo con la
                <a href="{{ url('/politica-de-privacidad') }}">Política de privacidad</a> -
                <a href="{{ url('/terminos-y-condiciones') }}">Términos y condiciones</a>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <button type="submit" class="form-control-submit-button">
                  ENVIAR
                </button>
              </div>
              <div class="form-message">
                <div id="cmsgSubmit" class="h3 text-center hidden"></div>
              </div>
            </form>
            <!-- end of contact form -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of form-3 -->
    <!-- end of contact -->

    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-col first">
              <h5>Sobre Aenfis School</h5>
              <p class="p-small">
                Comprometidos con la educación en línea diseñamos para ti cursos
                personalizados.
              </p>
            </div>
          </div>
          <!-- end of col -->
          <div class="col-md-4">
            <div class="footer-col second">
              <h5>Links</h5>
              <ul class="list-unstyled li-space-lg p-small">
                <li class="media">
                  <i class="fas fa-square"></i>
                  <div class="media-body">
                    <a href="{{ url('/terminos-y-condiciones') }}">Términos y condiciones</a>
                  </div>
                </li>
                <li class="media">
                  <i class="fas fa-square"></i>
                  <div class="media-body">
                    <a href="{{ url('/politica-de-privacidad') }}">Política de privacidad</a>
                  </div>
                </li>
                <li class="media">
                  <i class="fas fa-square"></i>
                  <div class="media-body">
                    <a href="article-details.html">Article Details</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- end of col -->
          <div class="col-md-4">
            <div class="footer-col fourth">
              <h5>Redes Sociales</h5>
              <p class="p-small">Para noticias y actualizaciones ¡síguenos!</p>
              <a href="https://www.facebook.com/AenfisTexcoco" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.twitter.com/AenfisTexcoco" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.instagram.com/aenfistexcoco" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of footer -->
    <!-- end of footer -->

    <!-- Copyright -->
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p class="p-small">
              Copyright © 2020
              <a href="https://aenfis.school">Aenfis School</a> - All rights
              reserved
            </p>
          </div>
          <!-- end of col -->
        </div>
        <!-- enf of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of copyright -->
    <!-- end of copyright -->

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script>
    <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- The Final Countdown plugin for jQuery -->
    <script src="js/swiper.min.js"></script>
    <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script>
    <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script>
    <!-- Custom scripts -->

    <!-- Jivo Chat scripts -->
    <script src="//code.jivosite.com/widget/dIWQUhJTyW" async></script>
  </body>
</html>
