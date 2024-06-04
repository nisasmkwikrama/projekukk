<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .input-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<?php

class BahanBakar {
    private $tipe;
    private $jumlah;
    private $harga;

    public function __construct($tipe, $jumlah, $harga) {
        $this->tipe = $tipe;
        $this->jumlah = $jumlah;
        $this->harga = $harga;
    }

    public function getTotalHarga() {
        $ppn = 0.1;
        $total = $this->jumlah * $this->harga;
        $total += $total * $ppn;
        return $total;
    }

    public function getOutput() {
        echo "<center>--------------------------------------------</center>";
        echo "<center>Anda membeli bahan bakar minyak tipe {$this->tipe} <br> Dengan jumlah : {$this->jumlah} Liter <br> Total yang harus anda bayar Rp. " . number_format($this->getTotalHarga(), 0, ',', '.') . "</center>";
        echo "<center>--------------------------------------------</center>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $liter = $_POST["liter"];
    $jenis = $_POST["jenis"];

    switch ($jenis) {
        case "Shell power":
            $harga = 15420;
            break;
        case "Shell V-power":
            $harga = 16130;
            break;
        case "Shell V-power Diesel":
            $harga = 18310;
            break;
        case "Shell V-power nitro":
            $harga = 16510;
            break;
        default:
            $harga = 0;
            break;
    }

    $bahanBakar = new BahanBakar($jenis, $liter, $harga);
    $bahanBakar->getOutput();
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="input-group">
        <label for="liter">jumlah liter:</label>
        <input type="number" id="liter" name="liter">
    </div>
    <label for="jenis">pilih:</label>
    <select name="jenis" id="jenis">
        <option value="Shell power">Shell power</option>
        <option value="Shell V-power">Shell V-power</option>
        <option value="Shell V-power Diesel">Shell V-power Diesel</option>
        <option value="Shell V-power nitro">Shell V-power nitro</option>
    </select>
    <br>
    <button type="submit">total</button>
</form>
</body>
</html>