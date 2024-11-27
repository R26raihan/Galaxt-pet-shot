<!-- resources/views/admin/harga-grooming/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Harga Grooming</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.harga-grooming.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="jenis_hewan">Jenis Hewan</label>
                <input type="text" class="form-control" id="jenis_hewan" name="jenis_hewan" required>
            </div>

            <div class="form-group">
                <label for="ukuran_hewan">Ukuran Hewan</label>
                <select class="form-control" id="ukuran_hewan" name="ukuran_hewan" required>
                    <option value="Kecil">Kecil</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Besar">Besar</option>
                </select>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" required min="0" step="0.01">
            </div>

            <div class="form-group">
                <label for="promo">Promo (opsional)</label>
                <input type="text" class="form-control" id="promo" name="promo">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
