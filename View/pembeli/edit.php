<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="card mt-5">
            <div class="card-header text-center">
                <h2>Edit Profil</h2>
                <a href="index.php?page=pembeli&aksi=view" class="btn btn-info float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form action="index.php?page=pembeli&aksi=update" method="POST">
                    <!-- Diganti saat modul 3 -->
                    <input type="hidden" name="id_pembeli" value="<?=$data['id_pembeli']?>">
                    <div class="form-group">
                        <label for="">Nama Pembeli</label>
                        <input type="text" name="nama_pembeli" class="form-control" value="<?=$data['nama_pembeli']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Email Pembeli</label>
                        <input type="text" name="email_pembeli" class="form-control" value="<?=$data['email_pembeli']?>">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" value="<?=$data['password']?>">
                    </div>
                    <div class="form-group">
                        <label for="">No.Telp Pembeli</label>
                        <input type="text" name="telp_pembeli" class="form-control" value="<?=$data['telp_pembeli']?>">
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.css"></script>
</body>

</html>