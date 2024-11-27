<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet and Grooming</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        header .logo {
            font-size: 2em;
            margin: 0;
        }

        header .nav {
            margin-top: 10px;
        }

        header .nav ul {
            list-style: none;
            padding: 0;
        }

        header .nav ul li {
            display: inline;
            margin-right: 20px;
        }

        header .nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.1em;
            transition: color 0.3s;
        }

        header .nav ul li a:hover {
            color: #f39c12;
        }

        /* Main Content */
        main.container {
            width: 80%;
            margin: 40px auto;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 10px;
        }

        h2 {
            font-size: 2em;
            margin-bottom: 20px;
            text-align: center;
            color: #2c3e50;
        }

        /* Profile Card Styling */
        .profile-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .profile-card img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #f39c12;
            margin-right: 20px;
        }

        .profile-card .info {
            flex-grow: 1;
        }

        .profile-card .info h3 {
            font-size: 1.6em;
            margin: 5px 0;
            color: #2c3e50;
            font-weight: bold;
        }

        .profile-card .info p {
            margin: 3px 0;
            color: #555;
        }

        .profile-card .info .label {
            font-weight: bold;
            color: #f39c12;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header .nav ul li {
                display: block;
                margin: 10px 0;
            }

            .profile-card {
                flex-direction: column;
                text-align: center;
            }

            .profile-card img {
                margin-bottom: 15px;
            }

            .profile-card .info h3 {
                font-size: 1.4em;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="container">
            <h1 class="logo">Galaxy Pet Shop</h1>
            <nav class="nav">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('service') }}">Service</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('users') }}">User</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <h2>Customer Profiles</h2>

        @foreach($users as $user)
        <div class="profile-card">
            <div class="info">
                <h3>{{ $user->name }}</h3>
                <p><span class="label">Email:</span> {{ $user->email }}</p>
                <p><span class="label">Phone:</span> {{ $user->no_telp }}</p>
                <p><span class="label">Address:</span> {{ $user->alamat }}</p>
                <p><span class="label">Pet Type:</span> {{ $user->jenis_hewan }}</p>
            </div>
        </div>
        @endforeach

    </main>
</body>

</html>
