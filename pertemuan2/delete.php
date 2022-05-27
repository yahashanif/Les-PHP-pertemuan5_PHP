<?php
include 'koneksi.php';
$id = $_GET['id'];

// echo $id;

$delete = mysqli_query($koneksi,"DELETE from datadiri where id=$id");
if($delete){
    echo "delete berhasil";
}else{
    echo "delete gagal";
}


?>