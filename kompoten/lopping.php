<?php
// membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

// menampilkan isi array
echo $barang[0]."<br>";
echo $barang[1]."<br>";
echo $barang[2]."<br>";

for($i = 0; $i < count($barang); $i++) {
    echo $barang [$i]. "<br>";
}
foreach ($barang as $key => $item){
    echo $item. "<br>";
    //echo "index ke-".$key. "="$item. "<br>";
}