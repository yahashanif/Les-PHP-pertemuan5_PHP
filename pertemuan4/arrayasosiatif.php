<?php
$array_saya = array(
    'tahun' => 1610,
    'array1' => array('tahun' => 1622),
    'total'  => 350
);

// echo $array_saya['array1']['tahun'];

$mahasiswa = ['nama' => 'saifur',    'alamat' => 'kalinyamatan',    'tanggal_lahir' => '5 Maret 1997',    'umur' => 22];

foreach ($mahasiswa as $key => $value) {
    echo $key . ':' . $value . '<br/>';
}

$arraymultidimensi = [
    0 => [2, 3, 5],
    1 => [7, 6, 10],
    2 => [5, 7, 8],
];
// $arraymultidimensi = [    
//     [2,3,5], 
//     [7,6,10],
//     [5,7,8], 
// ];


foreach ($arraymultidimensi as $key => $value) {
    echo "<br/>";
    foreach ($value as $key => $data) {
        echo $data;
    }
}

$mahasiswas = [
    [
    'nama' => 'saifur',
    'alamat' => 'kalinyamatan',
    'tanggal_lahir' => '5 Maret 1997',
    'umur' => 22
],
    [
    'nama' => 'mega',
    'alamat' => 'lebak',
    'tanggal_lahir' => '24 Mei 1999',
    'umur' => 0,
],
];

echo "<br/>";
foreach ($mahasiswas as $value) {
    echo 'Nama :'.$value['nama'];
    echo "<br/>";
}
