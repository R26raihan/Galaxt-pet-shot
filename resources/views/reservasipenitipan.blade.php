<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet and Grooming</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reservasi.css') }}" rel="stylesheet">
    <link href="{{ asset('js/inandout.js') }}" rel="stylesheet">

</head>
<body>

    <header class="header">
        <div class="container">
            <h1 class="logo">Galaxy Pet Shop</h1>
            <nav class="nav">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('service') }}">Service</a></li>
                    <li><a href="{{ route('login.form') }}">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>



    <main class="container-reservasi">
        <h2>Form Reservasi Penitipan Hewan</h2>
        <div class="reservasi-grid">
            <!-- Gambar Hewan -->
            <div class="gambar-hewan">
                <img src="{{ asset('images/penitipan.png') }}" alt="Gambar Hewan" class="gambar-hewan-img">
            </div>

            <!-- Form Reservasi -->
            <div class="form-reservasi-container">
                <form action="{{ route('reservasi.store') }}" method="POST" class="form-reservasi">
                    @csrf <!-- Token CSRF untuk keamanan -->

                    <div class="form-group">
                        <label for="nama">Nama Lengkap:</label>
                        <input type="text" id="nama" name="nama" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea id="alamat" name="alamat" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="no_wa">Nomor WhatsApp:</label>
                        <input type="text" id="no_wa" name="no_wa" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="jenis_hewan">Jenis Hewan:</label>
                        <select id="jenis_hewan" name="jenis_hewan" class="form-control" required>
                            <option value="" disabled selected>Pilih jenis hewan</option>
                            <option value="Anjing">Anjing</option>
                            <option value="Kucing">Kucing</option>
                            <option value="Hewan Lainnya">Hewan Lainnya</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama_hewan">Nama Hewan:</label>
                        <input type="text" id="nama_hewan" name="nama_hewan" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="lama_hari">Lama Penitipan (Hari):</label>
                        <input type="number" id="lama_hari" name="lama_hari" class="form-control" min="1" required>
                    </div>

                    <div class="form-group">
                        <label for="paket">Paket Penitipan:</label>
                        <select id="paket" name="paket" class="form-control" required>
                            <option value="" disabled selected>Pilih paket</option>
                            <option value="Harian">Harian</option>
                            <option value="Mingguan">Mingguan</option>
                            <option value="Bulanan">Bulanan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn-submit">Kirim Reservasi</button>
                    </div>
                </form>

            </div>
        </div>
    </main>

    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Galaxy Pet Shop. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>

