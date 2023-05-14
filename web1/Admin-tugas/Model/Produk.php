<?php

require_once __DIR__ . "/../koneksi.php";

class Produk
{


    public function dataProduk()
    {
        $koneksi = getConection();
        $sql = "SELECT produk.*, jenis_produk.nama as kategori FROM produk INNER JOIN
        jenis_produk ON jenis_produk.id = produk.jenis_produk_id";
        $ps = $koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getProduk($id)
    {
        $koneksi = getConection();
        $sql = "SELECT produk.*, jenis_produk.nama as kategori FROM produk INNER JOIN
        jenis_produk ON jenis_produk.id = produk.jenis_produk_id WHERE produk.id = ?";
        $ps = $koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data)
    {
        $koneksi = getConection();
        $sql = "INSERT INTO 
        produk (kode, nama_pelanggan, harga_beli, harga_jual, stok, min_stok, jenis_produk_id)
        VALUES (?,?,?,?,?,?,?)";
        $statement = $koneksi->prepare($sql);
        $statement->execute($data);
    }

    public function ubah($data)
    {
        $koneksi = getConection();
        $sql = "UPDATE produk SET kode=?, nama_pelanggan=?, harga_beli=?, harga_jual=?, stok=?, min_stok=?, jenis_produk_id=? WHERE id=?";
        $ps = $koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id)
    {
        $koneksi = getConection();
        $sql = "DELETE FROM produk WHERE id=?";
        $ps = $koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}
