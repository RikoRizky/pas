@extends("template")

@section("title")
Data Film
@endsection

@section("content")

<a href="{{ url('tambah') }}" class="btn btn-primary mb-3">Tambah</a>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Judul</th>
            <th class="text-center">Tanggal Tayang</th>
            <th class="text-center">Nama Sutradara</th>
            <th class="text-center">Nama Studio</th>
            <th class="text-center">Sinopsis</th>
            <th class="text-center">Bahasa</th>
            <th class="text-center">Fitur</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 0;
        ?>
        @foreach($film as $data)
        <?php $no++; ?>
        <tr>
            <td class="text-center">{{ $no }}</td>
            <td class="text-center">{{ $data->judul }}</td>
            <td class="text-center">    
                {{ date("d-m-Y",strtotime($data->tgl_tayang)) }}
            </td>
            <td class="text-center">{{ $data->sutradara }}</td>
            <td class="text-center">{{ $data->studio }}</td>
            <td class="text-center">{{ $data->sinopsis }}</td>
            <td class="text-center">{{ $data->bahasa }}</td>
            <td class="text-center">
                <a href="{{ url('film/'.$data->id.'/edit') }}" class="btn btn-success btn-sm">
                    Edit
                </a>
                <a href="{{ url('film/'.$data->id.'/hapus') }}" 
                onclick="return confirm('Yakin Hapus {{ $data->judul }}.?')" 
                class="btn btn-sm btn-danger">
                Hapus
            </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection