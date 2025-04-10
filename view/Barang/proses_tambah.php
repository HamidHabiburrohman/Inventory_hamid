<?php


$Id_barang = $_POST['Id_barang'];
$Nama_barang = $_POST['Nama_barang'];
$Harga_barang = $_POST['Harga_barang'];
$Stok_barang = $_POST['Stok_barang'];
$Id_jenis = $_POST['Id_jenis'];


include '../../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO barang VALUES(
    '$Id_barang',
    '$Nama_barang',
    '$Harga_barang',
    '$Stok_barang',
    '$Id_jenis')");

// Javascript

if($query) {
    echo "<script>alert('Data berhasil disimpan')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Data gagal disimpan')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}
?>