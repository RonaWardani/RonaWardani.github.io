<?php

session_start();

if(!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}


require 'functions.php';

if( isset($_POST["upload"]) ) {

    // var_dump($_POST); 
    // var_dump($_FILES);
    // die; 

    //cek data berhasil di tambahkan atau tidak

    if(upload($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil di Upload');
                document.location.href = 'admin.php';
            </script>
        
        ";
    } else {
        echo "
              <script>
                alert('Data Gagal di Upload');
                document.location.href = 'admin.php';
            </script>
        ";
    }

   
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style css -->
    <link rel="stylesheet" href="CSS/style.css"/>

    <!-- Responsive css -->
    <link rel="stylesheet" href="CSS/responsive.css">

    <!-- Logo -->
    <link rel="icon" href="Assets/Img/logo.png" type="image/x-icon"/>

    <!-- Fontawesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     
    
     <!-- Font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Upload Berita</title>
</head>
<body>

<section id="visimisi">

<div class="container">
    <div class="row">
    <div class="col-12 text-center">
      <h2>
        Upload Berita
      </h2>

      <button  class="btn btn-primary profile-btn"><a style="color: white; text-decoration: none; " href="admin">Kembali ke Admin</a></button> 
    </div>
  </div>



    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
        <div class="col" action="" method="post">
            
            <form action="" method="post" enctype="multipart/form-data">

                <div class="input-group mb-3 justify-content-center">
                <span for="judul" class="input-group-text" >Judul Berita</span>
                <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul" aria-label="Judul" required>
                </div>

                <div style="height:200px;" class="input-group mb-3">
                <span for="deskripsi" class="input-group-text">Deskripsi</span>
                <textarea type="tect" id="deskripsi" name="deskripsi" class="form-control" aria-label="With textarea" required></textarea>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" for="tanggal">Tanggal</span>
                    <input style="border-style: none;" name="tanggal" id="tanggal" type="date" required>
                </div>

                <div class="input-group mb-3">
                <label class="input-group-text" for="gambar">Gambar Berita</label>
                <input type="file" name="gambar" class="form-control" id="gambar">
                </div>
                

                <button type="submit" name="upload" class="btn btn-primary profile-btn">Upload</button> 


            </form>

            


        </div>
       
    </div>

</div>

</section>




    
</body>
</html>