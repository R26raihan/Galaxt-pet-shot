<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservasi Grooming</title>

    <!-- CSS untuk mempercantik tampilan -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"], input[type="date"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        button[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>

    <h1>Edit Data Reservasi Grooming</h1>

    <!-- Container untuk form -->
    <div class="container">
        <!-- Form untuk edit data -->
        <form action="{{ route('reservasigrooming.update', $reservasigrooming->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Ini digunakan untuk HTTP PUT request -->

            <div class="form-group">
                <label for="nama">Nama Pelanggan:</label>
                <input type="text" id="nama" name="nama" value="{{ $reservasigrooming->nama }}" required>
            </div>

            <div class="form-group">
                <label for="tanggal_reservasi">Tanggal Reservasi:</label>
                <input type="date" id="tanggal_reservasi" name="tanggal_reservasi" value="{{ $reservasigrooming->tanggal_reservasi }}" required>
            </div>

            <div class="form-group">
                <label for="layanan">Layanan:</label>
                <input type="text" id="layanan" name="layanan" value="{{ $reservasigrooming->layanan }}" required>
            </div>

            <!-- Tambahkan input lain sesuai dengan field yang ada di tabel reservasigrooming -->

            <button type="submit">Simpan Perubahan</button>
        </form>
    </div>

</body>
</html>
