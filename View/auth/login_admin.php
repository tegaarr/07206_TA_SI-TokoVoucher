<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Login Admin</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Login Admin</h2>
            </div>
            <div class="card-body">
                <form action="index.php?page=auth&aksi=authAdmin" method="POST">
                    <div class="form-group">
                        <label>Nama Admin</label>
                        <input type="text" class="form-control" name="nama_admin" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password_admin" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>