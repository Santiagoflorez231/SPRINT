<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

  <link rel="stylesheet" href="/Sprint/css/css.css">
  <style>
    .section-p {
      background-image: url('img/tb-vuelo.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: 0 10%;
      position: relative;

    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img src="/Sprint/img/logoo.png" height="30" alt="MDB Logo" loading="lazy" />
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="inicio_pagina/inicio.html">Sobre nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Projects</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
      <div class="md-form mt-0">
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
      </div>
      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
        <a class="text-reset me-3" href="#">
          <i class="fas fa-shopping-cart"></i>
        </a>
        <form class="d-flex">
          <button class="btn btn-outline-success" type="submit">
            <i class="bi-cart-fill me-1"></i>
            Cart
            <span class="badge bg-success text-white ms-1 rounded-pill">0</span>
          </button>
        </form>

        <!-- Notifications -->
        <!-- Avatar -->
        <div class="dropdown">
          <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" role="button"
            data-bs-toggle="dropdown" data-bs-display="dropdown" aria-expanded="false">
            <img src="https://www.shutterstock.com/image-vector/profile-line-icon-user-outline-260nw-1283517448.jpg"
              class="rounded-circle" height="40" alt="Black and White Portrait of a Man" loading="lazy" />
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
            <li>
              <a class="dropdown-item" href="#">Perfil</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Historial de viajes</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Configuracion</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Cerrar Sesion</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <section class="section-p c-banner-full py-4 py-md-5" <div class="container">
    <div class="row">
      <div class="col-12 col-md-8 col-lg-7">
        <h2 class="text-white font-40 m-0 py-2 py-md-3 font-poppins-semibold">Encuentra las mejores ofertas de tiquetes
          baratos</h2>
      </div>
    </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Roma</h5>
                <!-- Product price-->
                $40.00 - $80.00
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"></div>
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Mexico</h5>
                <!-- Product reviews-->
                <div class="d-flex justify-content-center small text-warning mb-2">
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                </div>
                <!-- Product price-->
                <span class="text-muted text-decoration-line-through">$20.00</span>
                $18.00
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Colombia</h5>
                <!-- Product price-->
                <span class="text-muted text-decoration-line-through">$50.00</span>
                $25.00
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Italia</h5>
                <!-- Product reviews-->
                <div class="d-flex justify-content-center small text-warning mb-2">
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                </div>
                <!-- Product price-->
                $40.00
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Paris</h5>
                <!-- Product price-->
                <span class="text-muted text-decoration-line-through">$50.00</span>
                $25.00
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Noruega</h5>
                <!-- Product price-->
                $120.00 - $280.00
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Sale badge-->
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">España</h5>
                <!-- Product reviews-->
                <div class="d-flex justify-content-center small text-warning mb-2">
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                </div>
                <!-- Product price-->
                <span class="text-muted text-decoration-line-through">$20.00</span>
                $18.00
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
            </div>
          </div>
        </div>
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">Ecuador</h5>
                <!-- Product reviews-->
                <div class="d-flex justify-content-center small text-warning mb-2">
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>
                  <div class="bi-star-fill"></div>

                </div>
                <!-- Product price-->
                $40.00
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4 mb-4">
      <div class="message-communication d-center flex-column">
        <div class="message-comunication-img d-center"><span class="icon-ui icon-shopping-bag"></span></div>
        <div class="message-comunication-text">
          <p class="h5 font-bold text-center">Reserva ahora y paga después</p>
          <p class="text-center">Te damos más tiempo para pagar tu hospedaje</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-4 mb-4">
      <div class="message-communication d-center flex-column">
        <div class="message-comunication-img d-center"><span class="icon-ui icon-credit-card"></span></div>
        <div class="message-comunication-text">
          <p class="h5 font-bold text-center">Paga con tarjetas bancarias</p>
          <p class="text-center">Hasta 36 cuotas* con tarjeta de crédito</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4 mb-4">
      <div class="message-communication d-center flex-column">
        <div class="message-comunication-img d-center"><span class="icon-ui icon-call-center"></span></div>
        <div class="message-comunication-text">
          <p class="h5 font-bold text-center">Nuestros expertos a tu servicio</p>
          <p class="text-center">Atención 24 horas, 365 días del año</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 mt-5 mb-5" >
    <h3 class="h3">Prepara la maletas</h3>
    <p>increíbles destinos para tus vacaciones</p>
  </div>


  <div class="row mt-5">
    <!-- the cols in this div change the number of cards per row depending on screen size and the mb-4 adds space below cards if they spill over into the next row-->
    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card">
        <img class="card-img-top"
          src="https://res.cloudinary.com/sepuckett86/image/upload/v1513176680/IMG_5837_xicdt5.jpg"
          alt="Card image cap">
        <div class="card-body">
          <p class="card-text">El mundo está lleno de maravillas por descubrir y aventuras por vivir. No permitas que la
            rutina te ate; rompe las cadenas y emprende un viaje. Cada paso que das te acerca a un nuevo horizonte y a
            experiencias inolvidables. Viajar es la clave para desbloquear un mundo de posibilidades. ¡Atrévete a
            explorar!</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card">
        <img class="card-img-top"
          src="https://res.cloudinary.com/sepuckett86/image/upload/v1513095416/IMG_7240_q9dadh.jpg"
          alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Cada rincón del mundo alberga secretos por desvelar, culturas por conocer y paisajes por
            contemplar. Viajar es como abrir un libro nuevo en cada destino. Sumérgete en la historia, prueba nuevos
            sabores, abraza la diversidad y descubre lo inexplorado. Cada viaje te enseña algo nuevo sobre ti y el mundo
            que te rodea
          </p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 mb-4">
      <div class="card">
        <img class="card-img-top"
          src="https://res.cloudinary.com/sepuckett86/image/upload/v1513176676/DSCN2129_copy_cdgcqc.jpg"
          alt="Card image cap">
        <div class="card-body">
          <p class="card-text">El viaje no solo te lleva a lugares remotos, sino también al corazón de la humanidad. Con
            cada nueva ciudad que visitas, te encuentras con personas cuyas historias te inspiran y cuyas sonrisas te
            iluminan. Viajar te conecta con culturas, personas y experiencias que enriquecen tu vida y te recuerdan la
            belleza de la diversidad</p>
        </div>
      </div>
    </div>
  </div>
  <footer class="py-2 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Travel's</p></div>
        </footer>

  <!-- Navbar -->
</body>

</html>