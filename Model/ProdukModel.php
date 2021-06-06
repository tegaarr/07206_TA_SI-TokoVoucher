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