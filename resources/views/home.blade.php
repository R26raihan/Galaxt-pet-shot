<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet and Grooming</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('js/inandout.js') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>

    <header class="header">
        <div class="container">
            <h1 class="logo">Galaxy Pet Shop</h1>
            <nav class="nav">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('service') }}">Service</a></li>

                    <!-- Menampilkan Login jika pengguna belum login -->
                    @if (Auth::check())
                        <!-- Tombol Logout -->
                        <li>
                            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn-logout">Logout</button>
                            </form>
                        </li>
                    @else
                        <!-- Menampilkan Login jika pengguna belum login -->
                        <li><a href="{{ route('login.form') }}">Login</a></li>
                    @endif
                    <li>
                        <a href="{{ route('profile') }}">
                            <i class="fas fa-user-circle" style="font-size: 30px; color: #4e73df;"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>


    <section class="hero" style="background-image: url('{{ asset('images/pexels-pixabay-45170.jpg') }}');">
        <div class="container">
            <div class="hero-text">
                <h2>Welcome to Pet and Grooming</h2>
                <p>Your trusted partner for pet care and grooming services.</p>
                <a href="{{ route('service') }}" class="btn">Service</a>
            </div>
        </div>
    </section>

    <section class="Card-layanan">
        <div class="container">
            <div class="card">
                <img src="{{ asset('images/penitipan.png') }}" alt="Pet Sitting" class="card-img">
                <div class="card-content">
                    <h3>Penitipan Hewan</h3>
                    <p>Biarkan hewan peliharaan Anda merasa nyaman dan aman saat Anda tidak bisa bersama mereka. Layanan penitipan dengan perhatian penuh!</p>
                    <a href="{{ route('reservasi.create') }}" class="btn">Selengkapnya</a>
                </div>
            </div>

            <div class="card">
                <img src="{{ asset('images/grooming.png') }}" alt="Grooming" class="card-img">
                <div class="card-content">
                    <h3>Grooming Profesional</h3>
                    <p>Perawatan hewan peliharaan Anda dengan layanan grooming yang menyeluruh. Kami pastikan mereka tampil cantik dan sehat!</p>
                    <a href="{{ route('reservasi.grooming.create') }}" class="btn">Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <section class="Pesan-Pesan" style="background: url('{{ asset('images/pexels-cottonbro-6869635.jpg') }}') no-repeat center center; background-size: cover; height: 400px; display: flex; align-items: center; justify-content: center;">
        <div class="overlay">
            <p class="message">Sayangi hewan peliharaan kalian, berikan mereka yang terbaik setiap hari!</p>
        </div>
    </section>

    <section class="mengapa-pilih-kami">
        <div class="container">
            <h1 class="section-title">Mengapa Memilih Kami?</h1>
            <p class="section-description">
                Kami berkomitmen untuk memberikan perawatan terbaik untuk hewan peliharaan Anda. Dengan layanan penitipan yang aman dan penuh kasih sayang, serta grooming profesional, Anda bisa tenang meninggalkan hewan kesayangan Anda kepada kami. Kami memastikan kenyamanan dan kebahagiaan mereka selama Anda tidak ada.
            </p>
            <div class="feature">
                <img src="{{ asset('images/Cat astronaut-cuate.png') }}" alt="Penitipan Hewan" class="feature-img">
                <h3>Titipkan Hewan Kesayangan Anda</h3>
                <p>Biarkan kami menjaga dan membuat hewan kesayangan Anda merasa nyaman, aman, dan bahagia saat Anda tidak bisa bersamanya.</p>
            </div>
            <div class="feature">
                <img src="{{ asset('images/pet care-rafiki.png') }}" alt="Grooming Hewan" class="feature-img">
                <h3>Grooming Profesional</h3>
                <p>Kami akan membuat hewan peliharaan Anda tampil lebih cantik dan sehat dengan layanan grooming terbaik yang penuh perhatian.</p>
            </div>
        </div>
    </section>

    <section class="produk">
        <div class="produk-container">
            <div class="produk-text">
                <h1>Produk Kesehatan & Perawatan</h1>
                <p>
                    Kami akan memberikan solusi dan rekomendasi produk yang tepat dan berkualitas
                    sehingga membuat hewan peliharaan Anda lebih sehat dan terawat. Produk-produk yang kami
                    rekomendasikan akan disesuaikan dengan kebutuhan hewan peliharaan Anda. Konsultasikan
                    kebutuhan dan masalah Anda kepada kami dan dapatkan solusi yang tepat untuk kebutuhan
                    hewan kesayangan Anda.
                </p>
            </div>
            <div class="produk-image">
                <img src="https://images.pexels.com/photos/45201/kitty-cat-kitten-pet-45201.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Produk Kesehatan & Perawatan">
            </div>
        </div>
    </section>

    <style>
        .produk {
    padding: 40px;
    background-color: #f9f9f9;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin: 30px auto;
    max-width: 1200px; /* Memperlebar section */
    display: flex;
    justify-content: center;
}

.produk-container {
    display: grid;
    grid-template-columns: 1fr 1fr; /* Membagi layout menjadi dua kolom */
    gap: 30px; /* Memberi jarak antara kolom */
    align-items: center;
    width: 100%;
}

.produk-text {
    max-width: 600px;
}

.produk-text h1 {
    font-size: 32px;
    color: #2a9d8f;
    margin-bottom: 15px;
}

.produk-text p {
    font-size: 18px;
    color: #333;
    line-height: 1.6; /* Menambahkan jarak antar baris */
}

.produk-image img {
    width: 100%;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    height: auto;
}

@media (max-width: 768px) {
    .produk-container {
        grid-template-columns: 1fr; /* Mengubah grid menjadi satu kolom pada layar kecil */
    }
}

    </style>

    <section class="Kritik-dan-saran">
        <h2>Kritik dan Saran</h2>
        @if(session('success'))
        <div class="success-message">{{ session('success') }}</div>
        @endif

        <form action="{{ route('storeKritikDanSaran') }}" method="POST">
            @csrf
            <label for="nama_pengguna">Nama:</label>
            <input type="text" id="nama_pengguna" name="nama_pengguna" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="pesan">Pesan:</label>
            <textarea id="pesan" name="pesan" required></textarea>

            <button type="submit">Kirim</button>
        </form>
    </section>




    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const pesanPesan = document.querySelector(".Pesan-Pesan");

            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            function handleScroll() {
                if (isInViewport(pesanPesan)) {
                    pesanPesan.classList.add("fade-in");
                    pesanPesan.classList.remove("fade-out");
                } else {
                    pesanPesan.classList.add("fade-out");
                    pesanPesan.classList.remove("fade-in");
                }
            }

            window.addEventListener("scroll", handleScroll);
            handleScroll();
        });
    </script>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Pet and Grooming. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
