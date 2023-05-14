<?php 
error_reporting(0);

require_once __DIR__ . "/Model/Pesanan.php" ;

$model = new Pesanan();
$data_produk = $model->pesanan();
$edit = $_REQUEST['edit'];
$pes = !empty($edit) ? $model->getPesanan($edit): array();

?>

<br>
<form method="post" action="pesanan_controller.php">
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Tanggal</label> 
        <div class="col-8">
          <input id="text1" name="tanggal" type="date" class="form-control" value="<?=$pes["tanggal"]?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Total</label> 
        <div class="col-8">
          <input id="text2" name="total" type="number" class="form-control" value="<?=$pes["total"]?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Pelanggan Id</label> 
        <div class="col-8">
          <input id="text3" name="pelanggan_id" type="number" class="form-control" value="<?=$pes["pelanggan_id"]?>">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <?php if (empty($edit)){ ?>
          <button name="proses" type="submit" class="btn btn-primary" value="simpan">Submit</button>
          <?php } else{?>

            <button name="proses" type="submit" class="btn btn-primary" value="ubah">Update</button>
           <input type="hidden" name="idx" value="<?=$edit ?>">

            <?php } ?>

            <button name="proses" type="submit" class="btn btn-primary" value="batal">Cancel</button>
        </div>
      </div>
    </form>