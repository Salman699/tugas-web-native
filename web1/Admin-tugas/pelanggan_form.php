<?php 

// FORM PELANGGAN

require_once __DIR__ . "/Model/Pelanggan.php" ;

error_reporting(0);
$model = new Pelanggan();
$data_pelanggan = $model->dataPelanggan();
$edit = $_REQUEST["edit"];
$pel = !empty($edit) ? $model->getPelanggan($edit) : array();

?>

<br>
<form method="post" action="pelanggan_controller.php">
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label" >Kode</label> 
    <div class="col-8">
      <input id="text1" name="kode" type="text" class="form-control" value="<?= $pel['kode']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text2" name="nama_pelanggan" type="text" class="form-control" value="<?= $pel['nama_pelanggan']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-8">
      <input id="text3" name="jk" type="text" class="form-control" value="<?= $pel['jk']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Tampat Lahir</label> 
    <div class="col-8">
      <input id="text4" name="tmp_lahir" type="text" class="form-control" value="<?= $pel['tmp_lahir']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="text5" class="col-4 col-form-label">Taggal Lahir</label> 
    <div class="col-8">
      <input id="text5" name="tgl_lahir" type="date" class="form-control" value="<?= $pel['tgl_lahir']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="text6" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="text6" name="email" type="text" class="form-control" value="<?= $pel['email']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Kartu Id</label> 
    <div class="col-8">
      <input id="text" name="kartu_id" type="text" class="form-control" value="<?= $pel['kartu_id']?>">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <?php if (empty($edit)) { ?>
        <button name="proses" type="submit" class="btn btn-primary" value="simpan">Submit</button>
      <?php }else{ ?>
        <button name="proses" type="submit" class="btn btn-primary" value="ubah">Update</button>
        <input type="hidden" name="idx" value="<?=$pel['id'] ?>">
      <?php } ?>
      <button name="proses" type="submit" class="btn btn-primary" value="batal">Cancel</button>
    </div>
  </div>
</form>