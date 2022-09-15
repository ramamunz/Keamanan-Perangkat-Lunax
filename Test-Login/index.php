<?php
date_default_timezone_set("Asia/Jakarta");
session_start();
if (!isset($_SESSION['log'])) {
  echo "<script>alert('ANDA HARUS LOGIN DAHULU');document.location.href='Login/sign-in.php';</script>";
  exit;
}
?>

<?php
include "koneksi.php";
$email_user = $_SESSION['email_user'];
$sql = "SELECT * FROM user WHERE email_user ='$email_user'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);
?>


<!DOCTYPE html>
<html>

<head>
  <title>WELCOME</title>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <div class="form">
    <form method="post">
      <h1 class="h3 mb-3 fw-bold text-center mb-3">Selamat Datang, <?= $data['nama_user'] ?> </h1>
      <h4 class="h3 mb-3 fw-bold text-center mb-3">Login Tanggal dan Jam <?= $data['data_login'] ?> </h4>
      <input type="hidden" name="jam_keluar" value="<?= date('Y-m-d H:i') ?>">
      <div class="text-light text-center">
        <input type="submit" name="chekout" value="LOGOUT">
      </div>
    </form>

    <?php
    include "koneksi.php";
    if (isset($_POST['chekout'])) {
      $email_user = $_SESSION['email_user'];
      $keluarlogin = $_POST['jam_keluar'];
      mysqli_query($conn, "UPDATE user SET keluar_login ='$keluarlogin' WHERE email_user='$email_user'");
      echo "<script> alert('Anda sudah logout, Terima Kasih.');document.location.href='logout.php';</script>";
    }
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
</body>

</html>