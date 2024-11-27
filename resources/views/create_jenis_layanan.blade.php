@extends('layouts.app')

@section('content')
<!-- Form untuk menambah Jenis Layanan Grooming -->
<div class="container mt-5">
    <div class="card shadow-lg rounded-lg">
        <div class="card-header">
            <h2 class="text-center">Tambah Jenis Layanan Grooming</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('jenis-layanan.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="nama_layanan" class="form-label">Nama Layanan</label>
                    <input type="text" name="nama_layanan" id="nama_layanan" class="form-control" required>
                </div>

                <div class="mb-4">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="6" required></textarea>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tambah Layanan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
