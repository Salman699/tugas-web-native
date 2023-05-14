<?php 

require_once __DIR__ . "/Model/Kartu.php" ;

$id = $_REQUEST["id"];
$model = new Kartu();
$kar = $model->getKartu($id);

?>

<br>
<br>
<div>
    <h5>Detail Kartu: <b> <?= $kar["nama"]; ?></b> </h5>
    <br>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<table class="table">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Diskon</th>
                <th>Iuran</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td><?= $kar["kode"] ?> </td>
            <td><?= $kar["nama"] ?> </td>
            <td><?= $kar["diskon"] ?> </td>
            <td><?= $kar["iuran"] ?> </td>
        </tr>
    </tbody>
    </table>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div>
