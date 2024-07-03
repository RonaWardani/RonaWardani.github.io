<?php
session_start();
require 'functions.php';

//cek cokie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //ambil username  berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE  id= $id");
    $row =  mysqli_fetch_assoc($result);

    //cek cokie dan username
    if($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $row['username']; // Simpan username ke session
    }
  
}

if(isset($_SESSION["login"])){
    header("Location: admin.php");
    exit; 
}



if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if (mysqli_num_rows($result) === 1) {

        //cek pasword
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            //set sesion
            $_SESSION["login"] = true;
            $_SESSION["username"] = $username; // Simpan username ke session

            //cek remember me
            if(isset($_POST['remember'])){
                //buat cokie
                setcookie('id',$row['id'], time() + 60);
                setcookie('key',hash('sha256',$row['username']), time()+ 60);

            }

            header("Location: admin.php");
            exit;
        }
    }

    $error = true;
}


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
    <link href="CSS/register.css" rel="stylesheet">

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
    <title>Login</title>

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <h2 class="text-center">Login</h2>
                    <?php if (isset($error)): ?>
                        <p style="color: red; font-style:italic; ">username/password salah</p>
                    <?php endif; ?>

                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>
                        <!-- <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div> -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" required><br>
                        </div>

                        <div class="form-group form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>

                        <!-- <div class="form-group">
                            <label for="invitation_code">Invitation Code</label>
                            <input type="text" id="invitation_code" name="invitation_code" class="form-control" required>
                        </div> -->
                        <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>