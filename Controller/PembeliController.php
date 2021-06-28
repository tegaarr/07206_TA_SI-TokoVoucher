<?php

class PembeliController
{
    private $model;

    public function __construct()
    {
        $this->model = new PembeliModel();
    }
    
    public function daftarProduk()
    {
        $idjenis = $_GET['id_jenis'];
        $data = $this->model->getProdukByStatusJenis($idjenis);
        extract($data);
        require_once("View/pembeli/daftarProduk.php");
    }

    public function indexJenis()
    {
        $data = $this->model->getJenisProduk();
        extract($data);
        require_once("View/pembeli/daftarJenis.php");
    }

    public function daftarProdukByJenis()
    {
        $idjenis = $_GET['id_jenis'];
        $produk = $this->model->getProdukByStatusJenis($idjenis);
        extract($produk);
        require_once("View/pembeli/daftarJenis.php");
    }

    //manage pembeli

    public function edit()
    {
        $idPembeli = $_GET['id_pembeli'];
        $data = $this->model->dataPembeliById($idPembeli);
        extract($data);
        require_once("View/pembeli/edit.php");
    }

    public function update()
    {
        $id = $_POST['id_pembeli'];
        $nama = $_POST['nama_pembeli'];
        $email = $_POST['email_pembeli'];
        $no_hp = $_POST['telp_pembeli'];

        if($this->model->prosesUpdate($nama, $email, $no_hp, $id)){
            header("location: index.php?page=admin&aksi=view&pesan=Berhasil Ubah Data");
        }else{
            header("location: index.page?page=pembeli&aksi=edit&pesan=Gagal Ubah Data");
        }
    }

    public function delete()
    {
        $idPembeli = $_GET['id_pembeli'];
        if($this->model->prosesDelete($idPembeli)) {
            header("location: index.php?page=admin&aksi=view&pesan=Berhasil Delete Data");
        }
        else{
            header("location: index.php?page=admin&aksi=view&pesan=Gagal Delete Data");
        }
    }
}

?>