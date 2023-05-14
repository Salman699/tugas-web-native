<?php 


class Pelanggan{
    public function dataPelanggan()
    {
        $koneksi = getConection();
        $sql = "SELECT * FROM pelanggan ";
        $ps = $koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getPelanggan($id)
    {
       $koneksi = getConection();
       $sql = "SELECT * FROM pelanggan WHERE id = ?";
       $statement =  $koneksi->prepare($sql);
       $statement->execute([$id]);
       $sr = $statement->fetch();
       return $sr;
   }

   public function simpan($data)
   {
    $koneksi = getConection();
    $sql = "INSERT INTO 
    pelanggan (kode, nama_pelanggan, jk, tmp_lahir, tgl_lahir, email, kartu_id)
    VALUES (?,?,?,?,?,?,?)";
    $statement = $koneksi->prepare($sql);
    $statement->execute($data);
}

public function ubah($data)
{
    $koneksi = getConection();
    $sql = "UPDATE pelanggan SET kode=?, nama_pelanggan=?, jk=?, tmp_lahir=?, tgl_lahir=?, email=?, kartu_id=?  WHERE id=?";
    $ps = $koneksi->prepare($sql);
    $ps->execute($data);
}

public function hapus($id)
{
   $koneksi = getConection();
   $sql = "DELETE FROM pelanggan WHERE id=?";
   $ps = $koneksi->prepare($sql);
   $ps->execute([$id]);
}
}




?>