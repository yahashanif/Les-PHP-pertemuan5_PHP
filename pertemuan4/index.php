<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="number" name="menu">
        <input type="submit" name="submit" value="PROSES">
    </form>

    <?php
    $arraytest = array();

    if(isset($_POST['submit'])){
        $number = $_POST['menu'];
        array_push($arraytest,$number);
      
    //     switch ($number) {
    //         case 1:
    //             echo "MENU 1";
    //         case 2:
    //             echo "MENU 2";
    //         default:
    //             echo "MENU TIDAK TERSEDIA";
    //             break;
    //     }

    }

    foreach ($arraytest as $key => $value) {
        echo $value;
    }
    $cars = ["Volvo", "BMW", "Toyota",2];
   foreach ($cars as $data) {
        echo $data;
        echo "<br/>";
    }
    echo "<br/>";
    $cars[1] = "HYUNDAI";
    unset($cars[1]);
    echo count($cars);

    array_push($cars,"Honda");
    
    // for ($i = 1; $i <= count($cars); $i++) {
        //     echo $cars[$i];
        // }
        echo "=============</br>";
        foreach ($cars as $key => $value) {
            // echo $key;
            echo "<br/>";
            echo $value;
        }

        array_pop($cars);
        echo "=============</br>";
        foreach ($cars as $key => $value) {
            echo "<br/>";
            echo $value;
        }
    echo "<br/>";
    $array1 = [1,2,3,4,5];
    $array2 = ["a","b","c","d"];
    $array3 = array_merge($array1,$array2);
    foreach ($array3 as $key => $value) {
        echo $value;
    }
     


    // echo "<br/>";
    // $mahasiswa = array(
    //     array("Dimas", "Teknik Informatika", "Laki-laki", 23),
    //     array("Fitri", "Sistem Informasi", "Perempuan", 22),
    //     array("Juan", "Manajemen Informatika", "Laki-laki", 24),
    //     array("Wulan", "Teknik Komputer", "Perempuan", 20),
    //     array("Marcel", "Teknik Informatika", "Laki-laki", 24)
    // );

    // for ($row = 0; $row < 5; $row++) {
    //     echo "<br>";
    //     for ($col = 0; $col < 4; $col++) {
    //         echo "[$row][$col]";
    //     }
    // }
    // for ($row = 0; $row < 5; $row++) {
    //     echo "<br>";
    //     for ($col = 0; $col < 4; $col++) {
    //         echo $mahasiswa[$row][$col];
    //     }
    // }


    ?>
</body>

</html>