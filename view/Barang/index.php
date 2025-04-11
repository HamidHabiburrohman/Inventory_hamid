<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="../Jenis/index.php">Jenis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="">Barang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <div class="container">
      <h1>Data Inventory Hamid</h1>
      <a href="view_tambah.php" class="btn btn-primary">Tambah barang baru</a>
     <table class="table">
            <tr>
            <th scope="col">Id barang</th>
            <th scope="col">Nama barang</th>
            <th scope="col">Harga barang</th>
            <th scope="col">Stok barang</th>
            <th scope="col">Id jenis</th>
            <th>Aksi</th>
            </tr>
    <tbody>
         <?php
             include "../../config/koneksi.php";
              $query = mysqli_query($conn, "SELECT * FROM barang");
              $no = 1;
              if(mysqli_num_rows($query)){
                  echo "";
                  while($result = mysqli_fetch_assoc($query)){
              ?>
              <tr>
                  <td><?php echo $result['Id_barang'] ?></td>
                  <td><?php echo $result['Nama_barang'] ?></td>
                  <td><?php echo $result['Harga_barang'] ?></td>
                  <td><?php echo $result['Stok_barang'] ?></td>
                  <td><?php echo $result['Id_jenis'] ?></td>
                  <td>

                      <a  class="btn btn-warning btn-sm" href="view_edit.php?Id=<?php echo $result['Id_barang']?>">
                      <i class="fa-solid fa-pencil"></i> Edit</a>
                      <a href="proses_hapus.php?Id=<?php echo $result['Id_barang']?>" onclick="return confirm('bener nih?') "class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash"></i> Hapus</a>
                  </td>
              </tr>
              <?php
                  $no++;
                  }
              } 
        ?>
                        
            
        </tr>
    </tbody>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>