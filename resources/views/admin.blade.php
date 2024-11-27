<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Link ke CSS Bootstrap untuk styling cepat -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Menambahkan font awesome untuk ikon (opsional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar a {
            color: white;
        }

        .navbar-toggler-icon {
            background-color: white;
        }

        .container {
            margin-top: 30px;
        }

        h1,
        h2 {
            color: #007bff;
            font-weight: bold;
        }

        table th,
        table td {
            text-align: center;
            vertical-align: middle;
        }

        .table {
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .table-bordered {
            border: none;
        }

        .table th,
        .table td {
            border-top: 1px solid #dee2e6;
        }

        .table tr:hover {
            background-color: #f1f1f1;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        .card-body {
            background-color: white;
            padding: 15px;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 20px;
            padding: 10px 20px;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .nav-link {
            font-weight: bold;
        }

        .nav-link:hover {
            color: #ff6347;
        }

        .table-container {
            margin-top: 30px;
        }

        /* Media Queries for Responsive Design */
        @media (max-width: 768px) {
            .navbar a {
                font-size: 14px;
            }

            .card-body {
                padding: 10px;
            }

            .table th, .table td {
                font-size: 12px;
                padding: 8px;
            }

            .btn-custom {
                padding: 8px 16px;
                font-size: 14px;
            }

            h1, h2 {
                font-size: 24px;
            }

            .container {
                margin-top: 20px;
            }

            /* Tabel Responsif */
            .table {
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table th, .table td {
                white-space: nowrap;
            }
        }

        @media (max-width: 480px) {
            .navbar a {
                font-size: 12px;
            }

            h1, h2 {
                font-size: 20px;
            }

            .card-header {
                font-size: 16px;
            }

            .table th, .table td {
                font-size: 10px;
                padding: 6px;
            }

            .btn-custom {
                padding: 6px 12px;
                font-size: 12px;
            }

            .container {
                margin-top: 15px;
            }
        }
    </style>

</head>

<body>


    <!-- Main Content -->
    <div class="container">

        <h1>Admin Dashboard</h1>

          <!-- Form Pencarian dan Filter -->
    <div class="row mb-4">
        <div class="col-md-4">
            <!-- Pencarian Berdasarkan Nama -->
            <input type="text" id="searchName" class="form-control" placeholder="Cari Nama">
        </div>
        <div class="col-md-4">
            <!-- Filter Berdasarkan Jenis Hewan -->
            <select id="filterAnimal" class="form-control">
                <option value="">Pilih Jenis Hewan</option>
                <option value="Anjing">Anjing</option>
                <option value="Kucing">Kucing</option>
                <option value="Burung">Burung</option>
                <!-- Tambahkan kategori lainnya sesuai kebutuhan -->
            </select>
        </div>
        <div class="col-md-4">
            <!-- Tombol untuk Reset -->
            <button class="btn btn-secondary" onclick="resetFilters()">Reset Filter</button>
        </div>
    </div>

    <!-- Card for Customer Data -->
    <div class="card mt-4">
        <div class="card-header">
            Data User Yang Mendaftar
        </div>
        <div class="card-body table-container">
            <table class="table table-bordered table-striped" id="userTable">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Telepon</th>
                        <th>Alamat</th>
                        <th>Jenis Hewan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelanggan as $item)
                    <tr class="user-data" data-name="{{ $item->name }}" data-animal="{{ $item->jenis_hewan }}">
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->no_telp }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->jenis_hewan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>




<!-- Card for Jenis Layanan Grooming -->
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Data Jenis Layanan Grooming</span>
        <!-- Tombol Tambah Layanan, mengarah ke halaman tambah layanan -->
        <a href="{{ route('jenis-layanan.create') }}" class="btn btn-success btn-sm">Tambah Layanan</a>
    </div>
    <div class="card-body table-container">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama Layanan</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th> <!-- Tambahkan kolom aksi -->
                </tr>
            </thead>
            <tbody>
                @foreach ($jenisLayananGrooming as $layanan)
                    <tr>
                        <td>{{ $layanan->nama_layanan }}</td>
                        <td>{{ $layanan->deskripsi }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <!-- Tombol Hapus -->
                            <form action="{{ route('jenis-layanan.destroy', $layanan->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Card for Harga Penitipan -->
<div class="card">
    <div class="card-header">
        Data Harga Penitipan
    </div>
    <div class="card-body table-container">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Jenis Hewan</th>
                    <th>Harga Harian</th>
                    <th>Harga Mingguan</th>
                    <th>Harga Bulanan</th>
                    <th>Harga Paketan</th>
                    <th>Promo</th>
                    <th>Aksi</th> <!-- Kolom aksi -->
                </tr>
            </thead>
            <tbody>
                @foreach ($hargapenitipan as $item)
                    <tr>
                        <td>{{ $item->jenis_hewan }}</td>
                        <td>{{ $item->harian }}</td>
                        <td>{{ $item->mingguan }}</td>
                        <td>{{ $item->bulanan }}</td>
                        <td>{{ $item->paketan }}</td>
                        <td>{{ $item->promo }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('admin.harga-penitipan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



<!-- Card for Grooming Reservations -->
<div class="card mt-4">
    <div class="card-header">
        Data Reservasi Grooming
        <div class="float-right">
            <!-- Pencarian berdasarkan Nama -->
            <input type="text" id="searchByName" class="form-control" placeholder="Cari Nama" onkeyup="filterTable()">
            <!-- Filter berdasarkan Jenis Hewan -->
            <select id="filterByAnimalType" class="form-control mt-2" onchange="filterTable()">
                <option value="">Filter Jenis Hewan</option>
                <option value="Anjing">Anjing</option>
                <option value="Kucing">Kucing</option>
                <!-- Tambahkan opsi lainnya jika diperlukan -->
            </select>
        </div>
    </div>
    <div class="card-body table-container">
        <table class="table table-bordered table-striped" id="reservasiTable">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No WA</th>
                    <th>Jenis Hewan</th>
                    <th>Nama Hewan</th>
                    <th>Jenis Layanan</th>
                    <th>Tanggal Layanan</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservasigrooming as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->no_wa }}</td>
                        <td>{{ $item->jenis_hewan }}</td>
                        <td>{{ $item->nama_hewan }}</td>
                        <td>{{ $item->jenis_layanan }}</td>
                        <td>{{ $item->tanggal_layanan }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('reservasigrooming.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                        <td>
                            <!-- Tombol Hapus -->
                            <form action="{{ url('reservasigrooming/delete/'.$item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

 <!-- Card for Reservasi Penitipan -->
<div class="card mt-4">
    <div class="card-header">
        Data Reservasi Penitipan
        <div class="float-right">
            <!-- Pencarian berdasarkan Nama -->
            <input type="text" id="searchByNamePenitipan" class="form-control" placeholder="Cari Nama" onkeyup="filterTablePenitipan()">
            <!-- Filter berdasarkan Jenis Hewan -->
            <select id="filterByAnimalTypePenitipan" class="form-control mt-2" onchange="filterTablePenitipan()">
                <option value="">Filter Jenis Hewan</option>
                <option value="Anjing">Anjing</option>
                <option value="Kucing">Kucing</option>
                <!-- Tambahkan opsi lainnya jika diperlukan -->
            </select>
        </div>
    </div>
    <div class="card-body table-container">
        <table class="table table-bordered table-striped" id="reservasiPenitipanTable">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No WA</th>
                    <th>Jenis Hewan</th>
                    <th>Nama Hewan</th>
                    <th>Lama Hari</th>
                    <th>Paket</th>
                    <th>Aksi</th>   <!-- Kolom untuk tombol Edit dan Delete -->
                </tr>
            </thead>
            <tbody>
                @foreach ($reservasipenitipan as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->no_wa }}</td>
                        <td>{{ $item->jenis_hewan }}</td>
                        <td>{{ $item->nama_hewan }}</td>
                        <td>{{ $item->lama_hari }}</td>
                        <td>{{ $item->paket }}</td>
                        <td class="d-flex">
                            <!-- Tombol Edit -->
                            <a href="{{ route('reservasipenitipan.edit', $item->id) }}" class="btn btn-primary btn-sm mr-2">Edit</a>

                            <!-- Tombol Hapus -->
                            <form action="{{ url('reservasipenitipan/delete/'.$item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

    <!-- Link ke JS Bootstrap untuk fitur interaktivitas -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        // Fungsi untuk melakukan pencarian nama dan filter berdasarkan jenis hewan
        document.getElementById('searchName').addEventListener('input', filterData);
        document.getElementById('filterAnimal').addEventListener('change', filterData);

        function filterData() {
            const searchQuery = document.getElementById('searchName').value.toLowerCase();
            const animalFilter = document.getElementById('filterAnimal').value.toLowerCase();
            const rows = document.querySelectorAll('#userTable .user-data');

            rows.forEach(row => {
                const name = row.getAttribute('data-name').toLowerCase();
                const animal = row.getAttribute('data-animal').toLowerCase();

                // Menyembunyikan atau menampilkan baris berdasarkan pencarian nama dan filter jenis hewan
                if ((name.includes(searchQuery) || searchQuery === '') &&
                    (animal.includes(animalFilter) || animalFilter === '')) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        // Fungsi untuk reset pencarian dan filter
        function resetFilters() {
            document.getElementById('searchName').value = '';
            document.getElementById('filterAnimal').value = '';
            filterData();
        }
    </script>
    <script>
        // Fungsi untuk melakukan filter tabel
        function filterTable() {
            // Mendapatkan nilai input pencarian dan filter jenis hewan
            const searchByName = document.getElementById("searchByName").value.toLowerCase();
            const filterByAnimalType = document.getElementById("filterByAnimalType").value.toLowerCase();

            // Mendapatkan tabel dan semua baris
            const table = document.getElementById("reservasiTable");
            const rows = table.getElementsByTagName("tr");

            // Loop untuk memfilter setiap baris tabel
            for (let i = 1; i < rows.length; i++) {  // Mulai dari 1 untuk melewati header
                const row = rows[i];
                const columns = row.getElementsByTagName("td");

                // Mendapatkan nilai dari kolom yang diperlukan untuk pencarian dan filter
                const nama = columns[0].textContent.toLowerCase();  // Kolom Nama
                const jenisHewan = columns[3].textContent.toLowerCase();  // Kolom Jenis Hewan

                // Memeriksa apakah baris sesuai dengan pencarian dan filter
                const matchesName = nama.includes(searchByName); // Memeriksa pencarian nama
                const matchesAnimalType = filterByAnimalType ? jenisHewan.includes(filterByAnimalType) : true; // Memeriksa filter jenis hewan

                // Menampilkan atau menyembunyikan baris berdasarkan hasil pencarian dan filter
                if (matchesName && matchesAnimalType) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
        }
    </script>
    <script>
        // Fungsi untuk melakukan filter tabel pada Reservasi Penitipan
        function filterTablePenitipan() {
            // Mendapatkan nilai input pencarian dan filter jenis hewan
            const searchByName = document.getElementById("searchByNamePenitipan").value.toLowerCase();
            const filterByAnimalType = document.getElementById("filterByAnimalTypePenitipan").value.toLowerCase();

            // Mendapatkan tabel dan semua baris
            const table = document.getElementById("reservasiPenitipanTable");
            const rows = table.getElementsByTagName("tr");

            // Loop untuk memfilter setiap baris tabel
            for (let i = 1; i < rows.length; i++) {  // Mulai dari 1 untuk melewati header
                const row = rows[i];
                const columns = row.getElementsByTagName("td");

                // Mendapatkan nilai dari kolom yang diperlukan untuk pencarian dan filter
                const nama = columns[0].textContent.toLowerCase();  // Kolom Nama
                const jenisHewan = columns[3].textContent.toLowerCase();  // Kolom Jenis Hewan

                // Memeriksa apakah baris sesuai dengan pencarian dan filter
                const matchesName = nama.includes(searchByName); // Memeriksa pencarian nama
                const matchesAnimalType = filterByAnimalType ? jenisHewan.includes(filterByAnimalType) : true; // Memeriksa filter jenis hewan

                // Menampilkan atau menyembunyikan baris berdasarkan hasil pencarian dan filter
                if (matchesName && matchesAnimalType) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
        }
    </script>


</body>

</html>
