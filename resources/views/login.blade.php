<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet and Grooming</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>

<body>
    <div id="particles-js"></div>

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

    <section class="form-login">
        <div class="login-card">
            <div class="login-form">
                <h2>Login</h2>

<!-- Pesan Error -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Pesan Error Global -->
@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<!-- Form Login -->
<form action="{{ route('login.submit') }}" method="post">
    @csrf
    <div class="input-group">
        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            required>
        @error('email')
            <small class="error">{{ $message }}</small>
        @enderror
    </div>
    <div class="input-group">
        <label for="password">Password</label>
        <input
            type="password"
            id="password"
            name="password"
            required>
        @error('password')
            <small class="error">{{ $message }}</small>
        @enderror
    </div>
    <button type="submit" class="btn-login">Login</button>
</form>




                <!-- Tombol "Don't have an account?" -->
                <div class="register-link">
                    <p>Don't have an account? <a href="{{ route('register.form') }}">Register here</a></p>
                </div>
            </div>
            <div class="login-image">
                <img src="{{ asset('images/pexels-cottonbro-6869635.jpg') }}" alt="Login Image">
            </div>
        </div>
    </section>

</body>

</html>
