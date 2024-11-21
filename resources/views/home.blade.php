<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet and Grooming</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
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
                <a href="#" class="btn">Selengkapnya</a>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images/grooming.png') }}" alt="Grooming" class="card-img">
            <div class="card-content">
                <h3>Grooming Profesional</h3>
                <p>Perawatan hewan peliharaan Anda dengan layanan grooming yang menyeluruh. Kami pastikan mereka tampil cantik dan sehat!</p>
                <a href="#" class="btn">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>

<section class="Pesan-Pesan" style="background: url('{{ asset('images/pexels-pixabay-57416.jpg') }}') no-repeat center center; background-size: cover; height: 400px; display: flex; align-items: center; justify-content: center;">
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
