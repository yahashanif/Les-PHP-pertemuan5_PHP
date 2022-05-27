<?php
include 'koneksi.php';
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="simpan.php?aksi=simpan" method="GET">
    <label for="">Nama Depan</label>
    <input type="text" name="nama_depan">
    <br>
    <label for="">Nama Belakang</label>
    <input type="text" name="nama_belakang">
    <br>
    <label for="">Alamat</label>
    <textarea id="" cols="30" rows="10" name="alamat"></textarea>
    <br>
    <label for="">Tempat Lahir</label>
    <input type="text" name="tempat_lahir">
    <br>
    <label for="">Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir">
    <br>
    <label for="">Email</label>
    <input type="email" name="email">
    <br>
    <label for="">No Telp</label>
    <input type="number" name="no_telp">
    <br>
    <input type="submit">

  </form>

  <form action="simpan.php?aksi=cek" method="POST">
    <label for="">No Telp</label>
    <input type="number" name="cek">
    <br>
    <input type="submit">
  </form>

  <br><br>
  <hr>
  <h1>Tabel Data diri</h1>
  <table>
    <tr>
      <th>No</th>
      <th>Nama Depan</th>
      <th>Nama Belakang</th>
      <th>Alamat</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>Email</th>
      <th>No Telp</th>
      <th>Aksi</th>
    </tr>
    <?php
    $no = 0;
    $query = "SELECT * FROM `datadiri`";
    $runquery = mysqli_query($koneksi, $query);

    while ($data = mysqli_fetch_array($runquery)) {
      $no++;
    ?>
      <tr>
        <td><?= $no ?></td>
        <td><?= $data['nama_depan'] ?></td>
        <td><?= $data['nama_belakang'] ?></td>
        <td><?= $data['alamat'] ?></td>
        <td><?= $data['tempatlahir'] ?></td>
        <td><?= $data['tanggallahir'] ?></td>
        <td><?= $data['email'] ?></td>
        <td><?= $data['notlp'] ?></td>
        <td>
          <a href="editForm.php?id=<?= $data['id'] ?>">Edit</a>
          <a href="delete.php?id=<?= $data['id'] ?>">Delete</a>
        </td>
      </tr>
    <?php
    }
    ?>



  </table>

</body>

</html>