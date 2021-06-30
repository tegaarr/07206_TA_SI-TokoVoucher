<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="card mt-5">
            <div class=" card-header">
                <h2>Pesan Disini</h2>
                <a href="index.php?page=transaksi&aksi=indexJenis" class="btn btn-warning float-right">Ke Pilihan Jenis Produk</a>
            </div>
            <div class="card-body">
                <form action="index.php?page=transaksi&aksi=storePesanan" method="POST">
                    <div class="row">
                        <div class="col">
                            <!-- Digant saat modul 3 -->
                            <label for="">Produk : </label>
                            <select name="produk" class="form-control" required>
                                <?php foreach($data as $row): ?>
                                <option value="<?= $row['id_produk']?>"><?= $row['nama_produk']?><?=" = Rp. "?><?=$row['harga_produk']?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col">
                            <!-- Digant saat modul 3 -->
                            <label for="">Nama Pembeli : </label>
                            <select name="pembeli" class="form-control" required>
                                <?php foreach($pembeli as $row): ?>
                                <option value="<?= $row['id_pembeli']?>"><?= $row['nama_pembeli']?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="">Data Akun : </label>
                            <input type="text" name="data_akun" class="form-control" required>
                    </div>
                    <div class="form-group">
                            <label for="">Jumlah Produk Yang dibeli : </label>
                            <input type="text" name="jumlah_produk" class="form-control" required>
                    </div>
                    <!-- <div class="for-group">
                            <label for="">Total Harga : </label>
                            <input type="text" name="total_harga" class="form-control" required>
                    </div> -->
                    <div class="for-group">
                            <label for="">Tanggal Transaksi : </label>
                            <input type="datetime-local" name="tgl_transaksi" class="form-control" required>
                    </div>
            </div>
                    <button type="submit" class="btn btn-success float-right mt-3">Pesan</button>
                </form>


            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.css"></script>
</body>

</html>