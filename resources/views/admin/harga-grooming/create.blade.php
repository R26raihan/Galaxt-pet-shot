@extends('layouts.app')

@section('content')
<h1>Tambah Harga Grooming</h1>

<form action="{{ route('admin.harga-grooming.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="jenis_hewan">Jenis Hewan</label>
        <input type="text" name="jenis_hewan" id="jenis_hewan" class="form-control" value="{{ old('jenis_hewan') }}">
    </div>

    <div class="form-group">
        <label for="ukuran_hewan">Ukuran Hewan</label>
        <select name="ukuran_hewan" id="ukuran_hewan" class="form-control">
            <option value="Kecil" {{ old('ukuran_hewan') == 'Kecil' ? 'selected' : '' }}>Kecil</option>
            <option value="Sedang" {{ old('ukuran_hewan') == 'Sedang' ? 'selected' : '' }}>Sedang</option>
            <option value="Besar" {{ old('ukuran_hewan') == 'Besar' ? 'selected' : '' }}>Besar</option>
        </select>
    </div>

    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" name="harga" id="harga" class="form-control" value="{{ old('harga') }}">
    </div>

    <div class="form-group">
        <label for="promo">Promo</label>
        <input type="text" name="promo" id="promo" class="form-control" value="{{ old('promo') }}">
    </div>

    <button type="submit" class="btn btn-success mt-3">Simpan</button>
</form>
@endsection
