<?php


$Id_jenis = $_GET['Id_jenis'];
$Nama_jenis = $_GET['Nama_jenis'];



include '../../config/koneksi.php';

$query = mysqli_query($conn,"UPDATE jenis SET Nama_jenis='$Nama_jenis' WHERE Id_jenis='$Id_jenis'");

// Javascript

if($query) {
    echo "<script>alert('Data diedit disimpan')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Data gagal disimpan')</script>";
    echo "<script>window.location.href='view_edit.php'</script>";
}
?>