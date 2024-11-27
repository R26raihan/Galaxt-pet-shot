<!-- resources/views/admin/harga-grooming/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Harga Grooming</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.harga-grooming.update', $hargaGrooming->id) }}" method="POST">
            @csrf
            @method('POST') <!-- Gunakan POST karena menggunakan method spoofing -->

            <div class="form-group">
                <label for="jenis_hewan">Jenis Hewan</label>
                <input type="text" class="form-control" id="jenis_hewan" name="jenis_hewan" value="{{ $hargaGrooming->jenis_hewan }}" required>
            </div>

            <div class="form-group">
                <label for="ukuran_hewan">Ukuran Hewan</label>
                <select class="form-control" id="ukuran_hewan" name="ukuran_hewan" required>
                    <option value="Kecil" {{ $hargaGrooming->ukuran_hewan == 'Kecil' ? 'selected' : '' }}>Kecil</option>
                    <option value="Sedang" {{ $hargaGrooming->ukuran_hewan == 'Sedang' ? 'selected' : '' }}>Sedang</option>
                    <option value="Besar" {{ $hargaGrooming->ukuran_hewan == 'Besar' ? 'selected' : '' }}>Besar</option>
                </select>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ $hargaGrooming->harga }}" required min="0" step="0.01">
            </div>

            <div class="form-group">
                <label for="promo">Promo (opsional)</label>
                <input type="text" class="form-control" id="promo" name="promo" value="{{ $hargaGrooming->promo }}">
            </div>

            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
@endsection
