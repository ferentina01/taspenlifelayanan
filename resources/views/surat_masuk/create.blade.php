@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Surat Masuk</h1>
    <form action="{{ route('surat_masuk.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="perihal" class="form-label">Perihal</label>
            <input type="text" class="form-control" id="perihal" name="perihal" required>
        </div>
        <div class="mb-3">
            <label for="kurir" class="form-label">Kurir</label>
            <input type="text" class="form-control" id="kurir" name="kurir" required>
        </div>
        <div class="mb-3">
            <label for="up" class="form-label">UP</label>
            <input type="text" class="form-control" id="up" name="up" required>
        </div>
        <div class="mb-3">
            <label for="diterima" class="form-label">Diterima</label>
            <select class="form-select" id="diterima" name="diterima">
                <option value="0">Belum Diterima</option>
                <option value="1">Diterima</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection