<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxt Pet Shop</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/service.css') }}" rel="stylesheet">
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
                <h2>Hai!,Kami Menawarkan 2 Paket Untuk Kamu Nih</h2>
            </div>
        </div>
    </section>


<!-- Bagian Layanan -->
<section class="services-description">
    <div class="container">

        <div class="services-grid">
            <div class="service-item">
                <img src="{{ asset('images/penitipan.png') }}" alt="Penitipan Hewan" class="service-img">
                <h3>Penitipan Hewan</h3>
                <p>Biarkan kami menjaga dan merawat hewan kesayangan Anda dengan penuh perhatian. Layanan penitipan kami memberikan kenyamanan dan rasa aman bagi hewan peliharaan Anda. Dengan fasilitas yang bersih dan aman, kami akan memastikan hewan kesayangan Anda tetap bahagia meskipun Anda sedang tidak bersamanya.</p>
                <a href="{{ route('reservasi.create') }}" class="btn">Selengkapnya</a>
                <div id="penitipan" class="additional-description" style="display: none;">
                    <p>Tambahkan informasi lebih lanjut di sini jika Anda ingin menjelaskan lebih detail mengenai layanan penitipan hewan yang disediakan.</p>
                </div>
            </div>

            <div class="service-item">
                <img src="{{ asset('images/grooming.png') }}" alt="Grooming Profesional" class="service-img">
                <h3>Grooming Profesional</h3>
                <p>Kami menyediakan layanan grooming yang lengkap dan profesional untuk memastikan hewan peliharaan Anda selalu tampil cantik dan sehat. Dari pemotongan kuku, pencucian, hingga perawatan bulu, kami memberikan perhatian khusus untuk membuat hewan kesayangan Anda merasa nyaman dan terlihat terbaik.</p>
                <a href="{{ route('reservasi.grooming.create') }}" class="btn">Selengkapnya</a>
                <div id="grooming" class="additional-description" style="display: none;">
                    <p>Tambahkan informasi lebih lanjut di sini jika Anda ingin menjelaskan lebih detail mengenai layanan grooming yang disediakan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="Pesan-Pesan" style="background: url('{{ asset('images/pexels-pixabay-57416.jpg') }}') no-repeat center center; background-size: cover; height: 400px; display: flex; align-items: center; justify-content: center;">
    <div class="overlay">
        <p class="message">Sayangi hewan peliharaan kalian, berikan mereka yang terbaik setiap hari!</p>
    </div>
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
