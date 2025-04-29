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
                <a class="nav-link" href="{{ route('games.gamePage') }}">CRUD Game</a>
                <a class="nav-link" href="{{ route('games.rawgGames') }}">Rawg</a>
            </div>

            <!-- Right link -->
            <div>
                <a href="{{ route('admin.login.form') }}" class="btn btn-outline-primary">Login</a>
            </div>

        </div>
    </nav>

<div class="container py-4">
    <div class="row">
        @foreach ($games as $game)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card shadow-sm">
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
                        <div class="row">
                            <div class="d-flex gap-2">
                                <a href="{{ route('games.show', $game->id) }}" class="btn btn-primary">Lihat Detail</a>
                                <button onclick="window.open('{{ $game->link }}', '_blank')" class="btn btn-primary">
                                    Go to Link
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>
