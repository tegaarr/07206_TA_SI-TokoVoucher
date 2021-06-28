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
                    <a href="index.php?page=transaksi&aksi=view" class="btn btn-info float-right">Kembali</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Produk Yang Dibeli</th>
                                <th>Jumlah Produk Yang Dibeli</th>
                                <th>Total Harga</th>
                                <th>Tanggal Pembelian</th>
                                <th>Status Pesanan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Diganti Saat Modul 2 -->
                            <tr>
                            <?php $no = 1;
                            foreach($data as $row) : ?>
                                <td><?=$no?></td>
                                <td><?=$row['nama_produk']?></td>
                                <td><?=$row['jumlah_produk']?></td>
                                <td><?="Rp. "?><?=$row['total_harga']?></td>
                                <td><?=$row['tgl_transaksi']?></td>
                                <td>
                                <?php if($row['status'] == 0) : ?>
                                    <a href="index.php?page=transaksi&aksi=verif&id_transaksi=<?= $row['id_transaksi']?>" class="btn btn-success">Proses Transaksi</a>
                                    <?php elseif($row['status'] == 1) : ?>
                                    <a>Transaksi Selesai pada <?=$row['tgl_transaksi']?></a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php $no++;
                            endforeach;?>
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