@extends('layouts.app')

@section('content')
    <h1>Edit Harga Penitipan</h1>

    <form action="{{ route('admin.harga-penitipan.update', $hargaPenitipan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="jenis_hewan">Jenis Hewan</label>
            <input type="text" name="jenis_hewan" class="form-control" id="jenis_hewan" value="{{ $hargaPenitipan->jenis_hewan }}" required>
        </div>

        <div class="form-group">
            <label for="harian">Harga Harian</label>
            <input type="number" name="harian" class="form-control" id="harian" value="{{ $hargaPenitipan->harian }}">
        </div>

        <div class="form-group">
            <label for="mingguan">Harga Mingguan</label>
            <input type="number" name="mingguan" class="form-control" id="mingguan" value="{{ $hargaPenitipan->mingguan }}">
        </div>

        <div class="form-group">
            <label for="bulanan">Harga Bulanan</label>
            <input type="number" name="bulanan" class="form-control" id="bulanan" value="{{ $hargaPenitipan->bulanan }}">
        </div>

        <div class="form-group">
            <label for="paketan">Harga Paketan</label>
            <input type="number" name="paketan" class="form-control" id="paketan" value="{{ $hargaPenitipan->paketan }}">
        </div>

        <div class="form-group">
            <label for="promo">Promo</label>
            <input type="text" name="promo" class="form-control" id="promo" value="{{ $hargaPenitipan->promo }}">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
