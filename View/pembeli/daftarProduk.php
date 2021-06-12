<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="card mt-5">
            <div class=" card-header">
                <h2>Daftar Produk yang Ready !!</h2>
                <a href="index.php?page=pembeli&aksi=view" class="btn btn-info float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form action="index.php?page=pembeli&aksi=storePesanan" method="POST">
                    <div class="row">
                        <div class="col">
                            <!-- Digant saat modul 3 -->
                            <label for="">Produk : </label>
                            <select name="produk" class="form-control">
                                <option value="1">ML100</option>
                                <option value="2">ML199</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right mt-3">Daftar</button>
                </form>


            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.css"></script>
</body>

</html>