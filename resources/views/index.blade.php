<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Club Ajedrez Iquique</title>
  <link rel="stylesheet" href="https://unpkg.com/@popperjs/core@2">
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #f2f3f3;">
    
    <div class="container-fluid">
      <img src="img/oficial.png" href="#" alt="" width="100" height="60" class="d-inline-block align-text-top">
      <h6>club de iquique</h6>
      {{-- <button id="darkModeToggle">Toggle Dark Mode</button> --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('/nosotros') }}">nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">Torneo</a>
          </li>
        </li>
        <li class="nav-item">
          @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="nav-link active">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link active">Register</a>
                    @endif
                @endauth
            </div>
          @endif
        </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="carrusel">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/club.jpg" class="d-block w-100 fixed-size-image" alt="...">
          <div class="carousel-caption d-none d-md-block">
            {{-- <h5>HELLO WORD</h5>
            <p>Lorem ipsum dolor sit amet consectetur.</p> --}}
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/club1.jpg" class="d-block w-100 fixed-size-image" alt="...">
          <div class="carousel-caption d-none d-md-block">
            {{-- <h5>HELLO WORD</h5>
            <p>Lorem ipsum dolor sit amet consectetur.</p> --}}
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/2.jpg" class="d-block w-100 fixed-size-image" alt="...">
          <div class="carousel-caption d-none d-md-block">
            {{-- <h5>HELLO WORD</h5>
            <p>Lorem ipsum dolor sit amet consectetur.</p> --}}
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <section class="nosotros">
    <h2 class="text-center my-5" ;">Proximas Competencias</h2>
    <div class="container mt-4">
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="card border-0">
            <img src="img/3.jpg" class="card-img-top img-fluid" alt="Imagen 1">
          </div>
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-6 text-center pt-3 ">
                <button type="button" class="btn btn-primary btn-sm btn-block mb-2">Inscripción en línea</button>
              </div>
              <div class="col-12 col-sm-6 text-center pt-3 pb-5">
                <button type="button" class="btn btn-secondary btn-sm btn-block">Bases del Torneo</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card border-0">
            <img src="img/4.jpg" class="card-img-top img-fluid" alt="Imagen 2">
          </div>
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-6 text-center pt-3">
                <button type="button" class="btn btn-primary btn-sm btn-block mb-2">Inscripción en línea</button>
              </div>
              <div class="col-12 col-sm-6 text-center pt-3 pb-5">
                <button type="button" class="btn btn-secondary btn-sm btn-block">Bases del Torneo</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card border-0">
            <img src="img/5.jpg" class="card-img-top img-fluid" alt="Imagen 3">
          </div>
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-6 text-center pt-3">
                <button type="button" class="btn btn-primary btn-sm btn-block mb-2">Inscripción en línea</button>
              </div>
              <div class="col-12 col-sm-6 text-center pt-3 pb-5">
                <button type="button" class="btn btn-secondary btn-sm btn-block">Bases del Torneo</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center p-5 mt-4">
        <h1 class="">SIGUENOS EN NUESTRAS REDES</h1>
      </div>
      <div class="col-12">
        <p>¡No pierdas ni un solo movimiento! Síguenos en nuestras redes sociales y mantente al tanto de cada
          estrategia, partida épica y novedades de nuestro apasionante mundo ajedrecístico. ¡Únete al juego, síguenos
          hoy!" 🏆♟️</p>
      </div>
      <div class="flex pb-4 pt-4 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 64 64">
          <radialGradient id="nT5WH7nXAOiS46rXmee3Oa_msQ6HdxpqUmi_gr1" cx="33.34" cy="27.936" r="43.888"
            gradientTransform="matrix(1 0 0 -1 0 66)" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#f4e9c3"></stop>
            <stop offset=".219" stop-color="#f8eecd"></stop>
            <stop offset=".644" stop-color="#fdf4dc"></stop>
            <stop offset="1" stop-color="#fff6e1"></stop>
          </radialGradient>
          <path fill="url(#nT5WH7nXAOiS46rXmee3Oa_msQ6HdxpqUmi_gr1)"
            d="M51.03,37.34c0.16,0.98,1.08,1.66,2.08,1.66h5.39c2.63,0,4.75,2.28,4.48,4.96	C62.74,46.3,60.64,48,58.29,48H49c-1.22,0-2.18,1.08-1.97,2.34c0.16,0.98,1.08,1.66,2.08,1.66h8.39c1.24,0,2.37,0.5,3.18,1.32	C61.5,54.13,62,55.26,62,56.5c0,2.49-2.01,4.5-4.5,4.5h-49c-1.52,0-2.9-0.62-3.89-1.61C3.62,58.4,3,57.02,3,55.5	C3,52.46,5.46,50,8.5,50H14c1.22,0,2.18-1.08,1.97-2.34C15.81,46.68,14.89,44,13.89,44H5.5c-2.63,0-4.75-2.28-4.48-4.96	C1.26,36.7,3.36,35,5.71,35H8c1.71,0,3.09-1.43,3-3.16C10.91,30.22,9.45,29,7.83,29H4.5c-2.63,0-4.75-2.28-4.48-4.96	C0.26,21.7,2.37,20,4.71,20H20c0.83,0,1.58-0.34,2.12-0.88C22.66,18.58,23,17.83,23,17c0-1.66-1.34-3-3-3h-1.18	c-0.62-0.09-1.43,0-2.32,0h-9c-1.52,0-2.9-0.62-3.89-1.61S2,10.02,2,8.5C2,5.46,4.46,3,7.5,3h49c3.21,0,5.8,2.79,5.47,6.06	C61.68,11.92,60.11,14,57.24,14H52c-2.76,0-5,2.24-5,5c0,1.38,0.56,2.63,1.46,3.54C49.37,23.44,50.62,24,52,24h6.5	c3.21,0,5.8,2.79,5.47,6.06C63.68,32.92,61.11,35,58.24,35H53C51.78,35,50.82,36.08,51.03,37.34z">
          </path>
          <linearGradient id="nT5WH7nXAOiS46rXmee3Ob_msQ6HdxpqUmi_gr2" x1="32" x2="32" y1="-3.34" y2="59.223"
            gradientTransform="matrix(1 0 0 -1 0 66)" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#155cde"></stop>
            <stop offset=".278" stop-color="#1f7fe5"></stop>
            <stop offset=".569" stop-color="#279ceb"></stop>
            <stop offset=".82" stop-color="#2cafef"></stop>
            <stop offset="1" stop-color="#2eb5f0"></stop>
          </linearGradient>
          <path fill="url(#nT5WH7nXAOiS46rXmee3Ob_msQ6HdxpqUmi_gr2)"
            d="M58,32c0,13.35-10.05,24.34-23,25.83C34.02,57.94,33.01,58,32,58c-1.71,0-3.38-0.17-5-0.49	C15.03,55.19,6,44.65,6,32C6,17.64,17.64,6,32,6S58,17.64,58,32z">
          </path>
          <path fill="#fff"
            d="M42.8,36.05l-0.76,2C41.6,39.22,40.46,40,39.19,40H35v17.83C34.02,57.94,33.01,58,32,58	c-1.71,0-3.38-0.17-5-0.49V40h-2.95C22.36,40,21,38.66,21,37v-2c0-1.66,1.36-3,3.05-3H27v-6c0-5.51,4.49-10,10-10h3	c2.21,0,4,1.79,4,4s-1.79,4-4,4h-3c-1.1,0-2,0.9-2,2v6h4.95C42.08,32,43.55,34.09,42.8,36.05z">
          </path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 64 64">
          <radialGradient id="xW1rhakWxHfCsuNDi~7SWa_119014_gr1" cx="32" cy="33" r="29.606"
            gradientUnits="userSpaceOnUse" spreadMethod="reflect">
            <stop offset="0" stop-color="#c5f1ff"></stop>
            <stop offset=".35" stop-color="#cdf3ff"></stop>
            <stop offset=".907" stop-color="#e4faff"></stop>
            <stop offset="1" stop-color="#e9fbff"></stop>
          </radialGradient>
          <path fill="url(#xW1rhakWxHfCsuNDi~7SWa_119014_gr1)"
            d="M10.5,60h41c2.485,0,4.5-2.015,4.5-4.5v0c0-2.485-2.015-4.5-4.5-4.5h-0.393 c-0.996,0-1.92-0.681-2.08-1.664C48.824,48.083,49.785,47,51,47l5.288,0c2.347,0,4.453-1.704,4.689-4.039 C61.247,40.282,59.127,38,56.5,38l-3.393,0c-0.996,0-1.92-0.681-2.08-1.664C50.824,35.083,51.785,34,53,34l5.241,0 c2.868,0,5.442-2.082,5.731-4.936C64.303,25.789,61.711,23,58.5,23l-12.33,0c-1.624,0-3.081-1.216-3.166-2.839 C42.914,18.431,44.29,17,46,17l2.241,0c2.868,0,5.442-2.082,5.731-4.936C54.303,8.789,51.711,6,48.5,6l-38,0C7.462,6,5,8.462,5,11.5 v0c0,3.038,2.462,5.5,5.5,5.5H14c1.105,0,2,0.895,2,2v0c0,1.105-0.895,2-2,2l-9.288,0c-2.347,0-4.453,1.704-4.689,4.038 C-0.248,27.718,1.873,30,4.5,30l8.33,0c1.624,0,3.081,1.216,3.166,2.839C16.086,34.569,14.71,36,13,36H7.712 c-2.347,0-4.453,1.704-4.689,4.038C2.753,42.718,4.873,45,7.5,45h6.393c0.996,0,1.92,0.681,2.08,1.664 C16.176,47.917,15.215,49,14,49l-3.5,0C7.462,49,5,51.462,5,54.5v0C5,57.538,7.462,60,10.5,60z">
          </path>
          <linearGradient id="xW1rhakWxHfCsuNDi~7SWb_119014_gr2" x1="32.5" x2="32.5" y1="64.102" y2="22.102"
            gradientUnits="userSpaceOnUse" spreadMethod="reflect">
            <stop offset="0" stop-color="#155cde"></stop>
            <stop offset=".278" stop-color="#1f7fe5"></stop>
            <stop offset=".569" stop-color="#279ceb"></stop>
            <stop offset=".82" stop-color="#2cafef"></stop>
            <stop offset="1" stop-color="#2eb5f0"></stop>
          </linearGradient>
          <path fill="url(#xW1rhakWxHfCsuNDi~7SWb_119014_gr2)"
            d="M57.667,19.058c-1.44,0.493-2.997,0.771-4.636,0.956c1.617-0.805,2.735-1.99,3.78-3.441 c0.598-0.83-0.329-1.915-1.25-1.469c-1.638,0.793-3.22,1.382-5.213,1.721C48.399,15.073,45.829,14,43,14 c-4.11,0-7.69,2.25-9.57,5.58C32.52,21.18,32,23.03,32,25c0,0.677,0.082,1.332,0.199,1.975c-8.839-0.263-16.248-4.827-20.463-10.568 C11.268,15.77,10.29,15.906,10,16.641C9.553,17.772,9,19,9,21c0,0.12,0,0.23,0.01,0.34c0.04,1.3,0.33,2.54,0.83,3.66 c0.94,2.17,2.64,3.94,4.77,4.98C14.41,29.99,14.21,30,14,30c-2,0-2.658-0.685-3.743-0.967c-0.683-0.178-1.35,0.392-1.247,1.09 c0.328,2.221,1.484,4.559,3.029,6.047c1.66,1.62,3.88,2.66,6.35,2.81C17.07,39.63,15.58,40,14,40h-1c-0.756,0-1.227,0.8-0.886,1.474 c1.677,3.317,5.561,5.53,9.722,5.516C17.826,49.518,13.091,51,8,51H7c-0.552,0-1,0.448-1,1c0,0.458,0.314,0.828,0.734,0.946 l-0.002,0.017c0,0,7.53,3.037,16.268,3.037c16.93,0,30.69-13.57,30.99-30.43C54,25.38,54,25.19,54,25s0-0.38-0.01-0.57 c-0.014-0.275-0.048-0.545-0.082-0.815c1.851-0.589,3.499-1.558,4.811-2.926C59.442,19.936,58.655,18.72,57.667,19.058z">
          </path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 64 64">
          <radialGradient id="TGwjmZMm2W~B4yrgup6jda_119026_gr1" cx="32" cy="32.5" r="31.259"
            gradientTransform="matrix(1 0 0 -1 0 64)" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#efdcb1"></stop>
            <stop offset="0" stop-color="#f2e0bb"></stop>
            <stop offset=".011" stop-color="#f2e0bc"></stop>
            <stop offset=".362" stop-color="#f9edd2"></stop>
            <stop offset=".699" stop-color="#fef4df"></stop>
            <stop offset="1" stop-color="#fff7e4"></stop>
          </radialGradient>
          <path fill="url(#TGwjmZMm2W~B4yrgup6jda_119026_gr1)"
            d="M58,54c-1.1,0-2-0.9-2-2s0.9-2,2-2h2.5c1.9,0,3.5-1.6,3.5-3.5S62.4,43,60.5,43H50c-1.4,0-2.5-1.1-2.5-2.5	S48.6,38,50,38h8c1.7,0,3-1.3,3-3s-1.3-3-3-3H42v-6h18c2.3,0,4.2-2,4-4.4c-0.2-2.1-2.1-3.6-4.2-3.6H58c-1.1,0-2-0.9-2-2s0.9-2,2-2	h0.4c1.3,0,2.5-0.9,2.6-2.2c0.2-1.5-1-2.8-2.5-2.8h-14C43.7,9,43,8.3,43,7.5S43.7,6,44.5,6h3.9c1.3,0,2.5-0.9,2.6-2.2	C51.1,2.3,50,1,48.5,1H15.6c-1.3,0-2.5,0.9-2.6,2.2C12.9,4.7,14,6,15.5,6H19c1.1,0,2,0.9,2,2s-0.9,2-2,2H6.2c-2.1,0-4,1.5-4.2,3.6	C1.8,16,3.7,18,6,18h2.5c1.9,0,3.5,1.6,3.5,3.5S10.4,25,8.5,25H5.2c-2.1,0-4,1.5-4.2,3.6C0.8,31,2.7,33,5,33h17v11H6	c-1.7,0-3,1.3-3,3s1.3,3,3,3l0,0c1.1,0,2,0.9,2,2s-0.9,2-2,2H4.2c-2.1,0-4,1.5-4.2,3.6C-0.2,60,1.7,62,4,62h53.8	c2.1,0,4-1.5,4.2-3.6C62.2,56,60.3,54,58,54z">
          </path>
          <radialGradient id="TGwjmZMm2W~B4yrgup6jdb_119026_gr2" cx="18.51" cy="66.293" r="69.648"
            gradientTransform="matrix(.6435 -.7654 .5056 .4251 -26.92 52.282)" gradientUnits="userSpaceOnUse">
            <stop offset=".073" stop-color="#eacc7b"></stop>
            <stop offset=".184" stop-color="#ecaa59"></stop>
            <stop offset=".307" stop-color="#ef802e"></stop>
            <stop offset=".358" stop-color="#ef6d3a"></stop>
            <stop offset=".46" stop-color="#f04b50"></stop>
            <stop offset=".516" stop-color="#f03e58"></stop>
            <stop offset=".689" stop-color="#db359e"></stop>
            <stop offset=".724" stop-color="#ce37a4"></stop>
            <stop offset=".789" stop-color="#ac3cb4"></stop>
            <stop offset=".877" stop-color="#7544cf"></stop>
            <stop offset=".98" stop-color="#2b4ff2"></stop>
          </radialGradient>
          <path fill="url(#TGwjmZMm2W~B4yrgup6jdb_119026_gr2)"
            d="M45,57H19c-5.5,0-10-4.5-10-10V21c0-5.5,4.5-10,10-10h26c5.5,0,10,4.5,10,10v26C55,52.5,50.5,57,45,57z">
          </path>
          <path fill="#fff"
            d="M32,20c4.6,0,5.1,0,6.9,0.1c1.7,0.1,2.6,0.4,3.2,0.6c0.8,0.3,1.4,0.7,2,1.3c0.6,0.6,1,1.2,1.3,2 c0.2,0.6,0.5,1.5,0.6,3.2C46,28.9,46,29.4,46,34s0,5.1-0.1,6.9c-0.1,1.7-0.4,2.6-0.6,3.2c-0.3,0.8-0.7,1.4-1.3,2 c-0.6,0.6-1.2,1-2,1.3c-0.6,0.2-1.5,0.5-3.2,0.6C37.1,48,36.6,48,32,48s-5.1,0-6.9-0.1c-1.7-0.1-2.6-0.4-3.2-0.6 c-0.8-0.3-1.4-0.7-2-1.3c-0.6-0.6-1-1.2-1.3-2c-0.2-0.6-0.5-1.5-0.6-3.2C18,39.1,18,38.6,18,34s0-5.1,0.1-6.9 c0.1-1.7,0.4-2.6,0.6-3.2c0.3-0.8,0.7-1.4,1.3-2c0.6-0.6,1.2-1,2-1.3c0.6-0.2,1.5-0.5,3.2-0.6C26.9,20,27.4,20,32,20 M32,17 c-4.6,0-5.2,0-7,0.1c-1.8,0.1-3,0.4-4.1,0.8c-1.1,0.4-2.1,1-3,2s-1.5,1.9-2,3c-0.4,1.1-0.7,2.3-0.8,4.1C15,28.8,15,29.4,15,34 s0,5.2,0.1,7c0.1,1.8,0.4,3,0.8,4.1c0.4,1.1,1,2.1,2,3c0.9,0.9,1.9,1.5,3,2c1.1,0.4,2.3,0.7,4.1,0.8c1.8,0.1,2.4,0.1,7,0.1 s5.2,0,7-0.1c1.8-0.1,3-0.4,4.1-0.8c1.1-0.4,2.1-1,3-2c0.9-0.9,1.5-1.9,2-3c0.4-1.1,0.7-2.3,0.8-4.1c0.1-1.8,0.1-2.4,0.1-7 s0-5.2-0.1-7c-0.1-1.8-0.4-3-0.8-4.1c-0.4-1.1-1-2.1-2-3s-1.9-1.5-3-2c-1.1-0.4-2.3-0.7-4.1-0.8C37.2,17,36.6,17,32,17L32,17z">
          </path>
          <path fill="#fff"
            d="M32,25c-5,0-9,4-9,9s4,9,9,9s9-4,9-9S37,25,32,25z M32,40c-3.3,0-6-2.7-6-6s2.7-6,6-6s6,2.7,6,6S35.3,40,32,40 z">
          </path>
          <circle cx="41" cy="25" r="2" fill="#fff"></circle>
        </svg>
      </div>
    </div>
  </div>

  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous">
</script>


<script src="/resources/js/app.js"></script>


</body>
</html>