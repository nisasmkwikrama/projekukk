<?php
$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

// Fungsi untuk mendeteksi tahun kabisat
function isKabisat($tahun) {
    return ($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0;
}

// Loop melalui array data dan deteksi tahun kabisat
foreach ($data as $person) {
    if (isKabisat($person['tahun'])) {
        echo $person['nama'] . ": lahir di tahun kabisat.\n";
    }
    else {
        echo $person['nama'] . ": lahir bukan pada tahun kabisat.\n";
    }
}

?>