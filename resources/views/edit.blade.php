@extends("template")

@section("title")
Edit Data
@endsection

@section("content")
<form method="post" action="{{ url('edit') }}">
    @csrf
    <input type="hidden" name="id" value="{{ $film->id }}">
    <div class="mb-2">
        <label class="form-label">Judul Film</label>
        <input type="text" value="{{ $film->judul }}" name="judul" class="form-control" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Ubah Tanggal Tayang</label>
        <input type="date" value="{{ $film->tgl_tayang }}" name="tgl_tayang" class="form-control" required>
    </div>
    <div class="mb-2">
        <label class="form-label">Nama Sutradara</label>
            <input type="text" value="{{ $film->sutradara }}" name="sutradara" class="form-control" required>
        </div>
        <div class="mb-2">
            <label class="form-label">Nama Studio</label>
            <input type="text" value="{{ $film->studio }}" name="studio" class="form-control" required>
        </div>
    <div class="mb-2">
        <label class="form-label">Sinopsis</label>
            <textarea class="form-control" name="sinopsis" required>{{ $film->sinopsis }}</textarea>
    </div>
    <div class="mb-2">
        <label class="form-label">Bahasa</label>
        </div>
        <div class="form-label">
            <label>
            <input type="radio" class="form-check-input" name="bahasa" value="Indonesia" {{ ($film->bahasa == "Indonesia") ? "checked" : "" }}>
            Indonesia
        </label>
    </div>
    <div class="form-check">
            <label>
                <input type="radio" class="form-check-input" name="bahasa" value="Inggris"  {{ ($film->bahasa == "Inggris") ? "checked" : "" }}>
                Inggris
            </label>
        </div>
        <br>
    <div class="mb-5">
        <button type="submit" class="btn btn-primary">
            Simpan
        </button>
        <a href="{{url('film')}}" class="btn btn-danger">
            Kembali
        </a>
    </div>
</form>
@endsection