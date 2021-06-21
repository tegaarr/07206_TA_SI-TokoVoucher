<?php

class ProdukModel
{
    public function get()
    {
        $sql = "SELECT * FROM produk";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function getProduk($idjenis)
    {
        $sql = "SELECT jenisproduk.nama_jenis as namaJenis,produk.id_jenis as idJenis,
        produk.id_produk as idProduk,
        produk.nama_produk as namaProduk from produk join jenisproduk
        on produk.id_jenis = jenisproduk.id_jenis where produk.id_jenis  = $idjenis order by produk.id_produk";
        $query = koneksi()->query($sql);
        $hasil = [];
        while($data = $query->fetch_assoc())
        {
            $hasil[] = $data;
        }
        return $hasil;
    }
    public function index()
    {
        $data = $this->get();
        extract($data);
        require_once("View/produk/index.php");
    }

}
// $tes = new ProdukModel();
// var_export($tes->get());
// die();
?>