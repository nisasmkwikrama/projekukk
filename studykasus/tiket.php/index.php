<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"`>
        <title>Kasir</title>
    </head>

<?php
include 'proses.php';

if(isset($_POST["kirim"])) {
    $proses = new Bayar();
    $proses->setHarga(700000, 1300000, 2000000, 2700000);
    $proses->jenis = $_POST['jenis'];
    $proses->jumlah = $_POST['jumlah'];
    $proses->hargaTiket();
    $proses->cetakBayar();
}

?>


<body>
<center>

    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="jumlah">Jumlah Tiket: </label>
                    <input type="number" name="jumlah" id="jumlah" min=1>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jenis">Pilih Tiket: </label>
                    <select name="jenis" id="jenis">
                         <option value="Silver">Silver</option>
                         <option value="Platinum">Platinum</option>
                         <option value="Premium">Premium</option>
                         <option value="VIP">VIP</option>
                </td>
            </tr>
        </table>

        <button type="submit" name="kirim">Beli Tiket</button>
    <form>

</center>
</body>
</html>