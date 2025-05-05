<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>GameZone Hero</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-light">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold text-primary" href="/">GameZone</a>
      <div class="d-flex gap-3">
        <a class="nav-link text-dark" href="{{ route('games.gamePage') }}">CRUD Game</a>
        <a class="nav-link text-dark" href="{{ route('games.rawgGames') }}">Rawg</a>
      </div>
    </div>
  </nav>

  <!-- HERO SECTION WITH BACKGROUND IMAGE -->
<section class="position-relative bg-white overflow-hidden" style="min-height: 90vh;">
    <!-- Background SVG -->
    <div class="position-absolute top-0 start-0 w-100 h-100 z-0">
      <svg class="w-100 h-100" viewBox="0 0 1440 450" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" stop-color="rgba(111, 242, 166, 1)" />
            <stop offset="100%" stop-color="rgba(242, 252, 247, 1)" />
          </linearGradient>
        </defs>
        <path fill="url(#gradient)" fill-opacity="1"
          d="M0,700 L0,405 C58.7,434.5 117.4,464.1 185,450 C252.6,435.9 329,378.3 388,350 C447,321.7 488.4,322.9 546,306 C603.6,289.1 677.2,254.3 737,211 C796.8,167.7 842.8,116.1 908,88 C973.2,59.9 1057.7,55.4 1112,32 C1166.3,8.6 1190.4,-33.5 1240,-62 C1289.6,-90.5 1364.8,-105.2 1440,-120 L1440,700 L0,700 Z" />
      </svg>
    </div>

    <!-- Content -->
    <div class="position-relative z-1 d-flex flex-column justify-content-center align-items-start text-start px-5 my-5">
      <h1 class="fw-bold text-black mb-3">Welcome to GameZone</h1>
      <p class="text-black mb-4">
        A simple platform to manage and discover your favorite games, powered by Laravel and the RAWG API.
      </p>
      <div class="d-grid gap-2 d-md-block">
        <button class="btn btn-success" type="button">Get Started</button>
      </div>
    </div>
  </section>

   <!-- TESTIMONI -->
   <section class="py-5 bg-light">
    <div class="container text-center">
      <h2 class="fw-bold mb-4">Apa Kata Mereka?</h2>
      <div class="row g-4 justify-content-center">
        <div class="col-md-4">
          <div class="p-4 border rounded bg-white">
            <p>"GameZone sangat membantu saya dalam mengatur koleksi game saya. Antarmukanya simpel dan fiturnya lengkap!"</p>
            <h6 class="mt-3">– Alex, Gamer</h6>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 border rounded bg-white">
            <p>"Integrasi dengan RAWG API membuat saya bisa mencari info game baru tanpa keluar dari aplikasi!"</p>
            <h6 class="mt-3">– Rina, Developer</h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-5 bg-success text-white text-center">
    <div class="container">
      <h2 class="fw-bold mb-3">Siap Memulai Petualangan Game-mu?</h2>
      <p class="mb-4">Bergabunglah sekarang dan kelola game favoritmu dengan lebih mudah dan menyenangkan!</p>
      <button class="btn btn-light text-success fw-bold">Mulai Sekarang</button>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="py-3 bg-dark text-white text-center">
    <div class="container">
      <small>© 2025 GameZone. All rights reserved.</small>
    </div>
  </footer>


  <!-- SCRIPTS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>
