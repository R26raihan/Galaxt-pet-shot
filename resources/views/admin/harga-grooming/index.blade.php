@extends('layouts.app')

@section('content')
<h1>Daftar Harga Grooming</h1>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('admin.harga-grooming.create') }}" class="btn btn-primary">Tambah Harga Grooming</a>

<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>#</th>
            <th>Jenis Hewan</th>
            <th>Ukuran Hewan</th>
            <th>Harga</th>
            <th>Promo</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($hargaGrooming as $harga)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $harga->jenis_hewan }}</td>
            <td>{{ $harga->ukuran_hewan }}</td>
            <td>{{ $harga->harga }}</td>
            <td>{{ $harga->promo ?? 'Tidak ada' }}</td>
            <td>
                <a href="{{ route('admin.harga-grooming.edit', $harga->id) }}" class="btn btn-warning">Edit</a>

                <form action="{{ route('admin.harga-grooming.destroy', $harga->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
