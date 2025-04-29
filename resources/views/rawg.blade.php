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

            </div>

        </div>
    </nav>

    <div class="container py-4">
        <!-- Form Pencarian -->
        <form method="GET" action="{{ route('games.rawgGames') }}" class="mb-4 d-flex">
            <input
                type="text"
                name="search"
                class="form-control me-2"
                placeholder="Search games..."
                value="{{ old('search', $search) }}"
            >
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <div class="row">
            @forelse ($rawgGames as $game)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if (!empty($game['background_image']))
                            <img src="{{ $game['background_image'] }}" class="card-img-top" alt="{{ $game['name'] }}">
                        @else
                            <div class="game-placeholder">
                                <span>No Image</span>
                            </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $game['name'] }}</h5>
                            <p class="card-text">
                                Released: {{ \Carbon\Carbon::parse($game['released'])->format('d M Y') }}
                            </p>
                            <p class="card-text">Rating: {{ $game['rating'] ?? 0 }}</p>
                            <a href="https://rawg.io/games/{{ $game['slug'] }}" target="_blank" class="btn btn-primary">
                                View on RAWG
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <p>No games found.</p>
            @endforelse
        </div>

        <!-- Paginasi -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item @if($page <= 1) disabled @endif">
                    <a class="page-link" href="{{ route('games.rawgGames', array_merge(request()->except('page'), ['page' => $page - 1])) }}">
                        Previous
                    </a>
                </li>
                <li class="page-item disabled">
                    <span class="page-link">Page {{ $page }} of {{ $lastPage }}</span>
                </li>
                <li class="page-item @if($page >= $lastPage) disabled @endif">
                    <a class="page-link" href="{{ route('games.rawgGames', array_merge(request()->except('page'), ['page' => $page + 1])) }}">
                        Next
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</body>
</html>
