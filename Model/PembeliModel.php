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

    public function index()
    {
        $id = $_SESSION['pembeli']['id_pembeli'];
        $data= $this->datapembeli($id);
        extract($data);

        require_once("View/pembeli/index.php");
    }
}
?>