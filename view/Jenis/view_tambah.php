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
          <a class="nav-link active" aria-current="page" href="">Jenis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Barang/index.php">Barang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <div class="container">
    <h1>Tambah jenis barang Baru</h1>
    <form action="proses_tambah.php" method="POST">
   
            <div class="mb-3">
                <label for="exampleInputEmaill" class="form-label">Id jenis</label>
                <input type="text" class="form-control" name="Id_jenis" id="exampleInputEmaill" aria-describedby="emailHellp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmaill" class="form-label">Nama jenis</label>
                <input type="text" class="form-control" name="Nama_jenis" id="exampleInputEmaill" aria-describedby="emailHellp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>