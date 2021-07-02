<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Daftar Pembeli</title>
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
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Daftar Pembeli</h2>
            </div>
            <div class="card-body">
                <form action="index.php?page=admin&aksi=storePembeli" method="POST">
                    <div class="form-group">
                        <label>Nama : </label>
                        <input type="text" class="form-control" name="nama_pembeli" required>
                    </div>
                    <div class="form-group">
                        <label>Email : </label>
                        <input type="email" class="form-control" name="email_pembeli" required>
                    </div>
                    <div class="form-group">
                        <label>No.Telpon : </label>
                        <input type="number" class="form-control" name="telp_pembeli" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block">Simpan</button>
                    <a href="index.php?page=admin&aksi=view" class="btn btn-danger btn-lg btn-block">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>