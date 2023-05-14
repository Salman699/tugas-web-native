<?php 

// DATA DETAIL PESANAN
$id = $_REQUEST["id"];
$model = new Pesanan();
$ps = $model->getPesanan($id);

?>
<br>
<br>
<div>
    <h5>Detail Pesanan </h5>
    <br>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<table class="table">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Pelanggan Id</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td><?= $ps["tanggal"] ?> </td>
            <td><?= $ps["total"] ?> </td>
            <td><?= $ps["pelanggan_id"] ?> </td>
        </tr>
    </tbody>
    </table>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div>