@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Surat Masuk</h1>
        <a href="{{ route('surat_masuk.create') }}" class="btn btn-primary mb-3">Tambah Surat Masuk</a>
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
                    <th>Diterima</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suratMasuk as $surat)
                    <tr>
                        <td>{{ $surat->perihal }}</td>
                        <td>{{ $surat->kurir }}</td>
                        <td>{{ $surat->up }}</td>
                        <td>{{ $surat->diterima ? 'Diterima' : 'Belum Diterima' }}</td>
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
