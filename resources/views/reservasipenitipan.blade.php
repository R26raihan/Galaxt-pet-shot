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

    <section class="syarat-penitipan">
        <h2>Syarat Penitipan</h2>
        <ul>
            <li>Hewan Harus berada dalam kondisi sehat dan bebas dari kutu. Kondisi anjing dan kucing akan diperiksa terlebih dahulu saat kedatangan untuk memastikan keamanan dan kesehatan mereka serta hewan lainnya.</li>
            <li>Jika setelah pemeriksaan ditemukan kutu atau masalah kulit, pengobatan khusus wajib dilakukan segera. Hewan yang memerlukan perawatan tetap dapat dititipkan, namun akan ditempatkan di ruang khusus agar tidak bercampur dengan hewan yang sehat.</li>
            <li>Perlengkapan khusus seperti makanan, camilan, vitamin, mainan, dan sejenisnya dapat dibawa sesuai kebutuhan hewan.</li>
        </ul>
    </section>

    <style>
    .syarat-penitipan {
        background: linear-gradient(135deg, #f9f9f9, #e6e6e6);
        border: 1px solid #ccc;
        border-radius: 12px;
        padding: 25px;
        margin: 20px auto;
        max-width: 650px;
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
        font-family: 'Roboto', sans-serif;
    }

    .syarat-penitipan h2 {
        font-size: 2em;
        color: #2c3e50;
        text-align: center;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: bold;
    }

    .syarat-penitipan ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .syarat-penitipan ul li {
        background: #ffffff;
        margin-bottom: 15px;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
    }

    .syarat-penitipan ul li::before {
        content: '\2713';
        color: #27ae60;
        font-size: 1.5em;
        margin-right: 10px;
    }

    .syarat-penitipan ul li:hover {
        background: #f1f1f1;
        transform: scale(1.02);
        transition: all 0.3s ease;
    }
    </style>




    <main class="container-reservasi">
        <h2>Form Reservasi Penitipan Hewan</h2>
        <div class="reservasi-grid">
            <!-- Gambar Hewan -->
            <div class="gambar-hewan">
                <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/44/2023/12/20/Ilustrasi-kucing-555371207.jpg" alt="Gambar Hewan" class="gambar-hewan-img">
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
                        <label for="penyakit">Penyakit Hewan (Jika Ada):</label>
                        <input type="text" id="penyakit" name="penyakit" class="form-control">
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

<section class="fasilitas-penitipan-hewan">
    <img src="https://assets.petpintar.com/cache/720/540/article/741/1660973975-tempat-penitipan-kucing-surabaya-banner.jpg"
         alt="Ilustrasi Kucing">
    <h2>Fasilitas Penitipan Hewan</h2>
    <p>Kami menyediakan berbagai fasilitas terbaik untuk kenyamanan hewan peliharaan Anda:</p>
    <ul>
        <li>Ruang tidur yang nyaman dan bersih.</li>
        <li>Makanan sehat sesuai kebutuhan hewan.</li>
        <li>Perawatan medis oleh tenaga profesional.</li>
        <li>Area bermain yang aman dan luas.</li>
        <li>Pemantauan CCTV selama 24 jam.</li>
    </ul>
</section>
<style>
.fasilitas-penitipan-hewan {
    background-color: #ffffff;
    border-radius: 12px;
    padding: 20px;
    max-width: 900px; /* Diperlebar menjadi 900px */
    margin: 30px auto;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.fasilitas-penitipan-hewan h2 {
    color: #2a9d8f;
    font-size: 24px;
    margin-bottom: 15px;
}

.fasilitas-penitipan-hewan p {
    font-size: 16px;
    margin-bottom: 20px;
}

.fasilitas-penitipan-hewan ul {
    list-style-type: none;
    padding: 0;
    text-align: left;
    margin-bottom: 20px;
}

.fasilitas-penitipan-hewan ul li {
    font-size: 16px;
    margin-bottom: 10px;
    padding-left: 20px;
    position: relative;
}

.fasilitas-penitipan-hewan ul li:before {
    content: "✔";
    color: #2a9d8f;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 0;
}

.fasilitas-penitipan-hewan img {
    width: 100%;
    max-width: 400px; /* Disesuaikan untuk proporsi yang lebih lebar */
    height: auto;
    border-radius: 12px;
    margin-top: 15px;
}
</style>


    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Galaxy Pet Shop. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>

