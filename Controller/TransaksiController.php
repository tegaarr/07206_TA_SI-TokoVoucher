<?php

class TransaksiController
{
    private $model;


    public function __construct()
    {
        $this->model = new TransaksiModel();
    }

    public function indexPesanan()
    {
        $idpembeli = $_GET['id_pembeli'];
        $data = $this->model->getTransaksi($idpembeli);
        $pembeli = $this->model->getPembeli();
        extract($data);
        extract($pembeli);
        require_once("View/transaksi/pesanan.php");
    }

    public function indexPembeli()
    {
        $data = $this->model->getPembeli();
        extract($data);
        require_once("View/transaksi/index.php");
    }

    public function indexJenis()
    {
        $data = $this->model->getJenisProduk();
        extract($data);
        require_once("View/transaksi/indexJenis.php");
    }

    public function indexProduk()
    {
        $idjenis = $_GET['id_jenis'];
        $data = $this->model->getProdukByStatusJenis($idjenis);
        extract($data);
        require_once("View/transaksi/indexProduk.php");
    }

    public function daftarProduk()
    {
        $data = $this->model->getProdukByStatus();
        $pembeli  = $this->model->getPembeli();
        extract($data);
        extract($pembeli);
        require_once("View/transaksi/daftarProduk.php");
    }

    public function storePesanan()
    {
        $idpembeli = $_POST['pembeli'];
        $idproduk = $_POST['produk'];
        $akun = $_POST['data_akun'];
        $jumlah = $_POST['jumlah_produk'];
        $tanggal = $_POST['tgl_transaksi'];
        $produk = $this->model->getHargaProduk($idproduk);
        $total  = $jumlah * $produk['harga_produk'];
        if($this->model->prosesStoreTransaksi($akun, $total, $jumlah, $tanggal, $idpembeli, $idproduk))
        {
            header("location:index.php?page=transaksi&aksi=view&pesan=Berhasil Tambah Transaksi");
        }
        else
        {
            header("location:index.php?page=transaksi&aksi=view&pesan=Gagal Tambah Data");
        }
    }

    public function updatePesanan()
    {
        $idtransaksi = $_GET['id_transaksi'];
        if($this->model->prosesUpdateTransaksi($idtransaksi))
        {
            header("location:index.php?page=transaksi&aksi=view&pesan=Transaksi Di Proses");
        }
        else
        {
            header("location:index.php?page=transaksi&aksi=view&pesan=Gagal Memproses Transaksi");
        }
    }
}


?>