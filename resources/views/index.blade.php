<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .hero-section {
          background: white;
        }

        .hero-section .row {
          min-height: 90vh;
        }

        .hero-section .hero-text {
          display: flex;
          flex-direction: column;
          justify-content: center;
          padding: 3rem 1rem;
          color: green;
          text-align: center;
        }
        @media (min-width: 768px) {
          .hero-section .hero-text {
            text-align: start;
            padding: 0 3rem;
          }
        }

        .hero-section .hero-image {
          position: relative;
          background: #000;
          padding: 0;
          overflow: hidden;
          background: transparent;
        }
        .hero-section .hero-image svg {
          position: absolute;
          bottom: 0;
          right: 0;
          width: 100%;
          height: 100%;
        }

        .hero-section .hero-text h1 {
          font-size: 2.5rem;
          margin-bottom: 1rem;
        }
        .hero-section .hero-text p {
          font-size: 1.1rem;
          margin-bottom: 1.5rem;
        }
      </style>
</head>

<body class="bg-light">

    <!-- NAVBAR -->
    <nav class="navbar navbar-light bg-white shadow-sm">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Centered Logo -->
            <div>
                <a class="navbar-brand fw-bold text-primary" href="/">GameZone</a>
            </div>

            <!-- Left links -->
            <div class="d-flex gap-3">
                <a class="nav-link text-black" href="{{ route('games.gamePage') }}">CRUD Game</a>
                <a class="nav-link text-black" href="{{ route('games.rawgGames') }}">Rawg</a>
            </div>

            <!-- Right link -->
            <div>

            </div>

        </div>
    </nav>

    <section class="hero-section">
        <div class="container-fluid px-0">
          <div class="row gx-0">
            <!-- LEFT: text -->
            <div class="col-md-6 hero-text">
              <h1 class="fw-bold">Welcome to GameZone</h1>
              <p>A simple platform to manage and discover your favorite games, powered by Laravel and the RAWG API.</p>
              <button type="button" class="btn btn-success">Get Started</button>
            </div>

            <!-- RIGHT: full-size wave SVG -->
            <div class="col-md-6 hero-image">
                <svg viewBox="150 0 1000 450" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                  <defs>
                    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                      <stop offset="0%" stop-color="rgba(111, 242, 166, 1)" />
                      <stop offset="100%" stop-color="rgba(242, 252, 247, 1)" />
                    </linearGradient>
                  </defs>
                  <path fill="url(#gradient)" fill-opacity="1"
                    d="M0,700 L0,405 C58.7,434.5 117.4,464.1 185,450 C252.6,435.9 329,378.3 388,350 C447,321.7 488.4,322.9 546,306 C603.6,289.1 677.2,254.3 737,211 C796.8,167.7 842.8,116.1 908,88 C973.2,59.9 1057.7,55.4 1112,32 C1166.3,8.6 1190.4,-33.5 1240,-62 C1289.6,-90.5 1364.8,-105.2 1440,-120 L1440,700 L0,700 Z"/>
                </svg>
              </div>
          </div>
        </div>
    </section>

    <section class="hero-section">
        <div class="container-fluid px-0">
          <div class="row gx-0">
            <!-- LEFT: text -->
            <div class="col-md-6 hero-text">
              <h1 class="fw-bold">Welcome to GameZone</h1>
              <p>A simple platform to manage and discover your favorite games, powered by Laravel and the RAWG API.</p>
              <button type="button" class="btn btn-success">Get Started</button>
            </div>

            <!-- RIGHT: full-size wave SVG -->
            <div class="col-md-6 hero-image">

              </div>
          </div>
        </div>
    </section>


    <!-- Script AOS & Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>

