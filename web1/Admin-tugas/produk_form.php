<?php 

error_reporting(0);
$obj_produk = new Produk();
$data_produk = $obj_produk->dataProduk();
$ededit = $_REQUEST["ededit"];
$pro = !empty($ededit) ? $obj_produk->getProduk($ededit): array();

?>

<br>
<form method="post" action="produk_controller.php">
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Kode</label> 
        <div class="col-8">
          <input id="text1" name="kode" type="text" class="form-control" value="<?=$pro["kode"] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
          <input id="text2" name="nama" type="text" class="form-control" value="<?= $pro["nama"] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Harga Jual</label> 
        <div class="col-8">
          <input id="text3" name="harga_jual" type="text" class="form-control" value="<?= $pro["harga_jual"] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text4" class="col-4 col-form-label">Harga Beli</label> 
        <div class="col-8">
          <input id="text4" name="harga_beli" type="text" class="form-control" value="<?= $pro["harga_beli"] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text5" class="col-4 col-form-label">Stok</label> 
        <div class="col-8">
          <input id="text5" name="stok" type="text" class="form-control" value="<?= $pro["stok"] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text6" class="col-4 col-form-label">Minimal Stok</label> 
        <div class="col-8">
          <input id="text6" name="min_stok" type="text" class="form-control" value="<?= $pro["min_stok"] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Jenis Produk id</label> 
        <div class="col-8">
          <input id="text" name="jenis_produk_id" type="text" class="form-control" value="<?= $pro["jenis_produk_id"] ?>">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <?php 
          if (empty($ededit)){
          ?>
          <button name="proses" type="submit" class="btn btn-primary" value="simpan">Submit</button>
          <?php } else{ ?>
          <button name="proses" type="submit" class="btn btn-primary" value="ubah">Update</button>
          <input type="hidden" name="idx" value="<?=$ededit ?>">
            <?php } ?>
          <button name="proses" type="submit" class="btn btn-primary" value="batal">Cancel</button>
        </div>
      </div>
    </form>