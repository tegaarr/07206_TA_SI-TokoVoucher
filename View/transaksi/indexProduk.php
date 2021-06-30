<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <center>
        <div class="container">
            <div class="card mt-5">
                <div class=" card-header">
                    <h2>Data Produk</h2>
                    <a href="index.php?page=transaksi&aksi=view" class="btn btn-success float-right">Ke Transaksi</a>
                    <a href="index.php?page=transaksi&aksi=indexJenis" class="btn btn-warning float-left">Kembali ke Jenis Produk</a>
                </div>
                <div class="card-body">
                
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Diganti Saat Modul 2 -->
                            <tr>
                            <?php $no = 1;
                            foreach($data as $row) : ?>
                                <td><?= $no?></td>
                                <td><?= $row['nama_produk']?></td>
                                <td><?="Rp. "?><?= $row['harga_produk']?></td>
                                <td><?= $row['status_produk'] == 0 ? '<span class="badge badge-danger">Kosong</span>' 
                                : '<span class="badge badge-success">Ready</span>'?>
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