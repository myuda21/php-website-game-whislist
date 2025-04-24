<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="d-flex h-100 align-items-center">
    <div class="container">
        <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data" class="p-3">
            @csrf
            <div class="form-group">
                <input type="text" name="nama" placeholder="Nama Game" class="form-control mb-2">
            </div>
            <div class="form-group">
                <input type="number" name="harga" placeholder="Harga" class="form-control mb-2">
            </div>
            <div class="form-group">
                <textarea name="deskripsi" placeholder="Deskripsi" class="form-control mb-2"></textarea>
            </div>
            <div class="form-group">
                <input type="file" name="gambar" class="form-control-file mb-3">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" onclick="history.back()">Back</button>
        </form>
    </div>
</div>
