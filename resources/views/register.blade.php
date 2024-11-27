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
            <h1 class="logo">Pet and Grooming</h1>
            <nav class="nav">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('service') }}">Service</a></li>
                    <li><a href="{{ route('login.form') }}">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="form-login">
        <div class="login-card">
            <div class="login-form">
                <h2>Register</h2>

                <form action="{{ route('register.form') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required value="{{ old('name') }}">
                        @error('name') <div class="error">{{ $message }}</div> @enderror
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required value="{{ old('email') }}">
                        @error('email') <div class="error">{{ $message }}</div> @enderror
                    </div>
                    <div class="input-group">
                        <label for="no_telp">No Telepon</label>
                        <input type="text" id="no_telp" name="no_telp" required value="{{ old('no_telp') }}">
                        @error('no_telp') <div class="error">{{ $message }}</div> @enderror
                    </div>
                    <div class="input-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" id="alamat" name="alamat" required value="{{ old('alamat') }}">
                        @error('alamat') <div class="error">{{ $message }}</div> @enderror
                    </div>
                    <div class="input-group">
                        <label for="jenis_hewan">Jenis Hewan</label>
                        <input type="text" id="jenis_hewan" name="jenis_hewan" required value="{{ old('jenis_hewan') }}">
                        @error('jenis_hewan') <div class="error">{{ $message }}</div> @enderror
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                        @error('password') <div class="error">{{ $message }}</div> @enderror
                    </div>
                    <div class="input-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required>
                        @error('password_confirmation') <div class="error">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn-login">Register</button>
                </form>



            </div>
            <div class="login-image">
                <img src="{{ asset('images/pexels-cottonbro-6869635.jpg') }}" alt="Register Image">
            </div>
        </div>
    </section>
</body>
</html>
