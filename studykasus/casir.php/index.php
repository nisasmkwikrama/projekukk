<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Toko Sederhana</title>
</head>
<body>
    <center>
    <h1>Toko</h1>

    <form action="proses_toko.php" method="POST">
        <table>
            <tr>
                <td>Nama Pelanggan</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="masukan nama pelanggan" require=""></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td>
                    <?php $nama_barang = array("shampo", "sabun", "paket sembako");?>
                    <select name="nama_barang" id="">
                        <?php
                    foreach($nama_barang as $item) {
                        echo "<option value='$item'>$item</option>";
                    }
                    ?>
                </td>
            </select>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="number" name="harga" placeholder="harga barang" require=""></td>
            </tr>
            <tr>
                <td>jumlah</td>
                <td>:</td>
                <td><input type="number" name="jumlah" placeholder="jumlah barang" require="" min="1"></td>
            </tr>
            <tr>
                <td colspan="3" align="right" ><input type="submit" name="simpan" value="submit" ></td>
            </tr>
        </table>
    </form>


    </center>
</body>
</html>