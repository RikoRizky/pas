@extends("template")

@section("title")
Tambah Data
@endsection

@section("content")
<form method="post" action="{{ url('tambah') }}">
    @csrf
    <div class="mb-2">
        <label class="form-label">Judul Film</label>
        <input type="text" name="judul" class="form-control" placeholder="Masukan Judul Film" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Tanggal Tayang</label>
        <input type="date" name="tgl_tayang" class="form-control" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Nama Sutradara</label>
            <input type="text" name="sutradara" class="form-control" placeholder="Masukan Nama Sutradara" required>
        </div>
        <div class="mb-2">
            <label class="form-label">Nama Studio</label>
            <input type="text" name="studio" class="form-control" placeholder="Masukan Nama Studio" required>
        </div>
    <div class="mb-2">
        <label class="form-label">Sinopsis</label>
            <textarea class="form-control" name="sinopsis" placeholder="Masukan Sinopsis" required></textarea>
    </div>
    <div class="mb-2">
        <label class="form-label">Bahasa</label>
        </div>
        <div class="form-label">
            <label>
            <input type="radio" class="form-check-input" name="bahasa" value="Indonesia" checked>
            Indonesia
        </label>
    </div>
    <div class="form-check">
            <label>
                <input type="radio" class="form-check-input" name="bahasa" value="Inggris">
                Inggris
            </label>
        </div>
        <br>
    <div class="mb-5">
        <button type="submit" class="btn btn-primary">
            Tambah
        </button>
        <a href="{{url('film')}}" class="btn btn-danger">
            Kembali
        </a>
    </div>
</form>
@endsection