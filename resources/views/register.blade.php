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

    <section class="auth-container">
        <div class="auth-card">
            <div class="form-container">
                <h2 class="form-title">Create Account</h2>

                <form action="{{ route('register.form') }}" method="post" class="auth-form">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-input" required value="{{ old('name') }}">
                        @error('name') <div class="form-error">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-input" required value="{{ old('email') }}">
                        @error('email') <div class="form-error">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="no_telp" class="form-label">Phone Number</label>
                        <input type="text" id="no_telp" name="no_telp" class="form-input" required value="{{ old('no_telp') }}">
                        @error('no_telp') <div class="form-error">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="form-label">Address</label>
                        <input type="text" id="alamat" name="alamat" class="form-input" required value="{{ old('alamat') }}">
                        @error('alamat') <div class="form-error">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="jenis_hewan" class="form-label">Pet Type</label>
                        <input type="text" id="jenis_hewan" name="jenis_hewan" class="form-input" required value="{{ old('jenis_hewan') }}">
                        @error('jenis_hewan') <div class="form-error">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-input" required>
                        @error('password') <div class="form-error">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-input" required>
                        @error('password_confirmation') <div class="form-error">{{ $message }}</div> @enderror
                    </div>

                    <button type="submit" class="btn-submit">Register</button>
                </form>
            </div>

            <div class="image-container">
                <img src="{{ asset('images/pexels-cottonbro-6869635.jpg') }}" alt="Register Image" class="register-image">
            </div>
        </div>
    </section>

    <style>


/* Main container */
.auth-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    padding: 20px;
}

/* Card containing form and image */
.auth-card {
    display: flex;
    justify-content: space-between;
    background: #ffffff;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    overflow: hidden;
    width: 100%;
    max-width: 900px;
}

/* Form Section */
.form-container {
    padding: 30px;
    width: 50%;
    box-sizing: border-box;
}

/* Title Styling */
.form-title {
    font-size: 30px;
    margin-bottom: 20px;
    color: #4e73df;
    font-weight: bold;
}

/* Form Styles */
.auth-form {
    display: flex;
    flex-direction: column;
}

.form-group {
    margin-bottom: 20px;
}

.form-label {
    font-size: 14px;
    color: #333;
    margin-bottom: 5px;
}

.form-input {
    padding: 12px;
    font-size: 16px;
    border: 2px solid #ddd;
    border-radius: 8px;
    width: 100%;
    box-sizing: border-box;
    transition: border-color 0.3s;
}

.form-input:focus {
    border-color: #4e73df;
    outline: none;
}

.form-error {
    color: red;
    font-size: 12px;
    margin-top: 5px;
}

/* Submit Button */
.btn-submit {
    padding: 12px;
    background-color: #4e73df;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-submit:hover {
    background-color: #2e59d9;
}

/* Image Section */
.image-container {
    width: 50%;
    overflow: hidden;
}

.register-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-top-right-radius: 12px;
    border-bottom-right-radius: 12px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .auth-card {
        flex-direction: column;
    }

    .form-container, .image-container {
        width: 100%;
    }

    .form-title {
        font-size: 26px;
    }
}

    </style>
    </body>
</html>
