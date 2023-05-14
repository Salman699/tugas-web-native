<?php
session_start();
//memanggil dan memproses file bagian atas
include_once 'koneksi.php';
include_once 'Model/Produk.php';
include_once 'Model/Jenis_Produk.php';
include_once 'Model/Member.php';

if(isset($_SESSION['MEMBER'])){
  $sesi = $_SESSION['MEMBER'];
  include_once 'top.php';
  //memanggil dan memproses file bagian menu
  include_once 'menu.php';
  ?>
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid px-4">

        <?php 
        //algoritma menangkap url agar masuk kedalam index
        $url = $_GET['url'];
        if($url == 'dashboard'){
          include_once 'dashboard.php';
        } else if (!empty($url)){
          include_once ''.$url.'.php';
        } else {
          include_once 'dashboard.php';
        }   
        ?>
      </div>
    </main>
  </div>
  <?php
  //memanggil file bagian bawah
  include_once 'bottom.php';

} else {
  echo '<script> alert("anda tidak boleh masuk");history.back();</script>';
}
?>
