@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Reservasi Penitipan
        </div>
        <div class="card-body">
            <form action="{{ route('reservasi.penitipan.update', $reservasiPenitipan->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $reservasiPenitipan->nama) }}" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $reservasiPenitipan->alamat) }}" required>
                </div>

                <div class="form-group">
                    <label for="no_wa">No WA</label>
                    <input type="text" class="form-control" id="no_wa" name="no_wa" value="{{ old('no_wa', $reservasiPenitipan->no_wa) }}" required>
                </div>

                <div class="form-group">
                    <label for="jenis_hewan">Jenis Hewan</label>
                    <input type="text" class="form-control" id="jenis_hewan" name="jenis_hewan" value="{{ old('jenis_hewan', $reservasiPenitipan->jenis_hewan) }}" required>
                </div>

                <div class="form-group">
                    <label for="nama_hewan">Nama Hewan</label>
                    <input type="text" class="form-control" id="nama_hewan" name="nama_hewan" value="{{ old('nama_hewan', $reservasiPenitipan->nama_hewan) }}" required>
                </div>

                <div class="form-group">
                    <label for="lama_hari">Lama Hari</label>
                    <input type="number" class="form-control" id="lama_hari" name="lama_hari" value="{{ old('lama_hari', $reservasiPenitipan->lama_hari) }}" required>
                </div>

                <div class="form-group">
                    <label for="paket">Paket</label>
                    <input type="text" class="form-control" id="paket" name="paket" value="{{ old('paket', $reservasiPenitipan->paket) }}" required>
                </div>

                <button type="submit" class="btn btn-success mt-3">Update</button>
            </form>
        </div>
    </div>
@endsection
