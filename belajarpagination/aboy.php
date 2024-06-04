<?php
if (@$_POST['bilangan_pertama'] != "" &&
 @$_POST['bilangan_pemangkat'] != "") {
    $hasilPangkat = $_POST ['bilangan_pertama'] "" $_POST ['bilangan_pemangkat'];
} else {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Yang perlu di perhatikan ketika membuat form dengan request method POST :
    1. Tag from dan attribute method action
    2. Input/Select harus ada type & name
    3. Button type submit / input yang type submit
    -->
    <form action="" style="display: flex; justify-content: center" method="POST">
        <table border="1">
            <tr>
                <td><label for="bilangan">Bilangan Pertama : </label></td>
                <td><input type="number" name="bilangan_pertama" id="bilangan"></td>
            </tr>
            <tr>
                <td><label for="pangkat">Bilangan Pemangkat : </label></td>
                <td><input type="number" name="bilangan_pemangkat" id="pangkat"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Hitung</button></td>
            </tr>
        </table>
    </form>

    <p style="text-align: center">
<?php 
    if (isset($hasilPangkat) && @$_POST['bilanga_pertama'] != "" @$_POST ['bilangan_pemangkat'] != ""){
        echo "Hasil Pangkat <b>" . $_POST['bilangan_pertama'] . " pangkat " . $_POST['bilangan_pemangkat'] . " =" . $hasilPangkat . "<b>";
    }
    </p>

</body>
</html>