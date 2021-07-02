<?php

class TransaksiModel
{
    public function getTransaksi($idpembeli)
    {
        $sql = "SELECT * from produk join transaksi on produk.id_produk = transaksi.id_produk WHERE id_pembeli = $idpembeli";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function prosesStoreTransaksi($akun, $total, $jumlah, $tanggal, $idpembeli, $idproduk)
    {
        $sql = "INSERT INTO transaksi (id_pembeli, id_admin, id_produk, jumlah_produk,
        total_harga, status, tgl_transaksi, data_akun) VALUES ('$idpembeli', 1, '$idproduk',
        '$jumlah', '$total', 0, '$tanggal', '$akun')";
        return koneksi()->query($sql);
    }

    public function prosesUpdateTransaksi($idtransaksi)
    {
        $sql = "UPDATE transaksi SET status = 1 WHERE id_transaksi = $idtransaksi";
        return koneksi()->query($sql);
    }

    public function getPembeli()
    {
        $sql = "SELECT * from pembeli order by id_pembeli asc";
        $query = koneksi()->query($sql);
        $hasil = [];
        while  ($data = $query->fetch_assoc()){
            $hasil[]  = $data;
        }
        return $hasil;
    }

    public function getPembeliByID($idpembeli)
    {
        $sql = "SELECT * FROM pembeli WHERE id_pembeli = $idpembeli";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function getJenisProduk()
    {
        $sql = "SELECT * FROM jenisproduk order by id_jenis asc";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getProdukByStatus()
    {
        $sql  = "SELECT * FROM produk where status_produk = 1 order by id_jenis asc, harga_produk asc";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getProdukByJenis($idjenis)
    {
        $sql  = "SELECT * FROM produk JOIN jenisproduk ON 
        produk.id_jenis = jenisproduk.id_jenis
        WHERE produk.id_jenis = $idjenis order by harga_produk asc";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getProdukByStatusJenis($idjenis)
    {
        $sql  = "SELECT * FROM produk JOIN jenisproduk ON 
        produk.id_jenis = jenisproduk.id_jenis
        WHERE produk.id_jenis = $idjenis and status_produk = 1 order by harga_produk asc";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getHargaProduk($idproduk)
    {
        $sql = "SELECT harga_produk from produk WHERE id_produk = $idproduk";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }
}

// $tes = new TransaksiModel();
// var_export($tes->getPembeliByID(1));
// die();



?>