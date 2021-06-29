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
                    <a href="index.php?page=produk&aksi=create" class="btn btn-success float-right">Tambah Produk Baru</a>
                    <a href="index.php?page=jenisproduk&aksi=view" class="btn btn-warning float-left">Kembali ke Jenis Produk</a>
                </div>
                <div class="card-body">
                
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Diganti Saat Modul 2 -->
                            <tr>
                            <?php $no = 1;
                            foreach($produk as $row) : ?>
                                <td><?= $no?></td>
                                <td><?= $row['nama_produk']?></td>
                                <td><?= $row['harga_produk']?></td>
                                <td><?= $row['status_produk'] == 0 ? '<span class="badge badge-danger">Kosong</span>' 
                                : '<span class="badge badge-success">Ready</span>'?>
                                </td>
                                <td><a href="index.php?page=produk&aksi=edit&id_produk=<?= $row['id_produk']?>" class="btn btn-warning">Edit</a>
                                    <a href="index.php?page=produk&aksi=delete&id_produk=<?= $row['id_produk']?>" class="btn btn-danger">Hapus</a>
                                    <?php if($row['status_produk'] == 0) : ?>
                                    <a href="index.php?page=produk&aksi=aktifkan&id_produk=<?= $row['id_produk']?>" class="btn btn-success">Update Produk</a>
                                    <?php elseif($row['status_produk'] == 1) : ?>
                                    <a href="index.php?page=produk&aksi=nonAktifkan&id_produk=<?= $row['id_produk']?>" class="btn btn-danger">Update Produk</a>
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