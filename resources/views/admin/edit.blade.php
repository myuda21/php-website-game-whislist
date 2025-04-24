<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="d-flex h-100 align-items-center">
    <div class="container">
        <form method="POST" action="{{ route('admin.update', $game->id) }}" enctype="multipart/form-data">
            @csrf
            @method('POST') <!-- ini penting untuk update -->

            <input type="text" name="nama" value="{{ $game->nama }}" class="form-control mb-2"><br>
            <input type="number" name="harga" value="{{ $game->harga }}" class="form-control mb-2"><br>
            <textarea name="deskripsi" placeholder="Deskripsi" class="form-control mb-2">{{ $game->deskripsi }}</textarea>
            <input type="file" name="gambar"><br>
            <br>
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-secondary" onclick="history.back()">Back</button>
        </form>
    </div>
</div>
