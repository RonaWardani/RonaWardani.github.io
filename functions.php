<?php

//koneksi ke database

$conn = mysqli_connect("localhost", "root", "", "imsaja");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


function upload($data)
{
    global $conn;

    //ambil data dari dalam form

    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    //  $gambar = htmlspecialchars($data["gambar"]);
    $tanggal = htmlspecialchars($data["tanggal"]);

    //UPLOAD GAMBAR
    $gambar = unggah();
    if (!$gambar) {
        return false;
    }

    //query inesert data

    $query = "INSERT INTO berita 
    VALUES 
    ('','$judul','$deskripsi','$tanggal','$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function unggah()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah ada gambar yg di upload atau tidak
    if ($error === 4) {
        echo "<script>
                alert('Pilih Gambar Terebih Dahulu!');
                
            </script>";
        return false;
    }

    // cek apakah yang di upload hanya gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('Yang anda upload bukan gambar');
        
    </script>";
        return false;
    }

    //cek jika ukuran gambar terlalu besar

    if($ukuranFile > 1000000) {
        echo "<script>
        alert('Ukuran Gambar Terlau Besar');
        
    </script>";
        return false;
    }

    //lolos pengecakan upload gambar

    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    
    move_uploaded_file($tmpName, 'Assets/Img/gagasan/'. $namaFileBaru);

    return $namaFileBaru;

}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM berita WHERE id= $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{

    global $conn;

    //ambil data dari dalam form
    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
   
    $tanggal = htmlspecialchars($data["tanggal"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    
    //cek apakah user pilih gambar baru 
    if($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else{
        $gambar = unggah();
    }
   
    //query inesert data

    $query = "UPDATE berita SET 
                judul = '$judul',
                deskripsi = '$deskripsi',
                gambar = '$gambar',
                tanggal = '$tanggal'
            WHERE id = $id 
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username sudah ada atau belum

    $result = mysqli_query($conn, "SELECT  username FROM user  WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar!')
                </script>";
        return false;
    }

    //cek konfirmasi password

    if($password != $password2) {
        echo "<script>
                alert('Konfirmasi Password tidak sesuai!');
                </script>";
                return false;
    }
    



    //enkripsi pasword
    $password = password_hash($password, PASSWORD_DEFAULT);

    //TAMBAHKAN USER BARU KE DATABASE
    mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$password')");

    return mysqli_affected_rows($conn);
}




?>