<?php

class TransaksiModel
{
    public function getTransaksi()
    {
        $sql = "SELECT pembeli.id_pembeli as idPembeli, pembeli.nama_pembeli as namaPembeli,
        pembeli.telp_pembeli as no_hpPembeli, pembeli.data_akun as dataAkun,
        produk.id_produk as idProduk, produk.nama_produk as namaProduk,
        produk.harga_produk as hargaProduk";
    }
}



?>