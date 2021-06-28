<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jenis Produk</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <center>
        <div class="container">

            <div class="card mt-5">
                <div class=" card-header">
                    <h2>Edit Data Jenis Produk</h2>
                    <a href="index.php?page=jenisproduk&aksi=view" class="btn btn-info float-right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="index.php?page=jenisproduk&aksi=update&id_jenis=<?=$produk['id_jenis']?>" method="POST">
                        <!-- Digant saat modul 3 -->
                        <input type="hidden" name="id_jenis" value="<?=$produk['id_jenis']?>">
                        <div class="row">
                            <div class="col">
                                <label for="">Nama Jenis :</label>
                                <input type="text" name="nama_jenis" class="form-control" value="<?=$produk['nama_jenis']?>">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right mt-3">Simpan</button>
                    </form>


                </div>
            </div>
        </div>
    </center>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.css"></script>
</body>

</html>