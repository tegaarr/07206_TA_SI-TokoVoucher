<?php

class AdminController
{
    private $model;

    public function __construct()
    {
        $this->model = new AdminModel();
    }

    public function index()
    {
        $data = $this->model->dataPembeli();
        extract($data);
        require_once("View/admin/index.php");
    }

    public function daftarPembeli()
    {
        require_once("View/admin/daftar_pembeli.php");
    }

    public function storePembeli()
    {
        $nama = $_POST['nama_pembeli'];
        $email = $_POST['email_pembeli'];
        $no_hp = $_POST['telp_pembeli'];
        if($this->model->prosesStorePembeli($nama, $email, $no_hp)){
            header("location: index.php?page=admin&aksi=view&pesan=Berhasil Daftar");
        }else{
            header("location: index.php?page=admin&aksi=daftarPembeli&pesan=Gagal Daftar");
        }
    }
}