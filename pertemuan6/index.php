<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="function.php" method="POST">
            <div class="mb-3 mt-3">
                <label for="exampleInputEmail1" class="form-label">Bilangan 1</label>
                <input type="number" name="bil1" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Bilangan 2</label>
                <input type="number" name="bil2" class="form-control" >
            </div>
           

            <select class="form-select" name="tipe" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="bagi">/</option>
                <option value="kali">x</option>
            </select>
            <br>

            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>