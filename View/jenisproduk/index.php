<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Produk</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <center>
        <div class="container">
            <div class="card mt-5">
                <div class=" card-header">
                    <h2>Data Jenis Produk</h2>
                    <a href="index.php?page=jenisproduk&aksi=create" class="btn btn-success float-right">Tambah Jenis Produk</a>
                </div>
                <div class="card-body">
                
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Jenis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Diganti Saat Modul 2 -->
                            <?php $no = 1;
                            foreach ($data as $row) : ?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?=$row['nama_jenis']?></td>
                                <td>
                                <a href="index.php?page=jenisproduk&aksi=edit&id_jenis=<?= $row['id_jenis']?>" class="btn btn-info">Edit Jenis</a>
                                <a href="index.php?page=produk&aksi=view&id_jenis=<?= $row['id_jenis']?>" class="btn btn-warning">Edit Produk</a>
                                <a href="index.php?page=jenisproduk&aksi=delete&id_jenis=<?= $row['id_jenis']?>" class="btn btn-danger">Hapus</a>
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