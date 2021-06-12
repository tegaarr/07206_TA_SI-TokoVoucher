<?php
class AuthModel{

    public function index()
    {
        require_once("View/auth/index.php");
    }

    public function login_admin()
    {
        require_once("View/auth/login_admin.php");
    }

    public function login_pembeli()
    {
        require_once("View/auth/login_pembeli.php");
    }

    public function prosesloginAdmin($nama, $password)
    {
        $sql = "SELECT * FROM admin WHERE
        nama_admin = '$nama' and password = '$password'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function authAdmin()
    {
        $nama = $_POST['nama_admin'];
        $password = $_POST['password'];
        $data = $this->prosesloginAdmin($nama, $password);

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
        header("location:index.php?page=auth&aksi=view&pesan=Berhasil Logout");
    }

    public function prosesloginPembeli($email, $password)
    {
        $sql = "SELECT * FROM pembeli WHERE
        email_pembeli = '$email' and password = '$password'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function authPembeli()
    {
        $email = $_POST['email_pembeli'];
        $password = $_POST['password'];
        $data = $this->prosesloginPembeli($email, $password);

        if($data)
        {
            $_SESSION['role'] = 'pembeli';
            $_SESSION['pembeli'] = $data;

            header("location:index.php?page=pembeli&aksi=view&pesan=Berhasil Login"); 
        } else
        {
            header("location:index.php?page=auth&aksi=loginPembeli&pesan=Gagal Login");
        }
    }
}

    
// $tes = new AuthModel();
// var_export($tes->authAdmin());
// die();
?>