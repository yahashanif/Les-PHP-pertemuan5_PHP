<?php
$koneksi = mysqli_connect("localhost", "root", "", "dbartikel");
if($koneksi){
    echo "berhasil";
}else{
    echo "gagal";
}
?>
