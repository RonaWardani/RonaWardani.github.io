<?php

require 'functions.php';

$berita = query("SELECT * FROM berita ORDER BY tanggal DESC");
?>

<!doctype html>
<html lang="en">

<head>


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="description" content="IMSAJa Untuk Halmahera Tengah Yang Cemerlang">
  <meta name="keywords" content="IMSAJa, Halamhera Tengah, Ikram M Sangadji, Arief Jalaludin">
  <meta name="author" content="IMSAJa">

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

  <!-- gOOGLE SERACH CONSOLE -->

  <meta name="google-site-verification" content="GQmWnzZcRLzozOB2K7JBjjVx-UNh_adSMh0gBo3a548" />


  <title>IMSAJa</title>


</head>

<body>

  <!-- Navbar -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="Assets/Img/logo.png" alt="" width="35" class="d-inline-block align-text-top me-3 ">IMSAJa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mx-2">
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#visimisi">Visi Misi</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#profil-ikrar">Profil Ikrar</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#kebijakan">Kebijakan</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#berita">Berita</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#sosial-media">Sosial Media</a>
          </li>


        </ul>

      </div>
    </div>
  </nav>


  <!-- Hero Section -->

  <section id="hero">

    <div class="container h-100">
      <div class="row h-100">
        <div class="col-md-6 hero-tagline my-auto">
          <h1>IMSAJa</h1>
          <p> Untuk Masa Depan Halmahera Tengah
            Yang lebih Cemerlang Bersama <span class="fw-bold">IMSAJa</span></p>
          <!-- <button class="button-lg-primary">Kenali Ikrar</button> -->
          <!-- <a href="#">
                        <img src="Assets/Img/eva_arrow-ios-forward-fill.png" alt="">
                    </a> -->
        </div>
      </div>
      <img src="Assets/Img/FOTOPASLON1-transformed-removebg-preview.png" alt=""
        class="position-absolute  end-0 bottom-0 img-hero">
      <!-- <img src="Assets/Img/pemanis1.png" alt="" class="pemanis-img h-100 position-absolute top-0 start-0"> -->
    </div>


  </section>

  <!-- Visi Misi Section -->

  <section id="visimisi">

    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2>
            Visi Misi
          </h2>
          <span class="sub-title">Visi Misi Ikrar Untuk Kabupaten Halmahera Tengah</span>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-4 text-center">
          <div class="card-visimisi">
            <div class="circle-icon position-relative mx-auto">
              <img src="/Assets/Img/miskin.png" alt="" class="position-absolute top-50 start-50 translate-middle">
            </div>
            <h3 class="mt-4">Pengetasan Kemiskinan</h3>
            <p class="mt-3">Mewujudkan Kabupaten Halmahera Tengah yang sejahtera, di mana seluruh warga memiliki akses
              yang adil terhadap sumber daya, peluang ekonomi, dan pelayanan dasar, guna menghilangkan kemiskinan dan
              meningkatkan kualitas hidup</p>
          </div>
        </div>

        <div class="col-md-4 text-center">
          <div class="card-visimisi">
            <div class="circle-icon position-relative mx-auto">
              <img src="/Assets/Img/education.png" alt="" class="position-absolute top-50 start-50 translate-middle">
            </div>
            <h3 class="mt-4">Pelayanan Pendidikan</h3>
            <p class="mt-3">Mewujudkan Kabupaten Halmahera Tengah sebagai pusat pendidikan yang unggul, inklusif, dan
              berkelanjutan, dengan menghasilkan sumber daya manusia yang kompeten, kreatif, dan berakhlak mulia</p>
          </div>
        </div>

        <div class="col-md-4 text-center">
          <div class="card-visimisi">
            <div class="circle-icon position-relative mx-auto">
              <img src="/Assets/Img/kesehatan.png" alt="" class="position-absolute top-50 start-50 translate-middle">
            </div>
            <h3 class="mt-4">Pelayanan Kesehatan</h3>
            <p class="mt-3">Mewujudkan Kabupaten Halmahera Tengah sebagai daerah dengan pelayanan kesehatan yang
              berkualitas, mudah diakses, dan merata bagi seluruh lapisan masyarakat, guna meningkatkan kesejahteraan
              dan kualitas hidup</p>
          </div>
        </div>
      </div>

      <div class="row mt-5 justify-content-center">
        <div class="col-md-4 text-center">
          <div class="card-visimisi">
            <div class="circle-icon position-relative mx-auto">
              <img src="/Assets/Img/ekonomi.png" alt="" class="position-absolute top-50 start-50 translate-middle">
            </div>
            <h3 class="mt-4">Ekonomi</h3>
            <p class="mt-3">Mewujudkan Kabupaten Halmahera Tengah sebagai pusat pertumbuhan ekonomi yang inklusif,
              berdaya saing, dan berkelanjutan, dengan peningkatan kesejahteraan masyarakat melalui pemanfaatan potensi
              lokal dan inovasi.</p>
          </div>
        </div>

        <div class="col-md-4 text-center ">
          <div class="card-visimisi">
            <div class="circle-icon position-relative mx-auto">
              <img src="/Assets/Img/shop.png" alt="" class="position-absolute top-50 start-50 translate-middle">
            </div>
            <h3 class="mt-4">UMKM</h3>
            <p class="mt-3">Mewujudkan Kabupaten Halmahera Tengah sebagai pusat pengembangan UMKM yang inovatif, berdaya
              saing, dan berkelanjutan, sehingga berkontribusi signifikan terhadap pertumbuhan ekonomi daerah</p>
          </div>
        </div>

        <div class="col-md-4 text-center">
          <div class="card-visimisi">
            <div class="circle-icon position-relative mx-auto">
              <img src="/Assets/Img/lingkungan.png" alt="" class="position-absolute top-50 start-50 translate-middle">
            </div>
            <h3 class="mt-4">Lingkungan Hidup</h3>
            <p class="mt-3">Mewujudkan Kabupaten Halmahera Tengah yang bersih, hijau, dan berkelanjutan, di mana
              lingkungan hidup dilestarikan untuk generasi sekarang dan mendatang</p>
          </div>
        </div>


      </div>

    </div>


    </div>



    </div>




  </section>

  <!-- Profil -->

  <section id="profil-ikrar">
    <div class="container mt-5">

      <div class="row">
        <div class="col-12 text-center">
          <h2>
            Profil Ikrar
          </h2>
        </div>
      </div>



      <div class="row mt-3">
        <div class="col-md-6 d-flex justify-content-evenly mt-5">
          <div class="card profile-card profile-card-bupati" id="card-bupati">
            <img src="Assets/Img/images.jpeg" class="card-img-top profile-img" alt="Foto Calon Bupati" loading="lazy">
            <div class="card-body profile-body">
              <h5 class="card-title profile-title">Dr. Ikram M. Sangadji, M.Si</h5>
              <p class="card-text profile-text">Dr. Ikram M. Sangadji, M.Si saat ini menjabat sebagai PJ Bupati
                Kabupaten Halmahera Tengah</p>
              <button class="btn btn-primary profile-btn" onclick="showDetails('bupati')">Lihat Selengkapnya</button>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex justify-content-evenly mt-5">
          <div class="card profile-card profile-card-wakil" id="card-wakil">
            <img src="Assets/Img/foto-arief.jpg" class="card-img-top profile-img" alt="Foto Calon Wakil Bupati"
              loading="lazy">
            <div class="card-body profile-body">
              <h5 class="card-title profile-title">Ir. Arief Jalaludin, MT</h5>
              <p class="card-text profile-text">Ir. Arief Jalaludin, MT saat ini menjabat sebagai Kepala Dinas PUPR
                Kabupaten Halmahera Tengah</p>
              <button class="btn btn-primary profile-btn" onclick="showDetails('wakil')">Lihat Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTitle">Profil Lengkap</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" id="modalBody">
            <!-- Content will be loaded here -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>


  </section>

  <!--  Kebijakan bantuan -->

  <section id="kebijakan" class="mt-3">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2>Kebijakan Bantuan Insentif</h2>

        </div>

        <!-- row pertama -->

        <div class="row">
          <div class="col-lg-3 col-md-6  d-flex justify-content-evenly mt-5">
            <div class="card p-2 myCard" style="width: 20rem;">
              <img src="Assets/Img/ibuhamil.jpg" alt="" loading="lazy">
              <div class="card-body">
                <h4>Bantuan Ibu Hamil</h4>
                <p class="mb-4 lh-sm">Bantuan Biaya Ibu Hamil Anak 1 - 4 Sebesar Rp 1 Juta/Bulan/Ibu Hamil </p>
              </div>

              <div class="card-icon d-flex justify-content-between px-4">
                <span>
                  <img src="Assets/Img/rupiah.png" alt="">
                  <p>Rp. 1.000.000</p>
                </span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6  d-flex justify-content-evenly mt-5">
            <div class="card p-2 myCard" style="width: 20rem;">
              <img src="Assets/Img/ibu_menyusui.jpg" alt="" loading="lazy">
              <div class="card-body">
                <h4>Bantuan Ibu Menyusui</h4>
                <p class="mb-4 lh-sm">Bantuan Biaya Ibu Menyusui Anak 1 - 4 Sebesar Rp. 1 Juta/Bulan/Ibu Menyusui Selama
                  6 Bulan</p>
              </div>

              <div class="card-icon d-flex justify-content-between px-4">
                <span>
                  <img src="Assets/Img/rupiah.png" alt="">
                  <p>Rp. 1.000.000</p>
                </span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6  d-flex justify-content-evenly mt-5">
            <div class="card p-2 myCard" style="width: 20rem;">
              <img src="Assets/Img/opnamehospital.jpg" alt="" loading="lazy">
              <div class="card-body">
                <h4>Bantuan Perawatan</h4>
                <p class="mb-4 lh-sm">Bantuan Biaya Perawatan / Opname di Puskesmas dan RSUD Weda</p>
              </div>

              <!-- <div class="card-icon d-flex justify-content-between px-4">
                  <span>
                    <img src="Assets/Img/rupiah.png" alt="">
                    <p>Rp. 1.000.000</p>
                  </span>
                </div> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-6  d-flex justify-content-evenly mt-5">
            <div class="card p-2 myCard" style="width: 20rem;">
              <img src="Assets/Img/pasien.jpg" alt="" loading="lazy">
              <div class="card-body">
                <h4>Bantuan Rujukan</h4>
                <p class="mb-4 lh-sm">Bantuan Biaya Rujukan dari RSUD Weda Sebesar 15 Juta/Pasien</p>
              </div>

              <div class="card-icon d-flex justify-content-between px-4">
                <span>
                  <img src="Assets/Img/rupiah.png" alt="">
                  <p>Rp. 15.000.000</p>
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- row kedua -->

        <div class="row">
          <div class="col-lg-3 col-md-6  d-flex justify-content-evenly mt-5">
            <div class="card p-2 myCard" style="width: 20rem;">
              <img src="Assets/Img/berduka.jpg" alt="" loading="lazy">
              <div class="card-body">
                <h4>Bantuan Santunan</h4>
                <p class="mb-4 lh-sm">Bantuan Biaya Santunan Bagi Keluarga Berduka Sebesar 5 Juta</p>
              </div>

              <div class="card-icon d-flex justify-content-between px-4">
                <span>
                  <img src="Assets/Img/rupiah.png" alt="">
                  <p>Rp. 5.000.000</p>
                </span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex justify-content-evenly mt-5">
            <div class="card p-2 myCard" style="width: 20rem;">
              <img src="Assets/Img/pemakamanjenazah.png" alt="" loading="lazy">
              <div class="card-body">
                <h4>Bantuan Pemulangan <br><br>Jenazah</h4>
                <p class="mb-4 lh-sm">Bantuan Biaya Pemulangan Jenazah dari luar wilyah Halmahera Tengah</p>
              </div>

              <!-- <div class="card-icon d-flex justify-content-between px-4">
                  <span>
                    <img src="Assets/Img/rupiah.png" alt="">
                    <p>Rp. 1.000.000</p>
                  </span>
                </div> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-6  d-flex justify-content-evenly mt-5">
            <div class="card p-2 myCard" style="width: 20rem;">
              <img src="Assets/Img/siswa.jpg" alt="" loading="lazy">
              <div class="card-body">
                <h4>Bantuan Seragam</h4>
                <p class="mb-4 lh-sm">Bantuan Seragam Sekolah Gratis 3 Pasang dan Sepatu Untuk Siswa TK, SD, SMP/MTs dan
                  SMA/SMK/MA</p>
              </div>

              <div class="card-icon d-flex justify-content-between px-4">
                <span>
                  <img src="Assets/Img/seragam.png" alt="">
                  <p>3 Pasang</p>
                </span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex justify-content-evenly mt-5">
            <div class="card p-2 myCard" style="width: 20rem;">
              <img src="Assets/Img/mahasiswa.jpg" alt="" loading="lazy">
              <div class="card-body">
                <h4>Bantuan Study</h4>
                <p class="mb-4 lh-sm">Bantuan Biaya Study S1 (10 Juta), S2 (60 Juta), S3 (100 Juta) dan Kedokteran (300
                  Juta)</p>
              </div>

              <div class="card-icon d-flex justify-content-between px-4">
                <span>
                  <img src="Assets/Img/rupiah.png" alt="">
                  <p>Rp. 10.000.000 - Rp. 300.000.000</p>
                </span>
              </div>
            </div>
          </div>
        </div>

      </div>



    </div>
    <div class="text-center mt-2">
      <button class="btn btn-primary" id="showMoreButton">Lihat Kebijakan Lain</button>
      <button class="btn btn-secondary mt-2 hidden" id="hideButton">Sembuyikan Kebijakan</button>

    </div>

  </section>

  <!-- Gagasan -->



  <!-- Berita -->

  <section id="berita" class="mt-5">
    <div class="container position-relative">
      <h2 class="text-center mb-5">Berita Terbaru</h2>
      <div id="beritaCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <?php
          $totalBerita = count($berita);
          $beritaPerPage = 3; // Jumlah berita per halaman carousel
          $numPages = ceil($totalBerita / $beritaPerPage);

          for ($page = 0; $page < $numPages; $page++):
            $isActive = $page == 0 ? 'active' : '';
            ?>
            <div class="carousel-item <?= $isActive; ?>">
              <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
                <?php
                $start = $page * $beritaPerPage;
                $end = min(($start + $beritaPerPage), $totalBerita);

                for ($i = $start; $i < $end; $i++):
                  $row = $berita[$i];
                  ?>
                  <div class="col">
                    <div class="card h-100">
                      <img src="Assets/Img/gagasan/<?= $row["gambar"]; ?>" class="card-img-top" alt="Berita <?= $i + 1; ?>"
                        loading="lazy">
                      <div class="card-body">
                        <h5 class="card-title"><?= $row["judul"]; ?></h5>
                        <p class="card-text"><?= $row["deskripsi"]; ?></p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted"><?= $row["tanggal"]; ?></small>
                      </div>
                    </div>
                  </div>
                <?php endfor; ?>
              </div>
            </div>
          <?php endfor; ?>
        </div>

        <button class="carousel-control-prev position-absolute start-0 top-50 translate-middle-y" type="button"
          data-bs-target="#beritaCarousel" data-bs-slide="prev">
          <img src="Assets/Img/arrowleft.png" alt="">
        </button>

        <button class="carousel-control-next position-absolute end-0 top-50 translate-middle-y" type="button"
          data-bs-target="#beritaCarousel" data-bs-slide="next">
          <img src="Assets/Img/arrow.png" alt="">
        </button>
      </div>
    </div>
  </section>


  <!-- Kontak -->

  <section id="sosial-media">



    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
          <div class="candidate-card">
            <img src="Assets/Img/images.jpeg" class="candidate-img rounded-circle mx-auto d-block" alt="Calon Bupati">
            <div class="candidate-body text-center">
              <h5 class="candidate-title">Dr. Ikram M. Sangadji, M.Si</h5>
              <p class="sosmed-text">Sosial Media</p>
              <div class="social-icons">
                <a href="https://facebook.com/profile.php?id=100012791892433&locale=id_ID" target="_blank"><i
                    class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-x"></i></a>
                <a href="https://www.instagram.com/ikisangadji30/" target="_blank"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="candidate-card">
            <img src="Assets/Img/foto-arief.jpg" class="candidate-img rounded-circle mx-auto d-block"
              alt="Calon Wakil Bupati">
            <div class="candidate-body text-center">
              <h5 class="candidate-title">Ir. Arief Jalaludin, MT</h5>
              <p class="sosmed-text">Sosial Media</p>
              <div class="social-icons">
                <a href="https://web.facebook.com/profile.php?id=61559205863620" target="_blank"><i
                    class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-x"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </section>

  <footer class="d-flex align-items-center mt-5 position-relative">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-7 d-flex align-items-center justify-content-lg-start  justify-content-center">
            <img src="Assets/Img/logo.png" alt="" width="40">
            <a href="admin" class="ms-2">IMSAJa</a>
          </div>

          <div class="col-md-5 d-flex justify-content-evenly ">
            <a href="#visimisi">Visi Misi</a>
            <a href="#profil-ikrar">Profil Ikrar </a>
            <a href="#kebijakan">Kebijakan</a>
            <a href="#berita">Berita</a>
            <a href="#sosial-media">Sosial Media</a>

          </div>
        </div>

        <div class="row position-absolute copyright start-50 translate-middle">
          <div class="col-md-12">

            <p> Copyright PT Rona Wardani Teknologi 2024</p>
          </div>
        </div>

        
      </div>
    </div>
  </footer>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->


  <!-- jQuery and Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  <script src="JS/scripts.js"></script>
</body>

</html>