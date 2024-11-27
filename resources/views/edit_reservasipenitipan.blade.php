<!-- resources/views/edit_reservasipenitipan.blade.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Reservasi Penitipan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1>Edit Data Reservasi Penitipan</h1>

        <!-- Form untuk edit data -->
        <form action="{{ route('reservasipenitipan.update', $reservasipenitipan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama">Nama Pelanggan:</label>
                <input type="text" id="nama" name="nama" class="form-control" value="{{ $reservasipenitipan->nama }}" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" class="form-control" value="{{ $reservasipenitipan->alamat }}" required>
            </div>

            <div class="form-group">
                <label for="no_wa">No WA:</label>
                <input type="text" id="no_wa" name="no_wa" class="form-control" value="{{ $reservasipenitipan->no_wa }}" required>
            </div>

            <div class="form-group">
                <label for="lama_hari">Lama Hari:</label>
                <input type="number" id="lama_hari" name="lama_hari" class="form-control" value="{{ $reservasipenitipan->lama_hari }}" required>
            </div>

            <div class="form-group">
                <label for="paket">Paket:</label>
                <select id="paket" name="paket" class="form-control" required>
                    <option value="">Pilih Paket</option>
                    <option value="Harian" {{ $reservasipenitipan->paket == 'Harian' ? 'selected' : '' }}>Harian</option>
                    <option value="Mingguan" {{ $reservasipenitipan->paket == 'Mingguan' ? 'selected' : '' }}>Mingguan</option>
                    <option value="Bulanan" {{ $reservasipenitipan->paket == 'Bulanan' ? 'selected' : '' }}>Bulanan</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        </form>
    </div>

</body>
</html>
