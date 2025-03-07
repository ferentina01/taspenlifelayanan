@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <h1>Surat Masuk</h1>
          <div class="d-flex justify-content-between mb-3">
        <div>
            <form action="{{ route('surat_masuk.index') }}" method="GET" class="d-inline">
                <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan nama penerima..." style="width: 300px; display: inline;">
            </form>
        </div>
        <div>
            <a href="{{ route('surat_masuk.create') }}" class="btn btn-primary">Tambah Surat</a>
            <a href="{{ route('surat_masuk.pdf') }}" class="btn btn-success">Ekspor PDF</a>
        </div>
    </div> --}}

    <div class="container">
    <h1>Surat Masuk</h1>
    <div class="d-flex justify-content-between mb-3">
        <div>
            <form action="{{ route('surat_masuk.index') }}" method="GET" class="d-inline">
                <input type="text" name="search" class="form-control" placeholder="Search" style="width: 300px; display: inline;">
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
        <div>
            <a href="{{ route('surat_masuk.create') }}" class="btn btn-primary">Tambah Surat</a>
            <a href="{{ route('surat_masuk.pdf') }}" class="btn btn-success">Ekspor PDF</a>
        </div>
    </div>

        
        {{-- <a href="{{ route('surat_masuk.create') }}" class="btn btn-primary mb-3">Tambah Surat Masuk</a> --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Perihal</th>
                    <th>Kurir</th>
                    <th>UP</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suratMasuk as $surat)
                    <tr>
                        <td>{{ $surat->id }}</td>
                        <td>{{ $surat->perihal }}</td>
                        {{-- <td>{{ $surat->kurir }}</td> --}}
                        <td>{{ $surat->tanggal_masuk }}</td>
                        <td>{{ $surat->up }}</td>
                        <td>{{ $surat->Keterangan ? 'Diterima' : 'Belum Diterima' }}</td>
                        <td>
                            <a href="{{ route('surat_masuk.edit', $surat->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('surat_masuk.destroy', $surat->id) }}" method="POST"
                                style="display:inline;">
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
