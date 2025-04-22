@props(['game'])

<div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
  <div class="card h-100 shadow-sm">
    @if ($game->gambar)
      <img src="{{ asset('img/' . $game->gambar) }}" class="card-img-top" style="height:200px; object-fit:cover;" alt="{{ $game->nama }}">
    @else
      <div class="d-flex align-items-center justify-content-center bg-light" style="height:200px; font-size:48px;">🎮</div>
    @endif
    <div class="card-body d-flex flex-column">
      <h5 class="card-title">{{ $game->nama }}</h5>
      <p class="card-text mb-2">
        <strong>Harga:</strong>
        @if ($game->harga == 0)
          <span class="text-success">Free</span>
        @else
          Rp {{ number_format($game->harga, 0, ',', '.') }}
        @endif
      </p>
      <a href="{{ url('/game/'.$game->id) }}" class="btn btn-primary mt-auto">Lihat Detail</a>
    </div>
  </div>
</div>

