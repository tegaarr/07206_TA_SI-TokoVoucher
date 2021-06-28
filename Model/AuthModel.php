<?php
class AuthModel{

    public function prosesloginAdmin($nama, $password)
    {
        $sql = "SELECT * FROM admin WHERE
        nama_admin = '$nama' and password_admin = '$password'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

}

    
// $tes = new AuthModel();
// var_export($tes->authAdmin());
// die();
?>