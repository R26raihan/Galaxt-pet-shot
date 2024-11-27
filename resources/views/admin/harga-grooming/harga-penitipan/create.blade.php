@extends('layouts.app')

@section('content')
    <h1>Tambah Harga Penitipan</h1>

    <form action="{{ route('admin.harga-penitipan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="jenis_hewan">Jenis Hewan</label>
            <input type="text" name="jenis_hewan" class="form-control" id="jenis_hewan" required>
        </div>

        <div class="form-group">
            <label for="harian">Harga Harian</label>
            <input type="number" name="harian" class="form-control" id="harian">
        </div>

        <div class="form-group">
            <label for="mingguan">Harga Mingguan</label>
            <input type="number" name="mingguan" class="form-control" id="mingguan">
        </div>

        <div class="form-group">
            <label for="bulanan">Harga Bulanan</label>
            <input type="number" name="bulanan" class="form-control" id="bulanan">
        </div>

        <div class="form-group">
            <label for="paketan">Harga Paketan</label>
            <input type="number" name="paketan" class="form-control" id="paketan">
        </div>

        <div class="form-group">
            <label for="promo">Promo</label>
            <input type="text" name="promo" class="form-control" id="promo">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
