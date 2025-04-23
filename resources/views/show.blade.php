<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{ $game->nama }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">
  <div class="container">
    <a href="{{ route('games.index') }}" class="btn btn-outline-secondary mb-4">← Kembali ke Daftar</a>
    <div class=>
      @if ($game->gambar)
        <img src="{{ asset('img/' . $game->gambar) }}" class="card-img-top" style="height:300px; object-fit:cover;" alt="{{ $game->nama }}">
      @else
        <div class="d-flex align-items-center justify-content-center bg-light" style="height:300px; font-size:64px;">🎮</div>
      @endif
      <div class="card-body">
        <h2 class="card-title">{{ $game->nama }}</h2>
        <p class="card-text">
          <strong>Harga:</strong>
          {{ $game->harga == 0 ? 'Free' : 'Rp ' . number_format($game->harga, 0, ',', '.') }}
        </p>
        <p class="card-text"><strong>Deskripsi:</strong> {{ $game->deskripsi ?? '-' }}</p>
      </div>
    </div>
  </div>
</body>
</html>
