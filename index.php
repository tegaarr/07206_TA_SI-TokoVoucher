<?php
// Koneksi
require_once("koneksi.php");
//Routing dari URL ke Obyek Class PHP

/* Memanggil Model */
require_once("Model/AuthModel.php");
require_once("Model/ProdukModel.php");
require_once("Model/AdminModel.php");
require_once("Model/PembeliModel.php");
    session_start();
if (isset($_GET['page']) && isset($_GET['aksi'])) {
    $page = $_GET['page']; // Berisi nama page
    $aksi = $_GET['aksi']; // Aksi Dari setiap page

    // require_once akan Dirubah Saat Modul 2
    if ($page == "auth") {
        $auth = new AuthModel();
        if ($aksi == 'view') {
            //require_once("View/auth/index.php");
            $auth->index();
        } else if ($aksi == 'loginAdmin') {
            //require_once("View/auth/login_admin.php");
            $auth->login_admin();
        } else if ($aksi == 'loginPembeli') {
            //require_once("View/auth/login_pembeli.php");
            $auth->login_pembeli();
        } else if ($aksi == 'authAdmin') {
            //require_once("View/menu/menu_admin.php");
            //require_once("View/admin/index.php");
            $auth->authAdmin();
        } else if ($aksi == 'authPembeli') {
            require_once("View/menu/menu_pembeli.php");
            require_once("View/pembeli/index.php");
        } else if ($aksi == 'logout') {
            //require_once("View/auth/index.php");
            $auth->logout();
        } else if ($aksi == 'daftarPembeli') {
            require_once("View/auth/daftar_pembeli.php");
        } else if ($aksi == 'storePraktikan') {
            require_once("View/auth/index.php");
        } else {
            echo "Method Not Found";
        }
    } else if ($page == "admin") {
        require_once("View/menu/menu_admin.php");
        if ($aksi == 'view') {
            require_once("View/admin/index.php");
        } else if ($aksi == 'nilai') {
            require_once("View/aslab/nilai.php");
        } else if ($aksi == 'createNilai') {
            require_once("View/aslab/createNilai.php");
        } else if ($aksi == 'storeNilai') {
            require_once("View/aslab/nilai.php");
        } else {
            echo "Method Not Found";
        }
    } else if ($page == "praktikum") {
        require_once("View/menu/menu_aslab.php");
        if ($aksi == 'view') {
            require_once("View/praktikum/index.php");
        } else if ($aksi == 'create') {
            require_once("View/praktikum/create.php");
        } else if ($aksi == 'store') {
            require_once("View/praktikum/index.php");
        } else if ($aksi == 'edit') {
            require_once("View/praktikum/edit.php");;
        } else if ($aksi == 'update') {
            require_once("View/praktikum/index.php");
        } else if ($aksi == 'aktifkan') {
            require_once("View/praktikum/index.php");
        } else if ($aksi == 'nonAktifkan') {
            require_once("View/praktikum/index.php");
        } else {
            echo "Method Not Found";
        }
    } else if ($page == "modul") {
        require_once("View/menu/menu_aslab.php");
        if ($aksi == 'view') {
            require_once("View/modul/index.php");
        } else if ($aksi == 'create') {
            require_once("View/modul/create.php");
        } else if ($aksi == 'store') {
            require_once("View/modul/index.php");
        } else if ($aksi == 'delete') {
            require_once("View/modul/index.php");
        } else {
            echo "Method Not Found";
        }
    } else if ($page == "praktikan") {
        require_once("View/menu/menu_praktikan.php");
        if ($aksi == 'view') {
            require_once("View/praktikan/index.php");
        } else if ($aksi == 'edit') {
            require_once("View/praktikan/edit.php");
        } else if ($aksi == 'update') {
            require_once("View/praktikan/index.php");
        } else if ($aksi == 'praktikum') {
            require_once("View/praktikan/praktikum.php");
        } else if ($aksi == 'daftarPraktikum') {
            require_once("View/praktikan/daftarPraktikum.php");
        } else if ($aksi == 'storePraktikum') {
            require_once("View/praktikan/index.php");
        } else if ($aksi == 'nilaiPraktikan') {
            require_once("View/praktikan/nilaiPraktikan.php");
        } else {
            echo "Method Not Found";
        }
    } else if ($page == 'daftarprak') {
        require_once("View/menu/menu_aslab.php");
        if ($aksi == 'view') {
            require_once("View/daftarprak/index.php");
        } else if ($aksi == 'verif') {
            require_once("View/daftarprak/index.php");
        } else if ($aksi == 'unVerif') {
            require_once("View/daftarprak/index.php");
        } else {
            echo "Method Not Found";
        }
    } else {
        echo "Page Not Found";
    }
}
 else {
    header("location: index.php?page=auth&aksi=view"); //Jangan ada spasi habis location
}
