<form action="">
    <input type="text" placeholder="Input judul"><br>
    <?php
    include 'koneksi.php';    
    $sql = mysqli_query($koneksi,"select * from category");

    ?>
    <select name="" id="">
        <?php 
        while ($data = mysqli_fetch_array($sql)) {
        ?>
          <option value="<?=$data['id']?>"><?=$data['nama_category']?></option>
          
        <?php  
        }
        ?>
    </select>
    <Textarea></Textarea>
    <input type="date">
</form>


$lokasi_foto    = $_FILES['filefoto']['tmp_name'];
    $tipe_foto      = $_FILES['filefoto']['type'];
    $nama_foto      = $_FILES['filefoto']['name'];
    $acak           = rand(000000,999999);
    $nama_file_unik = $acak.$nama_foto; 
  
    if (!empty($lokasi_foto)){
      
      if ($tipe_foto != "image/jpeg" AND $tipe_foto != "image/pjpg" AND $tipe_foto != "image/png" AND $tipe_foto != "image/PNG"){
        echo "Gagal menyimpan data !!! <br>
              Tipe file <b>$nama_foto</b> : $tipe_foto <br>
              Tipe file yang diperbolehkan adalah : <b>JPG/JPEG</b>.<br>";
          echo "<a href=javascript:history.go(-1)>Ulangi Lagi</a>";       
      }
      else{
        move_uploaded_file($lokasi_foto,"image/artikel/$nama_file_unik");
	    mysqli_query($koneksi, "INSERT INTO `artikel` (`id`, `id_k`, `judul`, `foto`, `createon`, `isi`, `waktu_awal`)
                                 VALUES(NULL, '$_POST[kategori]', '$_POST[judul]', '$nama_file_unik', current_timestamp(), '$_POST[artikel]', current_timestamp());");	
    	mysqli_close($koneksi);
	    header('location:index.php?page=artikel');
	
      }