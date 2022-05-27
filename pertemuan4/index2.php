<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="nama">
        <input type="email" name="email">
        <input type="submit" name="submit" value="PROSES">

    </form>

    <?php
    $data =[];
    if(isset($_POST['submit'])){
        echo "<br/>";
        array_push($data,$_POST['nama']);
        array_push($data,$_POST['email']);
    }

    foreach ($data as  $value) {
        echo $value;
    }

    ?>
</body>
</html>
