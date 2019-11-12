<?php

include('../config/koneksi.php');

$nama          = $_POST['nama'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['thn_lahir'] . '-' . $_POST['bln_lahir'] . '-' . $_POST['tgl_lahir'];
$alamat        = $_POST['alamat'];
$gender        = $_POST['gender'];
$asalsekolah   = $_POST['asalsekolah'];
$nilaiun       = $_POST['nilaiun'];

$query = mysqli_query($connect, "INSERT INTO anggota(nama_lengkap, tempat_lahir, tanggal_lahir, alamat, gender, asalsekolah, nilaiun,) 
                      VALUES ('$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$gender', '$asalsekolah', '$nilaiun')");

if($query) {
    header('location:../index.php?aksi=tambah&status=true');
}
else {
    header('location:../index.php?page=tambah&status=false');
}

?>