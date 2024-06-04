<?php
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ],
];

$total_harga = 0;

foreach ($barang as $item){
    $sub_total = $item['harga_barang'] * $item['jumlah_beli'];
    $total_harga += $sub_total;
}

echo "Total harga pembelian: Rp." . number_format($total_harga,0,',','.');
?>