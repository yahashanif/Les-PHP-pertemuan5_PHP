<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="bil1">
        <input type="number" name="bil2">
        <input type="submit" name="submit" value="PROSES">
    </form>

    <?php
    include 'function.php';
    if (isset($_POST['submit'])) {
        $luas = 4;
        $keliling = 5;
       echo "Luas  $luas Keliling $keliling";
       echo "Luas ". $luas . " Keliling" .$keliling;
    }

    ?>
</body>

</html>