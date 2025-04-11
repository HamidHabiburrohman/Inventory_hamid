<?php


$Id_barang = $_GET['Id_barang'];
$Nama_barang = $_GET['Nama_barang'];
$Harga_barang = $_GET['Harga_barang'];
$Stok_barang = $_GET['Stok_barang'];
$Id_jenis = $_GET['Id_jenis'];


include '../../config/koneksi.php';

$query = mysqli_query($conn, 
    "UPDATE barang SET 
    Nama_barang='$Nama_barang',
    Harga_barang='$Harga_barang',
    Stok_barang='$Stok_barang',
    Id_jenis='$Id_jenis'
    WHERE Id_barang='$Id_barang'
    ");

// Javascript

if($query) {
    echo "<script>alert('Data diedit disimpan')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Data gagal disimpan')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}
?>