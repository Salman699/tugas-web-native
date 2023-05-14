<?php
session_start();
include_once 'koneksi.php';
include_once 'Model/Member.php';

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if (empty($username) || empty($password)) {
    echo '<script> alert("Silahkan isi username dan password");history.back();</script>';
    exit;
}

$data = [
    $username,
    $password
];

$model = new Member();
$rs = $model->cekLogin($data); //ceklogin ini diarahkan ke models/Member.php
if(!empty($rs)){
    $_SESSION['MEMBER'] = $rs;
    header('Location: http://localhost/web1/Admin-tugas/index.php?url=produk');
    exit;
}
else {
    echo '<script> alert("Username atau password salah");history.back();</script>';
    exit;
}
?>
