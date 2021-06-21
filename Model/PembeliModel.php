<?php

class PembeliModel
{

    public function daftar()
    {
        $data = $this->get();
        $extract($data);
        require_once("View/daftarpembeli/index.php");
    }

    public function datapembeli($id)
    {
        $sql = "SELECT * FROM pembeli WHERE id_pembeli = $id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function getProduk($id)
    {
        $sql = "SELECT * FROM produk WHERE id_jenis = $id and status_produk = 1";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function daftarProduk()
    {
        $data = $this->getProduk();
        extract($data);
        require_once("View/pembeli/daftarProduk.php");
    }
    

    public function index()
    {
        $id = $_SESSION['pembeli']['id_pembeli'];
        $data= $this->datapembeli($id);
        extract($data);

        require_once("View/pembeli/index.php");
    }

    public function edit()
    {
        $id = $_SESSION['pembeli']['id_pembeli'];
        $data = $this->datapembeli($id);
        extract($data);
        require_once("View/pembeli/edit.php");
    }

    public function prosesUpdate($nama, $email, $password, $no_hp, $id)
    {
        $sql = "UPDATE pembeli SET nama_pembeli = '$nama', email_pembeli = '$email', password ='$password', telp_pembeli = '$no_hp' WHERE
        id_pembeli='$id'";
        $query = koneksi()->query($sql);
        return $query;
    }

    public function update()
    {
        $id = $_POST['id_pembeli'];
        $nama = $_POST['nama_pembeli'];
        $email = $_POST['email_pembeli'];
        $no_hp = $_POST['telp_pembeli'];
        $password = $_POST['password'];

        if($this->prosesUpdate($nama, $email, $password, $no_hp, $id)){
            header("location: index.php?page=pembeli&aksi=view&pesan=Berhasil Ubah Data");
        }else{
            header("location: index.page?page=pembeli&aksi=edit&pesan=Gagal Ubah Data");
        }
    }
}

// $tes = new PembeliModel();
// var_export($tes->update());
// die();
?>