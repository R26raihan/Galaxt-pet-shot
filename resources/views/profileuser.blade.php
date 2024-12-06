<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
    <style>
        /* Reset margin dan padding pada body */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Header */
        header {
            background-color: #4e73df;
            padding: 15px;
            color: white;
            text-align: center;
        }

        header .logo {
            font-size: 28px;
            font-weight: bold;
        }

        header .nav ul {
            list-style-type: none;
        }

        header .nav ul li {
            display: inline;
            margin-right: 20px;
        }

        header .nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        header .nav ul li a:hover {
            color: #f4f4f4;
        }

/* Profil Container */
.profile-container {
    width: 100%;
    padding: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f9f9f9;
}

/* Profil Grid */
.profile-grid {
    display: grid;
    grid-template-columns: 1fr 2fr; /* Membagi 1 kolom untuk gambar dan 2 kolom untuk detail */
    gap: 20px;
    max-width: 1000px;
    width: 100%;
    padding: 20px;
    background-color: white;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
}

/* Bagian Gambar Profil */
.profile-image {
    display: flex;
    justify-content: center;
    align-items: center;
}

.profile-image img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #ddd;
}

/* Bagian Detail Profil */
.profile-details {
    font-size: 16px;
    line-height: 1.5;
}

.profile-details h1 {
    font-size: 28px;
    color: #4e73df;
    margin-bottom: 20px;
}

.profile-details p {
    margin: 10px 0;
    color: #333;
}

.profile-details strong {
    color: #4e73df;
}

/* Responsif untuk layar kecil */
@media (max-width: 768px) {
    .profile-grid {
        grid-template-columns: 1fr; /* Satu kolom untuk gambar dan detail pada layar kecil */
    }

    .profile-image img {
        width: 120px;
        height: 120px;
    }
}

        /* Tombol Logout */
        .btn-logout {
            background-color: #ff5c5c;
            color: white;
            border-radius: 20px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-logout:hover {
            background-color: #e14b4b;
        }

        /* Responsif untuk perangkat mobile */
        @media (max-width: 768px) {
            .profile-container {
                width: 90%;
            }

            header .logo {
                font-size: 24px;
            }

            header .nav ul li {
                display: block;
                margin: 10px 0;
            }

            header .nav ul li a {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
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
            </ul>
        </nav>
    </header>

<!-- Konten Profil -->
<div class="profile-container">
    <div class="profile-grid">
        <!-- Bagian Gambar -->
        <div class="profile-image">
            <img src="{{ asset('images/Online resume-cuate.png') }}" alt="Profile Image">
        </div>

        <!-- Bagian Profil -->
        <div class="profile-details">
            <h1>Profil Pengguna</h1>
            <p><strong>Nama:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>No Telpon:</strong> {{ $user->no_telp }}</p>
            <p><strong>Alamat:</strong> {{ $user->alamat }}</p>
            <p><strong>Hewan Peliharaan:</strong> {{ $user->jenis_hewan }}</p>
        </div>
    </div>
</div>

</body>
</html>
