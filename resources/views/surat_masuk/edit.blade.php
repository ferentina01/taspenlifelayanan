@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Surat Masuk</h1>
    <form action="{{ route('surat_masuk.update', $suratMasuk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="perihal" class="form-label">Perihal</label>
            <input type="text" class="form-control" id="perihal" name="perihal" value="{{ $suratMasuk->perihal }}" required>
        </div>
        <div class="mb-3">
            <label for="kurir" class="form-label">Kurir</label>
            <input type="text" class="form-control" id="kurir" name="kurir" value="{{ $suratMasuk->kurir }}" required>
        </div>
        <div class="mb-3">
            <label for="up" class="form-label">UP</label>
            <input type="text" class="form-control" id="up" name="up" value="{{ $suratMasuk->up }}" required>
        </div>
        <div class="mb-3">
            <label for="diterima" class="form-label">Diterima</label>
            <select class="form-select" id="diterima" name="diterima">
                <option value="0" {{ $suratMasuk->diterima ? '' : '
                                <option value="0" {{ $suratMasuk->diterima ? '' : 'selected' }}>Belum Diterima</option>
                <option value="1" {{ $suratMasuk->diterima ? 'selected' : '' }}>Diterima</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection