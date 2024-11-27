<!-- resources/views/admin/harga-grooming/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Harga Grooming</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('admin.harga.grooming.create') }}" class="btn btn-primary mb-3">Tambah Harga Grooming</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Jenis Hewan</th>
                    <th>Ukuran Hewan</th>
                    <th>Harga</th>
                    <th>Promo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hargaGroomings as $hargaGrooming)
                    <tr>
                        <td>{{ $hargaGrooming->id }}</td>
                        <td>{{ $hargaGrooming->jenis_hewan }}</td>
                        <td>{{ $hargaGrooming->ukuran_hewan }}</td>
                        <td>{{ number_format($hargaGrooming->harga, 2) }}</td>
                        <td>{{ $hargaGrooming->promo ?? 'Tidak ada' }}</td>
                        <td>
                            <a href="{{ route('admin.harga-grooming.edit', $hargaGrooming->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.harga-grooming.destroy', $hargaGrooming->id) }}" method="GET" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
