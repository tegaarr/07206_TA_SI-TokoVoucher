<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <center>
        <div class="container">

            <div class="card mt-5">
                <div class=" card-header">
                    <h2>Tambah Data Produk</h2>
                    <a href="index.php?page=jenisproduk&aksi=view" class="btn btn-info float-right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="index.php?page=produk&aksi=store" method="POST">
                    <div class="col">
                            <!-- Digant saat modul 3 -->
                            <label for="">Jenis Produk : </label>
                            <select name="jenisproduk" class="form-control" required>
                                <?php foreach($data as $row): ?>
                                <option value="<?= $row['id_jenis']?>"><?= $row['nama_jenis']?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Nama Produk :</label>
                                <input type="text" name="nama_produk" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="">Harga Produk : </label>
                                <input type="text" pattern="[0-9]" name="harga_produk" class="form-control" required>
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