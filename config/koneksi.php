<?php 
//menyambungkan PHP dengan database  MYsql

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'db_inventory_hamid';

    $conn = mysqli_connect($hostname, $username, $password, $db_name);

    if(!$conn){
        die('Koneksi Gagal.' . mysqli_connect_error());
    }
?>