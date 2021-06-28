<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis</title>

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
            <div class="float-left mt-2">
                <h5>Tambah Jenis</h5>
            </div>
            <a href="index.php?page=Jenis&aksi=view" class="btn btn-warning float-right"><i class="fas fa-arrow-alt-circle-left mr-2"></i>Kembali</a>
        </div>
        <div class="card-body">
            <form action="index.php?page=Jenis&aksi=view" method="POST">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Nama Jenis</span>
                    </div>
                    <input type="text" class="form-control" name="jenis" value="tanpa kaca">
                </div>
                <button class="btn btn-primary">Tambahkan</button>
            </form>
        </div>
    </div>

</body>

<script src="Assets/JS/jquery-3.5.1.slim.min.js"></script>
<script src="Assets/JS/popper.min.js"></script>
<script src="Assets/JS/bootstrap.min.js"></script>

</html>