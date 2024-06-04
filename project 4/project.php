<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"></link>
    <title>perbandingan</title>
</head>
<body>
    <center>
      <div class="wadah">
      <h1>Membandingkan Angka</h1>
<?php
  if (@$_POST['angka_1'] == "" || @$_POST['angka_2'] == "") {
    echo "<h4><center>Silahkan Isi !</center></h4>";
  } else {
    // ini untuk ambil nilai dari form
    $angka1 = $_POST['angka_1'];
    $angka2 = $_POST['angka_2'];

    // ini proses 
    if ($angka1 == $angka2) {
      $teks = "$angka1 sama dengan $angka2";
      $teks = "=";
    } elseif ($angka1 > $angka2) {
      $teks = "$angka1 lebih dari $angka2";
      $simbol = ">";
    } else {
      $teks = "$angka1 kurang dari $angka2";
      $simbol = "<";
    }

    echo "<h1>$simbol</h1>";
    echo "<h3>$teks</h3>";
  }
?>
        <form action="" method="POST">
            <table border="1">
                <tr>
                    <td><label for="angka_1">Angka Pertama :</label></td>
                    <td><input type="number" name="angka_1" id="angka_1"></td>
                </tr>
                    <td><label for="angka_2">Angka Kedua :</label></td>
                    <td><input type="number" name="angka_2" id="angka_2"></td>
                <tr>
                <tr>
                    <td colspan="2"><button type="submit">Kirim</button></td>
                </tr>
            </table>
        </form>
      </div>
    </center>
</body>
</html>