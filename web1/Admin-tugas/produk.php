<?php

require_once __DIR__ . "/Model/Produk.php";

$produk = new Produk();
$dataProduk = $produk->dataProduk();


// foreach ($dataProduk as $row){
//    echo $row["kode"];
// }



?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
            <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <!-- <i class="fas fa-table me-1"></i>
            DataTable Example -->

            <!-- membuat tombol yang mengarahkan ke file produk_form.php -->
            <a href="index.php?url=produk_form" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                        <th>Minimal Stok</th>
                        <th>Jenis_Produk</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                        <th>Minimal Stok</th>
                        <th>Jenis_Produk</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no = 1; foreach ($dataProduk as $row){ ?>
                    <tr>
                        <th><?= $no ?> </th>
                        <td><?= $row["kode"] ?> </td>
                        <td><?= $row["nama"] ?> </td>
                        <td><?= $row["harga_beli"] ?> </td>
                        <td><?= $row["harga_jual"] ?> </td>
                        <td><?= $row["stok"] ?> </td>
                        <td><?= $row["min_stok"] ?> </td>
                        <td><?= $row["jenis_produk_id"] ?> </td>
                        <td>
                            <form action="produk_hapus.php" method="post">
                                <a href="index.php?url=produk_detail&id=<?=$row['id'] ?>" class="btn btn-info btn-sm">Detail</a>
                                <a href="index.php?url=produk_form&ededit=<?=$row['id'] ?>" class="btn btn-warning btn-sm">Ubah</a>
                                <button type="submit" name="proses" value="<?=$row["id"] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan dihapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                </tbody>
            </table>
        </div>
    </div>