<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
          <a class="nav-link " aria-current="page" href="">Jenis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../Barang/index.php">Barang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <?php
    $Id=$_GET['Id'];
    include '../../config/koneksi.php';
    $query=mysqli_query($conn, "SELECT * FROM barang WHERE Id_barang='$Id'");
    $result=mysqli_fetch_array($query);
    ?>

  <div class="container">
    <h1>Edit Data barang Baru</h1>
    <form action="proses_edit.php" method="GET">
   
            <div class="mb-3">
                <label for="exampleInputEmaill" class="form-label">Id barang</label>
                <input type="text" class="form-control" value="<?php echo $result['Id_barang']?>" name="Id_barang" id="exampleInputEmaill" aria-describedby="emailHellp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmaill" class="form-label">Nama barang</label>
                <input type="text" class="form-control" value="<?php echo $result['Nama_barang']?>" name="Nama_barang" id="exampleInputEmaill" aria-describedby="emailHellp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmaill" class="form-label">Harga barang</label>
                <input type="text" class="form-control" value="<?php echo $result['Harga_barang']?>" name="Harga_barang" id="exampleInputEmaill" aria-describedby="emailHellp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmaill" class="form-label">Stok barang</label>
                <input type="text" class="form-control" value="<?php echo $result['Stok_barang']?>" name="Stok_barang" id="exampleInputEmaill" aria-describedby="emailHellp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmaill" class="form-label">Id jenis</label>
                <input type="text" class="form-control" value="<?php echo $result['Id_jenis']?>" name="Id_jenis" id="exampleInputEmaill" aria-describedby="emailHellp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>