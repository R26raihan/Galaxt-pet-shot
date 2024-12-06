<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Grooming - Galaxy Pet Shop</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/grroming.css') }}" rel="stylesheet">
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




    <section class="fasilitas-grooming-hewan">
        <h2>Fasilitas Grooming Hewan</h2>
        <p>Kami menyediakan fasilitas grooming lengkap untuk menjaga kebersihan dan kesehatan hewan peliharaan Anda:</p>
        <ul>
            <li>Mandi Dengan Shampo Khusus.</li>
            <li>Pemotongan kuku.</li>
            <li>Pembersihan Telinga.</li>
            <li>Penyisiran dan perapihan bulu.</li>
            <li>Pengeringan dengan Teknik yang aman dan nyaman.</li>
            <li>Pemeriksaan kondisi kulit untuk mendeteksi masalah seperti iritasi atau alargi.</li>
        </ul>
    </section>

    <style>
        .fasilitas-grooming-hewan {
    background-color: #f3f4f6;
    border-radius: 12px;
    padding: 25px;
    max-width: 900px;
    margin: 30px auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.fasilitas-grooming-hewan h2 {
    color: #ff6f61; /* Warna merah pastel */
    font-size: 26px;
    margin-bottom: 15px;
}

.fasilitas-grooming-hewan p {
    font-size: 16px;
    margin-bottom: 20px;
    color: #555; /* Warna teks abu-abu */
}

.fasilitas-grooming-hewan ul {
    list-style-type: none;
    padding: 0;
    text-align: left;
    margin: 20px 0;
}

.fasilitas-grooming-hewan ul li {
    font-size: 16px;
    margin-bottom: 10px;
    padding-left: 20px;
    position: relative;
}

.fasilitas-grooming-hewan ul li:before {
    content: "✔";
    color: #ff6f61; /* Warna ikon sesuai heading */
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 0;
}

.fasilitas-grooming-hewan img {
    width: 100%;
    max-width: 400px;
    height: auto;
    border-radius: 12px;
    margin-top: 15px;
}

    </style>





    <section class="reservasi-grooming">
        <h2>Form Reservasi Grooming</h2>
        <div class="reservasi-grid">
            <!-- Gambar Grooming -->
            <div class="gambar-grooming">
                <img src="{{ asset('images/grooming.png') }}" alt="Gambar Grooming" class="gambar-grooming-img">
            </div>

            <!-- Form Reservasi Grooming -->
            <div class="form-reservasi-container">
                <form action="{{ route('reservasi.grooming.store') }}" method="POST" class="form-reservasi">
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
                        <label for="jenis_layanan">Jenis Layanan:</label>
                        <select id="jenis_layanan" name="jenis_layanan" class="form-control" required>
                            <option value="" disabled selected>Pilih jenis layanan</option>
                            @foreach ($jenisLayanan as $layanan)
                                <option value="{{ $layanan->nama_layanan }}">
                                    {{ $layanan->nama_layanan }} - {{ $layanan->deskripsi }}
                                </option>
                            @endforeach
                        </select>
                    </div>



                    <div class="form-group">
                        <label for="tanggal_layanan">Tanggal Layanan:</label>
                        <input type="date" id="tanggal_layanan" name="tanggal_layanan" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga Layanan:</label>
                        <select id="harga" name="harga" class="form-control" required>
                            <option value="" disabled selected>Pilih harga layanan</option>
                            @foreach ($hargaGrooming as $harga)
                                <option value="{{ $harga->harga }}">
                                    {{ $harga->jenis_hewan }} - Rp. {{ number_format($harga->harga, 0, ',', '.') }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn-submit">Kirim Reservasi</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

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
