<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Pembeli</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <center>
        <div class="container">

            <div class="card mt-5">
                <div class=" card-header">
                    <h2>Pesanan Anda</h2>
                    <a href="index.php?page=pembeli&aksi=daftarProduk" class="btn btn-primary float-right">Pesan</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Produk Pesanan</th>
                                <th>Tanggal Pembelian</th>
                                <th>Status Pesanan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Diganti Saat Modul 2 -->
                            <tr>
                                <td>1</td>
                                <td>ML199</td>
                                <td>2021-12-06</td>
                                <td>
                                    <!-- <a href="index.php?page=praktikan&aksi=nilaiPraktikan&idPraktikum=#" class="btn btn-info">Cek Nilai</a> -->
                                    Proses
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </center>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.css"></script>
</body>

</html>