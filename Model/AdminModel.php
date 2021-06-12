<?php
class AdminModel{


    

    public function index()
    {
        $idAdmin = $_SESSION['admin']['id_admin'];
        $data = $this->get("$idAdmin");
        extract($data);
        require_once("View/admin/index.php");
    }
    

}
?>