@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Tamu</h1>
    <a href="{{ route('daftar_tamu.create') }}" class="btn btn-primary mb-3">Tambah Daftar Tamu</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama Tamu</th>
                <th>Instansi</th>
                <th>PIC</th>
                <th>Keterangan</th>
                <th>Jam Kedatangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($daftarTamu as $tamu)
                <tr>
                    <td>{{ $tamu->id }}</td>
                    <td>{{ $tamu->tanggal }}</td>
                    <td>{{ $tamu->nama_tamu }}</td>
                    <td>{{ $tamu->instansi }}</td>
                    <td>{{ $tamu->pic }}</td>
                    <td>{{ $tamu->keterangan }}</td>
                    <td>{{ $tamu->jam_kedatangan }}</td>
                    <td>
                        <a href="{{ route('daftar_tamu.edit', $tamu->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('daftar_tamu.destroy', $tamu->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection