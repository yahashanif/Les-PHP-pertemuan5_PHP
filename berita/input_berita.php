<form action="">
    <input type="text" placeholder="Input judul"><br>
    <?php
    // include 'koneksi.php';    
    // $sql = mysqli_query($koneksi,"select * from category");

    ?>
    <select name="" id="">
        <!-- <?php 
        // while ($data = mysqli_fetch_array($sql)) {
        ?> -->
          <option value="<?=$data['id']?>">$data['name_category']</option>
          
        <!-- <?php  
        // }
        ?> -->
    </select>
    <Textarea></Textarea>
    <input type="date">
</form>