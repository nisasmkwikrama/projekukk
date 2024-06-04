<?php

    $nama = $_POST["nama"];
    $nama_barang = $_POST["nama_barang"];
    $harga = $_POST["harga"];
    $jumlah = $_POST["jumlah"];

    $hasil = $harga * $jumlah;

    //percabangan "misal jika total harga nya lebih dari sama dengan 30000 maka akan diskon 5%"

    if ($hasil) {
        $hasil_diskon = $hasil * 0.05;
        $hasil = $hasil - $hasil_diskon;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Toko Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <center>
    <h1>Toko Sederhana</h1>


        <table border="1">
            <tr>
                <td>Nama Pelanggan</td>
                <td>:</td>
                <td><?php echo $nama;?></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><?php echo $nama_barang;?></td>
            </select>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><?php echo $harga;?></td>
            </tr>
            <tr>
                <td>jumlah</td>
                <td>:</td>
                <td><?php echo $jumlah;?></td>
            </tr>
            <tr>
                <td>Diskon</td>
                <td>:</td>
                <td><?php echo $hasil_diskon;?></td>
            </tr>
            <tr>
                <td>Total harga</td>
                <td>:</td>
                <td><?php echo $hasil;?></td>
            </tr>
            <tr>
                <td colspan="3" align="right" ><a href="index.php"><input type="submit" value="back" ></a></td>
            </tr>
        </table>
    
    </center>
</body>
</html>