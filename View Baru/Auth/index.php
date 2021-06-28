<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>

    <link rel="stylesheet" href="Assets/CSS/bootstrap.min.css">
    <style>
        .input-group-text {
            width: 150px;
        }
    </style>
</head>

<body>
    <center>
        <div class="card border-dark mt-5" style="width: 600px;">
            <div class="card-header text-white bg-dark text-white">
                <h5>SISTEM INFORMASI MEJA RIAS</h5>
            </div>
            <div class="card-body bg-secondary text-white">
                <h5 class="card-title">Selamat Datang Di Toko Meja Rias</h5>
                <p class="card-text">Silahkan Login Admin</p>
                <form action="index.php?page=Auth&aksi=authAdmin" method="POST">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nama Admin</span>
                        </div>
                        <input type="text" class="form-control" name="nama">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Password</span>
                        </div>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <button class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </center>
</body>

<script src="Assets/JS/jquery-3.5.1.slim.min.js"></script>
<script src="Assets/JS/popper.min.js"></script>
<script src="Assets/JS/bootstrap.min.js"></script>

</html>