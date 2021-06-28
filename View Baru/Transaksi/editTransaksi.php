<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mejarias</title>

    <link rel="stylesheet" href="Assets/CSS/bootstrap.min.css">
    <style>
        .input-group-text {
            width: 150px;
        }
    </style>
</head>

<body>

    <div class="card border-primary mb-3 card mt-5" style="width: 1000px;">
        <div class="card-header">
                <h5 class="float-left">Tabel Data Meja Rias</h5>
                <button type="button" class="btn btn-warning float-right">Kembali</button>
        </div>
        <div class="card-body">
            <form action="index.php?page=MejaRias&aksi=view" method="POST">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Warna Meja Rias</span>
                    </div>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Harga Meja Rias</span>
                    </div>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Stok Meja Rias</span>
                    </div>
                    <input type="text" class="form-control" name="nama">
                </div>
                <button class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

</body>

<script src="Assets/JS/jquery-3.5.1.slim.min.js"></script>
<script src="Assets/JS/popper.min.js"></script>
<script src="Assets/JS/bootstrap.min.js"></script>

</html>