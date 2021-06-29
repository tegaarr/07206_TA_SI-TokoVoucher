<?php

class ProdukController
{
    private $model;


    public function __construct()
    {
        $this->model = new ProdukModel();
    }

    //index

    public function indexProduk()
    {
        $produk = $this->model->getProduk();
        extract($produk);
        require_once("View/produk/index.php");
    }

    public function indexProdukByJenis()
    {
        $idjenis = $_GET['id_jenis'];
        $produk = $this->model->getProdukByJenis($idjenis);
        extract($produk);
        require_once("View/produk/index.php");
    }

    public function indexJenis()
    {
        $data = $this->model->getJenisProduk();
        extract($data);
        require_once("View/jenisproduk/index.php");
    }

    //jenisproduk

    public function createJenis()
    {
        require_once("View/jenisproduk/create.php");
    }

    public function editJenis()
    {
        $idjenis = $_GET['id_jenis'];
        $produk = $this->model->getJenisProdukById($idjenis);
        extract($produk);
        require_once("View/jenisproduk/edit.php");
    }

    public function storeJenis()
    {
        $nama = $_POST['nama_jenis'];
        if($this->model->prosesStoreJenisProduk($nama))
        {
            header("location:index.php?page=jenisproduk&aksi=view&pesan=Berhasil Menambah");
        }else
        {
            header("location:index.php?page=jenisproduk&aksi=create&pesan=Berhasil Menambah");
        }
    }

    public function deleteJenis()
    {
        $idjenis = $_GET['id_jenis'];
        if($this->model->prosesDeleteJenis($idjenis))
        {
            header("location:index.php?page=jenisproduk&aksi=view&pesan=Berhasil Menghapus");
        }
        else
        {
            header("location:index.php?page=jenisproduk&aksi=view&pesan= Gagal Menghapus");
        }
    }

    public function updateJenis()
    {
        $idjenis = $_GET['id_jenis'];
        $nama = $_POST['nama_jenis'];
        if($this->model->prosesUpdateJenis($nama, $idjenis))
        {
            header("location: index.php?page=jenisproduk&aksi=view&pesan=Berhasil Update Jenis");
        }
        else{
            header("location: index.php?page=jenisproduk&aksi=update&pesan=Gagal Update Jenis");
        }
    }

    //produk

    public function createProduk()
    {
        $data = $this->model->getJenisProduk();
        extract($data);
        require_once("View/produk/create.php");
    }

    public function storeProduk()
    {
        $nama  = $_POST['nama_produk'];
        $harga = $_POST['harga_produk'];
        $idjenis = $_POST['jenisproduk'];
        if($this->model->prosesStoreProduk($nama, $harga, $idjenis))
        {
            header("location:index.php?page=jenisproduk&aksi=view&pesan=Berhasil Tambah Data Produk");
        }
        else
        {
            header("location:index.php?page=produk&aksi=create&pesan=Gagal Tambah Data Produk");
        }
    }

    public function edit()
    {
        $idproduk = $_GET['id_produk'];
        $produk = $this->model->getProdukId($idproduk);
        extract($produk);
        require_once("View/produk/edit.php");
    }

    public function updateProduk()
    {
        $idproduk  = $_GET['id_produk'];
        $idjenis = $_GET['id_jenis'];
        $nama = $_POST['nama_produk'];
        $harga = $_POST['harga_produk'];
        if($this->model->prosesUpdateProduk($nama, $harga, $idproduk, $idjenis))
        {
            header("location:index.php?page=jenisproduk&aksi=view&pesan=Berhasil Update Data Produk");
        }
        else
        {
            header("location:index.php?page=produk&aksi=edit&pesan=Gagal Update Data Produk");
        }
    }

    public function deleteProduk()
    {
        $idproduk = $_GET['id_produk'];
        if($this->model->prosesDeleteProduk($idproduk))
        {
            header("location:index.php?page=jenisproduk&aksi=view&pesan=Berhasil Menghapus");
        }
        else
        {
            header("location:index.php?page=jenisproduk&aksi=view&pesan= Gagal Menghapus");
        }
    }
    //ubah status produk

    public function aktifkanProduk()
    {
        $idproduk = $_GET['id_produk'];
        if($this->model->prosesAktifkanProduk($idproduk))
        {
            header("location:index.php?page=jenisproduk&aksi=view&pesan=Produk Ready");
        }
        else
        {
            header("location:index.php?page=produk&aksi=view&pesan=Gagal Mengubah Status Produk");
        }
    }

    public function NonAktifkanProduk()
    {
        $idproduk = $_GET['id_produk'];
        if($this->model->prosesNonAktifkanProduk($idproduk))
        {
            header("location:index.php?page=jenisproduk&aksi=view&pesan=Produk Not Ready");
        }
        else
        {
            header("location:index.php?page=produk&aksi=view&pesan=Gagal Mengubah Status Produk");
        }
    }

}



?>