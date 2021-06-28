<?php

class PembeliModel
{

    //pembeli manage

    public function prosesUpdate($nama, $email, $no_hp, $id)
    {
        $sql = "UPDATE pembeli SET nama_pembeli = '$nama', email_pembeli = '$email', telp_pembeli = '$no_hp' WHERE
        id_pembeli='$id'";
        $query = koneksi()->query($sql);
        return $query;
    }

    public function dataPembeliById($id)
    {
        $sql = "SELECT * FROM pembeli WHERE id_pembeli = $id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function prosesDelete($idPembeli)
    {
        $sql  = "DELETE FROM pembeli WHERE id_pembeli = $idPembeli";
        $query = koneksi()->query($sql);
        return $query;
    }

    public function prosesStorePesanan()
    {
        $sql = "INSERT INTO ";
    }

    //produk & jenisproduk

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

    public function getProduk()
    {
        $sql = "SELECT * FROM produk WHERE status_produk = 1";
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
        WHERE produk.id_jenis = $idjenis and status_produk = 1";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    


}

// $tes = new PembeliModel();
// var_export($tes->update());
// die();
?>