<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 20px;
        }
        h1, h2 {
            color: #4e73df;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .table th {
            background-color: #4e73df;
            color: white;
        }
        .table-bordered td {
            background-color: white;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center">Dashboard Admin</h1>

        <!-- Button Create -->
        <div class="mb-3">
            <a href="{{ route('create') }}" class="btn btn-success">Create New Entry</a>
        </div>

        <!-- Data Harga Penitipan -->
        <div class="card">
            <div class="card-header">
                <h2>Data Harga Penitipan</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
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
                        @foreach($harga_penitipan as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->jenis_hewan }}</td>
                                <td>{{ $item->harian }}</td>
                                <td>{{ $item->mingguan }}</td>
                                <td>{{ $item->bulanan }}</td>
                                <td>{{ $item->paketan }}</td>
                                <td>{{ $item->promo }}</td>
                                <td>
                                    <!-- Tombol Edit dan Hapus -->
                                    <a href="{{ route('edit', ['id' => $item->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('delete', ['id' => $item->id]) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Data Harga Grooming -->
        <div class="card">
            <div class="card-header">
                <h2>Data Harga Grooming</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Jenis Hewan</th>
                            <th>Ukuran Hewan</th>
                            <th>Harga</th>
                            <th>Promo</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($harga_grooming as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->jenis_hewan }}</td>
                                <td>{{ $item->ukuran_hewan }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->promo }}</td>
                                <td>
                                    <!-- Tombol Edit dan Hapus -->
                                    <a href="{{ route('edit', ['id' => $item->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('delete', ['id' => $item->id]) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Data Pelanggan -->
        <div class="card">
            <div class="card-header">
                <h2>Data Pelanggan</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. Telp</th>
                            <th>Alamat</th>
                            <th>Jenis Hewan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pelanggan as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->no_telp }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->jenis_hewan }}</td>
                                <td>
                                    <!-- Tombol Edit dan Hapus -->
                                    <a href="{{ route('edit', ['id' => $item->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('delete', ['id' => $item->id]) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Data Reservasi Grooming -->
        <div class="card">
            <div class="card-header">
                <h2>Data Reservasi Grooming</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No. WA</th>
                            <th>Jenis Hewan</th>
                            <th>Nama Hewan</th>
                            <th>Jenis Layanan</th>
                            <th>Tanggal Layanan</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reservasi_grooming as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->no_wa }}</td>
                                <td>{{ $item->jenis_hewan }}</td>
                                <td>{{ $item->nama_hewan }}</td>
                                <td>{{ $item->jenis_layanan }}</td>
                                <td>{{ $item->tanggal_layanan }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>
                                    <!-- Tombol Edit dan Hapus -->
                                    <a href="{{ route('edit', ['id' => $item->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('delete', ['id' => $item->id]) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Link ke Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
