<?php 

$id = $_REQUEST["id"];
$pelanggan = new Pelanggan();
$pl = $pelanggan->getPelanggan($id);

?>
<br>
<br>
<div>
    <h5>Detail Pelanggan: <b> <?= $pl["nama_pelanggan"]; ?></b> </h5>
    <br>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <table class="table">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
                <th>Kartu Id</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $pl["kode"] ?> </td>
                <td><?= $pl["nama_pelanggan"] ?> </td>
                <td><?= $pl["jk"] ?> </td>
                <td><?= $pl["tmp_lahir"] ?> </td>
                <td><?= $pl["tgl_lahir"] ?> </td>
                <td><?= $pl["email"] ?> </td>
                <td><?= $pl["kartu_id"] ?> </td>
            </tr>
        </tbody>
    </table>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div>
