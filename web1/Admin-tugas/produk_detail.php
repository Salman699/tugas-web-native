<?php 


$id = $_REQUEST["id"];
$model = new Produk();
$produk = $model->getProduk($id);


?>
<br>
<br>
<div>
    <h5>Detail Produk: <b> <?= $produk["nama"]; ?></b> </h5>
    <br>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<table class="table">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Stok</th>
                <th>Min Stok</th>
                <th>Jenis Produk ID</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td><?= $produk["kode"] ?> </td>
            <td><?= $produk["nama"] ?> </td>
            <td><?= $produk["harga_beli"] ?> </td>
            <td><?= $produk["harga_jual"] ?> </td>
            <td><?= $produk["stok"] ?> </td>
            <td><?= $produk["min_stok"] ?> </td>
            <td><?= $produk["jenis_produk_id"] ?> </td>
        </tr>
    </tbody>
    </table>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div>