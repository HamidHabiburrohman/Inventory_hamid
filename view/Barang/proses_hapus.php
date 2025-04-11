<?php


$Id_barang = $_GET['Id'];


include '../../config/koneksi.php';

$query = mysqli_query($conn, "DELETE FROM barang WHERE Id_barang = '$Id_barang'");

// Javascript

if($query) {
    echo "<script>alert('Data dihapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Data dihapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
?>