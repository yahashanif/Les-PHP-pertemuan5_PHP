<?php
// $bil1 = $_POST['bil1'];
// $bil2 = $_POST['bil2'];
// $menu = $_POST['tipe'];

// switch ($menu) {
//     case 'tambah':
//        tambah($bil1,$bil2);
//         break;
//     case 'kurang':
//        echo kurang($bil1,$bil2);
//         break;
//     case 'bagi':
//         bagi($bil1,$bil2);
//         break;
//     case 'kali':
//         kali($bil1,$bil2);
//         break;

// }
echo bagi(4, 5);

function tambah($array)
{
    foreach ($array as $key => $value) {
        echo $value;
        echo "<br/>";
    }
}
function kurang($bil1, $bil2)
{
    $hasil = $bil1 - $bil2;
    return $hasil;
}

function bagi($bil1, $bil2)
{
    $hasil = $bil1 / $bil2;
    // echo $hasil;
    return $hasil;
}

function kali($bil1, $bil2)
{
    $hasil = $bil1  * $bil2;
    echo $hasil;
}
echo cek(-4);

function cek($bil)
{
    if ($bil < 0) {
        return "Negatif";
    } else
        return "Nol";
}

echo faktorial(4);

function faktorial($bil)
{
   if($bil>1)
      return $bil*faktorial($bil-1);
   else
      return 1;
}

echo "Luas : ".faktorial(4);    
