<?php
// Koneksi
require_once("koneksi.php");
//Routing dari URL ke Obyek Class PHP

/* Memanggil Model */
require_once("Model/AuthModel.php");
require_once("Model/ProdukModel.php");
require_once("Model/AdminModel.php");
require_once("Model/PembeliModel.php");
require_once("Model/TransaksiModel.php");

require_once("Controller/AuthController.php");
require_once("Controller/ProdukController.php");
require_once("Controller/AdminController.php");
require_once("Controller/PembeliController.php");
require_once("Controller/TransaksiController.php");

    session_start();
if (isset($_GET['page']) && isset($_GET['aksi'])) {
    $page = $_GET['page']; // Berisi nama page
    $aksi = $_GET['aksi']; // Aksi Dari setiap page

    // require_once akan Dirubah Saat Modul 2
    if ($page == "auth") {
        $auth = new AuthController();
        if ($aksi == 'view') {
            $auth->index();
        } else if ($aksi == 'loginAdmin') {
            $auth->login_admin();
        } else if ($aksi == 'authAdmin') {
            $auth->authAdmin();
        } else if ($aksi == 'logout') {
            $auth->logout();
        } else {
            echo "Method Not Found";
        }
    } else if ($page == "admin") {
        $admin = new AdminController();
        require_once("View/menu/menu_admin.php");
        if ($aksi == 'view') {
            $admin->index();
        } else if ($aksi == 'pesanan') {
            require_once("View/admin/nilai.php");
        } else if ($aksi == 'daftarPembeli') {
            $admin->daftarPembeli();
        } else if ($aksi == 'storePembeli') {
            $admin->storePembeli();
        } else {
            echo "Method Not Found";
        }
    } else if ($page == "produk") {
        $produk = new ProdukController();
        require_once("View/menu/menu_admin.php");
        if ($aksi == 'view') {
            $produk->indexProdukByJenis();
        } else if ($aksi == 'create') {
            $produk->createProduk();
        } else if ($aksi == 'store') {
            $produk->storeProduk();
        } else if ($aksi == 'edit') {
            $produk->edit();
        } else if ($aksi == 'update') {
            $produk->updateProduk();
        } else if ($aksi == 'delete') {
            $produk->deleteProduk();
        } else if ($aksi == 'aktifkan') {
            $produk->aktifkanProduk();
        } else if ($aksi == 'nonAktifkan') {
            $produk->NonAktifkanProduk();
        } else {
            echo "Method Not Found";
        }
    } else if ($page == "jenisproduk") {
        $produk = new ProdukController();
        require_once("View/menu/menu_admin.php");
        if ($aksi == 'view') {
            $produk->indexJenis();
        } else if ($aksi == 'create') {
            $produk->createJenis();
        } else if ($aksi == 'store') {
            $produk->storeJenis();
        } else if ($aksi == 'edit') {
            $produk->editJenis();
        }else if ($aksi == 'update') {
            $produk->updateJenis();
        } else if ($aksi == 'delete') {
            $produk->deleteJenis();
        }
        else {
            echo "Method Not Found";
        }
    } else if ($page == "pembeli") {
        $pembeli = new PembeliController();
          if ($aksi == 'edit') {
            $pembeli->edit();
        } else if ($aksi == 'update') {
            $pembeli->update();
        } else if ($aksi == 'delete') {
            $pembeli->delete();
        } else {
            echo "Method Not Found";
        }
    } else if ($page == 'transaksi') {
        $transaksi = new TransaksiController();
        require_once("View/menu/menu_admin.php");
        if ($aksi == 'view') {
            $transaksi->indexPembeli();
        } else if ($aksi == 'indexJenis') {
            $transaksi->indexJenis();
        } else if ($aksi == 'indexProduk') {
            $transaksi->indexProduk();
        } else if ($aksi == 'daftarProduk') {
            $transaksi->daftarProduk();
        } else if ($aksi == 'storePesanan') {
            $transaksi->storePesanan();
        } else if ($aksi == 'pesanan') {
            $transaksi->indexPesanan();
        } else if ($aksi == 'verif') {
            $transaksi->updatePesanan();
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
