@extends('layouts.app')

<!-- Form Edit Jenis Layanan Grooming -->
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header">
            <h3>Edit Jenis Layanan Grooming</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('jenis-layanan.update', $jenisLayananGrooming->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama_layanan">Nama Layanan</label>
                    <input type="text" name="nama_layanan" id="nama_layanan" class="form-control" value="{{ $jenisLayananGrooming->nama_layanan }}" required>
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required>{{ $jenisLayananGrooming->deskripsi }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Kembali</a>
            </form>

        </div>
    </div>
</div>
