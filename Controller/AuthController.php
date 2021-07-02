<?php

class AuthController
{
    private $model;

    public function __construct()
    {
        $this->model = new AuthModel();
    }

    public function login_admin()
    {
        require_once("View/auth/login_admin.php");
    }

    public function authAdmin()
    {
        $nama = $_POST['nama_admin'];
        $password = $_POST['password_admin'];
        $data = $this->model->prosesloginAdmin($nama, $password);

        if($data)
        {
            $_SESSION['role'] = 'admin';
            $_SESSION['admin'] = $data;

            header("location:index.php?page=admin&aksi=view&pesan=Berhasil Login"); 
        } else
        {
            header("location:index.php?page=auth&aksi=loginAdmin&pesan=Gagal Login");
        }
    }

    public function logout()
    {
        session_destroy();
        header("location:index.php?page=auth&aksi=loginAdmin&pesan=Berhasil Logout");
    }
}


?>