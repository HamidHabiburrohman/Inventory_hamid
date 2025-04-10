<?php


$Id_jenis = $_GET['Id_jenis'];
$Nama_jenis = $_POST['Nama_jenis'];




include '../../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO jenis VALUES (
    '$Id_jenis',
    '$Nama_jenis')");

// Javascript

if($query) {
    echo "<script>alert('Data berhasil disimpan')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
   echo "Error : " . mysqli_error($conn);
}
?>