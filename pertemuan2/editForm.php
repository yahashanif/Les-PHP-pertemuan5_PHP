<?php
    include 'koneksi.php';


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Diri</title>
</head>
<body>
    <?php
    $id = $_GET['id'];
    $queryEdit = "Select * from datadiri where id='$id'";
    $sqledit = mysqli_query($koneksi,$queryEdit);
    $data = mysqli_fetch_array($sqledit);

    ?>
<form action="simpan.php?aksi=update" method="POST">
    <input type="hidden" name="id" value="<?=$data['id']?>">
        <label for="">Nama Depan</label>
        <input type="text" value="<?=$data['nama_depan']?>" name="nama_depan">
        <br>
        <label for="">Nama Belakang</label>
        <input type="text" value="<?=$data['nama_belakang']?>" name="nama_belakang">
        <br>
        <label for="">Alamat</label>
        <textarea  id="" cols="30" rows="10" name="alamat" ><?=$data['alamat']?></textarea>
        <br>
        <label for="">Tempat Lahir</label>
        <input type="text" value="<?=$data['tempatlahir']?>" name="tempat_lahir">
        <br>
        <label for="">Tanggal Lahir</label>
        <input type="date" value="<?=$data['tanggallahir']?>" name="tanggal_lahir">
        <br>
        <label for="">Email</label>
        <input type="email" value="<?=$data['email']?>" name="email">
        <br>
        <label for="">No Telp</label>
        <input type="number" value="<?=$data['notlp']?>" name="no_telp">
        <br>
        <input type="submit">

    </form>
</body>
</html>