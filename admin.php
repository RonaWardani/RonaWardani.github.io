<?php

session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login");
  exit;
}

require 'functions.php';

$username = isset($_SESSION["username"]) ? $_SESSION["username"] : 'Guest'; // Mendapatkan username dari session
$berita = query("SELECT * FROM berita ORDER BY tanggal DESC");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">


  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Style css -->
  <link rel="stylesheet" href="CSS/style.css" />

  <!-- Responsive css -->
  <link rel="stylesheet" href="CSS/responsive.css">

  <!-- Logo -->
  <link rel="icon" href="Assets/Img/logo.png" type="image/x-icon" />

  <!-- Fontawesome -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>


  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <title>ADMIN</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Admin Panel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-user"></i>&emsp;<?= htmlspecialchars($username); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-danger text-white" href="logout.php"
              onclick="return confirm('Apakah Anda yakin ingin logout?')">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <section id="visimisi">

    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2>
            BERITA
          </h2>

          <button class="btn btn-primary profile-btn"><a style="color: white; text-decoration: none; "
              href="upload">Upload Berita Terbaru</a></button><br>
              <div class="container mt-2">
    <a href="index.php" class="btn btn-secondary btn-back-to-index">Kembali ke Halaman Utama</a>
  </div>
        </div>
      </div>


      <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
        <?php foreach ($berita as $row): ?>
          <div class="col">
            <div class="card h-100">
              <img src="Assets/Img/gagasan/<?= $row["gambar"]; ?>" class="card-img-top" alt="Berita 1" loading="lazy">
              <div class="card-body">
                <h5 class="card-title"><?= $row["judul"]; ?></h5>
                <p class="card-text"><?= $row["deskripsi"]; ?></p>
                <button class="btn btn-primary profile-btn"><a style="color: white; text-decoration: none; "
                    href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a></button>
                <button class="btn btn-primary profile-btn"><a style="color: white; text-decoration: none; "
                    href="hapus.php?id=<?= $row["id"]; ?>"
                    onclick="return confirm('Apakah Anda Yakin Untuk Menghapus ?')">Hapus</a></button>
              </div>
              <div class="card-footer">
                <small class="text-muted"><?= $row["tanggal"]; ?></small>
              </div>
            </div>
          </div>

        <?php endforeach; ?>



      </div>
    </div>
    </div>
    </div>



    </div>




  </section>
</body>

</html>