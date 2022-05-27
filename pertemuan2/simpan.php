<?php
cek($_POST['cek']);
// $aksi = $_GET['aksi'];
// if($aksi == 'simpan'){
//     simpan($_POST['nama_depan'],$_POST['nama_belakang']);
// }elseif($aksi == 'update'){
//     update();
// }elseif($aksi=='cek'){
//     cek($_POST['cek']);
// }

function cek($data){
    echo $data;
}



function simpan($nama_depan,$nama_belakang)
{
    include 'koneksi.php';

    $nama_depan = $nama_depan;
    $nama_belakang = $nama_belakang;
    $alamat = $_POST['alamat'];
    $tempatlahir = $_POST['tempat_lahir'];
    $tanggallahir = $_POST['tanggal_lahir'];
    $email = $_POST['email'];
    $notelp = $_POST['no_telp'];

    // echo $nama_depan;
    // echo $nama_belakang;
    // echo $alamat;
    // echo $tempatlahir;
    // echo $tanggallahir;
    // echo $email;
    // echo $notelp; 

    $inputsql = "INSERT INTO `datadiri` ( `nama_depan`, `nama_belakang`, `alamat`, `tempatlahir`, `tanggallahir`, `email`, `notlp`) 
                            VALUES ('$nama_depan', '$nama_belakang', '$alamat', '$tempatlahir', '$tanggallahir', '$email', '$notelp')";

    $input = mysqli_query($koneksi, $inputsql);

    if ($input) {
        echo "Data berhasil";
    } else {
        echo "data Gagal";
    }
}

function update()
{
    include 'koneksi.php';

    $id = $_POST['id'];
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $alamat = $_POST['alamat'];
    $tempatlahir = $_POST['tempat_lahir'];
    $tanggallahir = $_POST['tanggal_lahir'];
    $email = $_POST['email'];
    $notelp = $_POST['no_telp'];

    $queryUpdate = "UPDATE `datadiri` 
                SET `nama_depan` = '$nama_depan',
                 `nama_belakang` = '$nama_belakang',
                  `alamat` = '$alamat', 
                  `tempatlahir` = '$tempatlahir', 
                  `tanggallahir` = '$tanggallahir', 
                  `email` = '$email', 
                  `notlp` = '$notelp' 
                  WHERE `datadiri`.`id` = $id";
    $prosesUpdate = mysqli_query($koneksi, $queryUpdate);

    if ($prosesUpdate) {
        echo "berhasil";
    } else {
        echo "gagal";
    }
}
