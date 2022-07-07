<?php
include '../database.php';
$guru = new Guru();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $id   = @$_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    if ($aksi == "create"){
        $guru->create($nip,$nama,$alamat);
        header("location:index.php");
    }
    else if ($aksi == "update") {
        $guru->update($id, $nip, $nama,$alamat);
        header("location:index.php");
    }
    else if ($aksi == "delete"){
        $guru->delete($id);
        header("location:index.php");
    }
}
?>