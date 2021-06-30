<?php

class ProdukModel
{

    //get jenisproduk
    public function getJenisProduk()
    {
        $sql = "SELECT * FROM jenisproduk";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getJenisProdukById($idjenis)
    {
        $sql = "SELECT * FROM jenisproduk WHERE id_jenis = $idjenis";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    //get produk
    public function getProdukId($id)
    {
        $sql = "SELECT * from produk where id_produk = $id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
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

    public function getProduk()
    {
        $sql = "SELECT * FROM produk";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }
    
    //jenisproduk manage

    public function prosesStoreJenisProduk($nama)
    {
        $sql = "INSERT INTO jenisproduk(nama_jenis) VALUES ('$nama')";
        return koneksi()->query($sql);
    }

    public function prosesDeleteJenis($idjenis)
    {
        $sql = "DELETE FROM jenisproduk WHERE id_jenis = $idjenis";
        return koneksi()->query($sql);
    }

    public function prosesUpdateJenis($nama, $idjenis)
    {
        $sql = "UPDATE jenisproduk SET nama_jenis = '$nama' WHERE id_jenis = $idjenis";
        return koneksi()->query($sql);
    }

    //produk manage
    public function prosesStoreProduk($nama, $harga, $idjenis)
    {
        $sql = "INSERT INTO produk(nama_produk, status_produk, harga_produk, id_jenis)
        VALUES ('$nama', 0, '$harga', '$idjenis')";
        return koneksi()->query($sql);
    }

    public function prosesUpdateProduk($nama, $harga, $idproduk, $idjenis)
    {
        $sql  = "UPDATE produk SET nama_produk = '$nama',
        harga_produk = '$harga' WHERE id_produk = $idproduk and id_jenis = $idjenis";
        return koneksi()->query($sql);
    }

    public function prosesDeleteProduk($id)
    {
        $sql = "DELETE from produk where id_produk = $id";
        return koneksi()->query($sql);
    }

    //aktifkan non aktifkan produk
    public function prosesAktifkanProduk($idproduk)
    {
        $sql = "UPDATE produk SET status_produk = 1 where id_produk = $idproduk";
        return koneksi()->query($sql);
    }

    public function prosesNonAktifkanProduk($idproduk)
    {
        $sql = "UPDATE produk SET status_produk = 0 where id_produk = $idproduk";
        return koneksi()->query($sql);
    }

    

}
// $tes = new ProdukModel();
// var_export($tes->getProdukByJenis(1));
// die();
?>