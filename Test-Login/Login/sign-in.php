<?php
session_start();

?>
<?php
include "../koneksi.php";
date_default_timezone_set("Asia/Jakarta");
$err = array();
if (isset($_POST['submit'])) {
  $email_user = $_POST['email_user'];
  $password = md5($_POST["password_user"]);
  $joinlogin = $_POST['jam_login'];
  $cek_user = mysqli_query($conn, "SELECT * FROM user WHERE email_user='$email_user' and password_user='$password'");
  $query = mysqli_query($conn, "UPDATE user SET data_login ='$joinlogin' WHERE email_user='$email_user' and password_user='$password'");
  $row      = mysqli_num_rows($cek_user);

  if ($row == 1) {
    $fetch_pass = mysqli_fetch_assoc($cek_user);
    $cek_pass = $fetch_pass['password_user'];
    if ($cek_pass != $password) {
      echo "<script>alert('password salah');</script>";
    } else {
      $_SESSION['log'] =  $fetch_pass;
      $_SESSION['email_user'] = $email_user;
      if ($query) {
      }
      echo "<script>alert('login Berhasil');document.location.href='../index.php';</script>";
    }
  } else {
    echo "<script>alert('email/password salah');</script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- Bootsrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <!-- My CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Form Login -->
  <div class="form">
    <form method="post">
      <input type="hidden" name="jam_login" value="<?= date('Y-m-d H:i') ?>">
      <div class="form-signin m-auto">
        <h1 class="h3 mb-3 fw-bold text-light text-center mb-3">LOGIN</h1>

        <div class="form-input mb-2">
          <label class="text-light mb-2"><i class="bi bi-envelope"></i> Email</label>
          <input type="text" class="form-control" id="floatingInput" name="email_user" placeholder="Enter Email">
        </div>
        <div class="form-input mb-2">
          <label class="text-light mb-2"> <i class="bi bi-file-lock2"></i> Password</label>
          <input type="password" class="form-control" id="floatingPassword" name="password_user" placeholder="Enter Password">
        </div>

        <a href="" class="text-light">Forgot Password</a>
        <div class="button">
          <input class="h3 fw-bold text-light text-center" type="submit" name="submit" value="LOGIN">
        </div>

        <p class="text-center text-white">Dont have a account? <a href="../Registrasi/sign-up.php" class="text-white">Sign Up Here</a></p>
      </div>
    </form>
  </div>
  <!-- End Form Login -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>