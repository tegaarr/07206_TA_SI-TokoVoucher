<?php
class AdminModel{

    public function get($idAdmin)
    {
        $sql = "SELECT * from admin WHERE id_admin = $idAdmin";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }


    //pembeli manage

    public function prosesStorePembeli($nama, $email, $no_hp)
    {
        $sql = "INSERT INTO pembeli(nama_pembeli, email_pembeli, telp_pembeli)
        VALUES ('$nama', '$email', '$no_hp')";
        return koneksi()->query($sql);
    }

    public function datapembeli()
    {
        $sql = "SELECT * FROM pembeli";
        $query = koneksi()->query($sql);
        $hasil = [];
        while ($data = $query->fetch_assoc()){
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function prosesUpdate($nama, $email, $no_hp, $idPembeli)
    {
        $sql = "UPDATE pembeli SET nama_pembeli = '$nama', email_pembeli = '$email', telp_pembeli ='$no_hp' WHERE
        id_pembeli='$idPembeli'";
        $query = koneksi()->query($sql);
        return $query;
    }

    public function dataPembeliById($id)
    {
        $sql = "SELECT * FROM pembeli WHERE id_pembeli = $id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }
    
    

}
?>