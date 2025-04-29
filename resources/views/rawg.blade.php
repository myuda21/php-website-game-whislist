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
                <button type="button" class="btn btn-secondary mx-3" onclick="history.back()">Back</button>
                <a href="{{ route('admin.login.form') }}" class="btn btn-outline-primary">Login</a>
            </div>
        </div>
    </nav>

<div class="container">
    <div class="row">
        @forelse ($rawgGames as $game)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if (!empty($game['background_image']))
                        <img src="{{ $game['background_image'] }}"
                             class="card-img-top"
                             alt="{{ $game['name'] }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $game['name'] }}</h5>
                        <p class="card-text">
                            Released: {{ \Carbon\Carbon::parse($game['released'])->format('d M Y') }}
                        </p>
                        <p class="card-text">Rating: {{ $game['rating'] ?? 0 }}</p>
                        <a href="https://rawg.io/games/{{ $game['slug'] }}"
                           target="_blank"
                           class="btn btn-primary">
                            View on RAWG
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <p>No games found.</p>
        @endforelse
    </div>
</div>

</body>
</html>
