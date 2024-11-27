@extends('layouts.app')

@section('content')
    <h1>Daftar Harga Penitipan</h1>

    <a href="{{ route('admin.harga-penitipan.create') }}" class="btn btn-primary">Tambah Harga Penitipan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Jenis Hewan</th>
                <th>Harian</th>
                <th>Mingguan</th>
                <th>Bulanan</th>
                <th>Paketan</th>
                <th>Promo</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hargaPenitipan as $item)
                <tr>
                    <td>{{ $item->jenis_hewan }}</td>
                    <td>{{ $item->harian }}</td>
                    <td>{{ $item->mingguan }}</td>
                    <td>{{ $item->bulanan }}</td>
                    <td>{{ $item->paketan }}</td>
                    <td>{{ $item->promo }}</td>
                    <td>
                        <a href="{{ route('admin.harga-penitipan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.harga-penitipan.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
