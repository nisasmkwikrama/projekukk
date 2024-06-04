<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
</head>
<center>
<body>

    <!-- Formulir untuk pengguna menginput data -->
    <div class="container">
    <form method="post">
    <h1>Rental Motor</h1>
        <label for="nama">Nama Peminjam :</label>
        <input type="text" name="nama" required><br> <!-- Input nama pelanggan -->
        <label for="waktu">Lama Waktu Rental :</label>
        <input type="number" name="waktu" required><br> <!-- Input lama waktu rental (dalam hari) -->
        
        <label for="type">Tipe motor :</label>
        <select name="type" required> <!-- Pilihan tipe motor -->
            <option value="Aerox">Aerox</option>
            <option value="fazzio">fazzio</option>
            <option value="Beatkarbu">Beatkarbu</option>
            <option value="Vario">Vario</option>
            <option value="Vespa matic">Vespa Matic</option>
        </select><br>
        <input type="submit" value="Submit"> <br> <!-- Tombol submit untuk mengirimkan data formulir -->
    </form>
    </div>
    <?php
    // Definisikan kelas rental untuk menghitung biaya rental motor
    class rental {
        public $harga;
        public $jenis;
        public $waktu;
        private $member = ['amber', 'annasya', 'aqila', 'adel', 'nisa s', 'nisa a'];
    
        //Konstruktor untuk menginisialisasi nilai-nilai properti objek
        public function __construct($harga, $jenis, $waktu) {
            $this->harga = $harga;
            $this->jenis = $jenis;
            $this->waktu = $waktu;
        }
        
        //mengembalikan biaya pajak tetap
        public function pajak() {
            return 10000; // Biaya pajak tetap
        }
    
        //Menghitung total biaya dengan memperhitungkan harga, waktu, dan biaya pajak
        public function hitung() {
            $pajak = $this->pajak();
            $total = $this->harga * $this->waktu + $pajak;
    
            // Cek apakah nama pelanggan termasuk dalam anggota untuk diskon
            if (in_array(strtolower($this->jenis), $this->member)) {
                $diskon = 0.05 * $total; // Diskon 5% jika nama ada dalam daftar member
                $total -= $diskon;
            }
    
            return $total; // Mengembalikan total biaya rental
        }
    }    

    // Pemrosesan data formulir saat pengguna mengirimkan formulir
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"]; // Ambil nama pelanggan
        $waktu = $_POST["waktu"]; // Ambil lama waktu rental (dalam hari)
        $type = $_POST["type"]; // Ambil tipe motor yang dipilih
        $harga_motor = 0;
    
        // Tentukan harga motor berdasarkan tipe yang dipilih
        switch ($type) {
            case "Aerox":
                $harga_motor = 55000;
                break;
            case "fazzio":
                $harga_motor = 65000;
                break;
            case "Beatkarbu":
                $harga_motor = 70000;
                break;
            case "Vario":
                $harga_motor = 80000;
                break;
            case "Vespa matic":
                $harga_motor = 85000;
            default:
                echo "Tipe motor tidak valid.";
                break;
        }
    
        // Buat objek rental dengan harga motor, nama pelanggan, dan lama waktu rental
        $rental = new rental($harga_motor, $nama, $waktu);
        $total_biaya = $rental->hitung(); // Hitung total biaya rental

        // Tampilkan hasil biaya rental kepada pengguna
?>    
        <div class="output-box">
    <?php
        echo "Total Biaya Rental Untuk $nama <br> Dengan Jenis Motor : ($type) <br> Selama $waktu Hari Adalah: Rp. " . number_format($total_biaya, 2);
    }
    ?>
    </div>
    </center>
</body>
</html>