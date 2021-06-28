<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>

    <link rel="stylesheet" href="Assets/CSS/bootstrap.min.css">
</head>

<body>
    <center>
        <div class="card border-primary mb-3 card mt-5" style="width: 1000px;">
            <div class="card-header">
                <h5 class="float-left">Tabel Data Customer</h5>
                 <a href="index.php?page=Customer&aksi=addCustomer" type="button" class="btn btn-success float-right"><i class="fa fa-plus mr-2"></i>Tambah Data</a>
            </div>
            <div class="card-body">

                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Customer</th>
                            <th scope="col">Notelp Customer</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Sheila</td>
                            <td>089xxxxxxxxx</td>
                            <td><a href="index.php?page=Customer&aksi=editCustomer" type="button" class="btn btn-warning">Edit</a>
                            <a href="index.php?page=Customer&aksi=view" type="button" class="btn btn-danger">Hapus</a>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <center>
            </div>
            </div>
</body>

<script src="Assets/JS/jquery-3.5.1.slim.min.js"></script>
<script src="Assets/JS/popper.min.js"></script>
<script src="Assets/JS/bootstrap.min.js"></script>

</html>