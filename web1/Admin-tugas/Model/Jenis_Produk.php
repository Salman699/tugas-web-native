<?php 


class JenisProduk{
    public function jenisProduk()
    {
        $koneksi = getConection();
        $sql = "SELECT * FROM jenis_produk ";
        $ps = $koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getJenisProduk($id)
    {
        $koneksi = getConection();
        $sql = "SELECT * FROM jenis_produk WHERE id = ?";
        $ps = $koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

}



?>