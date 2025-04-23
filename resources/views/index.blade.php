<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .game-card img {
            object-fit: cover;
            height: 200px;
        }
        .game-placeholder {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f0f0f0;
            font-size: 48px;
        }
    </style>
</head>
<body class="bg-light py-4">

    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <h1 class="mb-4">Daftar Game</h1>
            <div class="ml-auto d-flex align-items-center">
                <a href="{{ route('admin.login.form') }}" class="btn btn-outline-primary">Login</a>
            </div>
        </div>
    </nav>

<div class="container">
    <div class="row">
        @foreach ($games as $game)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm">
                    @if ($game->gambar)
                        <img src="{{ asset('img/' . $game->gambar) }}" class="card-img-top" alt="Gambar Game">
                    @else
                        <div class="game-placeholder">🎮</div>
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $game->nama }}</h5>
                        <p class="card-text mb-1">
                            <strong>Harga:</strong>
                            @if ($game->harga == 0)
                                <span class="text-success">Free</span>
                            @else
                                Rp {{ number_format($game->harga, 0, ',', '.') }}
                            @endif
                        </p>
                        <a href="{{ route('games.show', $game->id) }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>
