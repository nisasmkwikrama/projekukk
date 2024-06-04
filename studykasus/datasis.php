<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Siswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS untuk mengatur konten ke tengah */
        body {
            background-image: url(https://id.pinterest.com/pin/563018694845144/);
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 95vh; /* Mengisi tinggi viewport */
            background-color: #f8f9fa; /* Warna latar belakang */
        }
        .custom-container {
            border: 1px solid #ccc; /* Border dengan warna abu-abu */
            border-radius: 10px; /* Sudut border membulat */
            padding: 20px; /* Padding konten */
            background-color: #ffffff; /* Warna latar belakang konten */
        }
    </style>
</head>
<body>
    <div class="container custom-container col-sm-10 col-md-6">
        <h2 class="text-center mb-4">Masukkan Data Siswa</h2>
        <form action="process.php" method="post" class="col-12">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required> 
            </div>
            <div class="form-group">
                <label for="nis">NIS:</label>
                <input type="text" class="form-control" id="nis" name="nis" required>
            </div>
            <div class="form-group">
                <label for="rayon">Rayon:</label>
                <input type="text" class="form-control" id="rayon" name="rayon" required>
            </div>
            <div class="text-center"> <!-- Container untuk button di tengah -->
                <button type="submit" class="btn btn-primary mr-2" name="submit">Kirim</button>
                <button type="button" class="btn btn-success mr-2" onclick="window.print()">Cetak</button>
                <button type="button" class="btn btn-danger" onclick="hapusData()">Hapus Data</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS dan jQuery (jika diperlukan) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>