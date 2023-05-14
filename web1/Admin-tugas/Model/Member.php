<?php
class Member{
    //member1 var
    private $koneksi;
    //member2 konstruktor
    public function __construct()
    {
        $this->koneksi = getConection();
    }
    public function cekLogin($data){
        $sql = "SELECT * FROM member WHERE username = ? AND password = ?";
        //prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch();//ambil 1 baris data
        return $rs;
    }
}
?>
