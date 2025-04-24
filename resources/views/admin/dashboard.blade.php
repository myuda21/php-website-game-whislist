<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .game-placeholder {
            height: 200px;
            background-color: #f0f0f0;
            color: #999;
            font-size: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <div class="ml-auto d-flex align-items-center">
            <a href="{{ route('admin.create') }}" class="btn btn-primary mr-3">Tambah Game</a>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-danger">Logout</button>
            </form>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        @foreach ($games as $game)
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm">
                @if ($game->gambar)
                    <img src="{{ asset('img/' . $game->gambar) }}" class="card-img-top" alt="Gambar Game" style="height: 250px; object-fit: cover;">
                @else
                    <div class="game-placeholder" style="height: 250px; font-size: 80px;">🎮</div>
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
                    <p class="card-text flex-grow-1">{{ $game->deskripsi }}</p>
                    <a href="{{ route('admin.edit', $game->id) }}" class="btn btn-primary mt-auto">Edit</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

</body>
</html>