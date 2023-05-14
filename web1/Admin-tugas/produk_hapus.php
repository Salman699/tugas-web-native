<?php 

require_once __DIR__ . "/koneksi.php" ;
require_once __DIR__ . "/Model/Produk.php" ;

$model = new Produk();
$tombol = $_POST["proses"];

// var_dump($_POST);
// die;

$model->hapus($tombol); 
header("Location:index.php?url=produk");
exit();

?>