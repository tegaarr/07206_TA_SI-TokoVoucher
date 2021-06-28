<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembeli</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <center>
        <div class="container">
            <div class="card mt-5">
                <div class=" card-header">
                    <h2>Data Pembeli</h2>
                    <a href="index.php?page=transaksi&aksi=daftarProduk" class="btn btn-primary float-right">Pesan</a>
                </div>
                <div class="card-body">

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No Urut</th>
                                <th>Nama Pembeli</th>
                                <th>Email Pembeli</th>
                                <th>No. HP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Diganti saat modul 2 -->
                            <tr>
                                <?php $no = 1;
                                foreach($data as $row) :?>
                                <td><?=$no?></td>
                                <td><?=$row['nama_pembeli']?></td>
                                <td><?=$row['email_pembeli']?></td>
                                <td><?=$row['telp_pembeli']?></td>
                                <!-- id Diganti saat modul 3 -->
                                <td>
                                <a href="index.php?page=transaksi&aksi=pesanan&id_pembeli=<?=$row['id_pembeli']?>&nama_pembeli=<?=$row['nama_pembeli']?>" class="btn btn-warning">Pesanan</a>
                                </>
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
</>

</html>