<?php
include "koneksi.php";

// if ($koneksi->connect_error) {
//     die("Koneksi database gagal : ". $koneksi->connect_error);
// }

if (isset($_POST['input'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    //ambil data dari database tabel login dengan username dan passsowrd
    $data = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    // $userData = mysqli_query($koneksi,"SELECT * FROM login_user WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($data)) {
      $_SESSION["login"] = true;
      echo "Login berhasil";
      header("Location: index.php");
    } else {
      echo "<script>
      alert('Login gagal');
      </script>";
    }
  }
  ?>


<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justifiy-content-center">
            <div class="box col-md-4">
                <h3 class="mb-4">Halaman Login</h3>
                <form method="post" action="login.php">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                        <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="input" id="input">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

