<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<form method="POST" action="{{ route('admin.update', $game->id) }}" enctype="multipart/form-data">
    @csrf
    @method('POST') <!-- ini penting untuk update -->
    
    <input type="text" name="nama" value="{{ $game->nama }}"><br>
    <input type="number" name="harga" value="{{ $game->harga }}"><br>
    <textarea name="deskripsi">{{ $game->deskripsi }}</textarea><br>
    <input type="file" name="gambar"><br>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

