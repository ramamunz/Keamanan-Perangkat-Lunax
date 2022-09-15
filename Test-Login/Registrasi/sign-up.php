<?php
include "../koneksi.php";
date_default_timezone_set("Asia/Jakarta");
$err = array();
if (isset($_POST['submit'])) {
  array_push($err);
  $password = md5($_POST["password_user"]);
  $tanggal_login = $_POST['tgl_login'];
  mysqli_query($conn, "insert into user set nama_user= '$_POST[nama_user]',
    email_user= '$_POST[email_user]', password_user = '$password', join_login = '$tanggal_login'");
  echo "<script type='text/javascript'>alert('Register_Berhasil');
        window.location='../Login/sign-in.php';
      </script>";
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrasi</title>
  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- Bootsrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <!-- My CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Form Registrasi -->
  <div class="form">
    <form method="post">
      <div class="form-signin m-auto">
        <h1 class="h3 mb-3 fw-bold text-light text-center mb-3">Registrasi</h1>

        <div class="form-input mb-2">
          <label class="text-light mb-2"><i class="bi bi-person"></i> Nama</label>
          <input type="text" class="form-control" id="floatingInput" name="nama_user" placeholder="Enter Nama">
        </div>
        <div class="form-input mb-2">
          <label class="text-light mb-2"><i class="bi bi-envelope"></i> Email</label>
          <input type="text" class="form-control" id="floatingInput" name="email_user" placeholder="Enter Email">
        </div>
        <div class="form-input mb-2">
          <label class="text-light mb-2"> <i class="bi bi-file-lock2"></i> Password</label>
          <input type="password" class="form-control" id="floatingPassword" name="password_user" placeholder="Enter Password">
        </div>
        <!-- <button class="w-100 btn btn-lg btn-primary mt-2">Sign Up</button> -->

        <div class="button">
          <input class="h3 fw-bold text-light text-center" type="submit" name="submit" value="REGISTER">
        </div>

        <!-- <div class="input-field button">
          <input type="submit" name="login" value="Login">
        </div> -->
        <p class="text-center text-white">Already have a account? <a href="../Login/sign-in.php" class="text-white">Sign In Here</a></p>
      </div>
    </form>
  </div>
  <!-- End Form Registrasi -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>