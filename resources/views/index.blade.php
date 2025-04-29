<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

            </div>

        </div>
    </nav>

</body>

</html>

