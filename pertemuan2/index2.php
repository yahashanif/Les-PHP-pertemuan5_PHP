<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
</head>
<body>
    <label for="">Tanggal Lahir</label>
    <select name="" id="">
        <?php
        for ($i=1; $i < 32 ; $i++) { 
            echo "<option value='$i'>$i</option>";
        }

        // ?>
    </select>

    <?php


?>
</body>
</html> -->

<?php
  // $j = 2;
  // while ($j < 10) {
  //     echo $j;
  //     $j++;
  //     echo '<br/>';
  // }
  // echo '<br/>';
  // do {
  //    echo $j;
  //    $j++;
  //    echo '<br/>';
  // } while ($j < 10);

  // $j = 1;
  // $huruf = true;

  // while ($huruf) {
  //   echo "a - $j";
  //   echo "<br/>";
  //   $j++;
  //   if($j==10){
  //     $huruf = false;
  //   }
  // }

  // $umur = 45;
  // if($umur <= 5){
  //   echo "bayi";
  // }elseif($umur <= 12 ){
  //   echo "anak2";
  // }elseif($umur <= 18){
  //   echo "Remaja";
  // }elseif($umur <= 40){
  //   echo "Dewasa";
  // }else{
  //   echo "lansia";
  // }

  $orang1 = 40;
  $orang2 = 45;

  if($orang1 < $orang2){
    echo "Orang 2 lebih tua";
  }else{
    echo "Orang 1 lebih tua";
  }


?>