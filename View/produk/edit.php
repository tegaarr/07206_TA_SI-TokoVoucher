<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
   -webkit-appearance: none;
   margin: 0;
}
input[type="number"] {
   -moz-appearance: textfield;
}
</style>
</head>

<body>
    <center>
        <div class="container">

            <div class="card mt-5">
                <div class=" card-header">
                    <h2>Edit Data Produk</h2>
                    <a href="index.php?page=produk&aksi=view&id_jenis=<?=$produk['id_jenis']?>" class="btn btn-info float-right">Kembali</a>

                    <a href="index.php?page=jenisproduk&aksi=view" class="btn btn-info float-left">Jenis</a>
                </div>
                <div class="card-body">
                    <form action="index.php?page=produk&aksi=update&id_jenis=<?=$produk['id_jenis']?>&id_produk=<?=$produk['id_produk']?>" method="POST">
                        <!-- Digant saat modul 3 -->
                        <input type="hidden" name="id_produk" value="<?=$produk['id_produk']?>">
                        <input type="hidden" name="id_jenis" value="<?=$produk['id_jenis']?>">
                        <div class="row">
                            <div class="col">
                                <label for="">Nama Produk :</label>
                                <input type="text" name="nama_produk" class="form-control" value="<?=$produk['nama_produk']?>">
                            </div>
                            <div class=" col">
                                <label for="">Harga Produk : </label>
                                <input type="number" name="harga_produk" class="form-control" value="<?=$produk['harga_produk']?>">
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