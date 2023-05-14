<?php



class Pesanan
{
    public function pesanan()
    {
        $koneksi = getConection();
        $sql = "SELECT * FROM pesanan ";
        $ps = $koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getPesanan($id)
    {
        $koneksi = getConection();
        $sql = "SELECT * FROM pesanan WHERE id = ?";
        $ps = $koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data)
    {
        $koneksi = getConection();
        $sql = "INSERT INTO 
        pesanan(tanggal, total, pelanggan_id)
        VALUES (?,?,?)";
        $statement = $koneksi->prepare($sql);
        $statement->execute($data);
    }

    public function ubah($data)
    {
        $koneksi = getConection();
        $sql = "UPDATE pesanan SET tanggal=?, total=?, pelanggan_id=? WHERE id=?";
        $ps = $koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id)
    {
       $koneksi = getConection();
       $sql = "DELETE FROM pesanan WHERE id=?";
       $ps = $koneksi->prepare($sql);
       $ps->execute([$id]);
    }
}
