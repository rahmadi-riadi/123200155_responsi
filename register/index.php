<?php

session_start();
require '../include/function.php';

if (isset($_SESSION['username'])) {
    header('location:../');
    exit();
}
if (isset($_POST['tombol'])) {
  if ($_SESSION['captcha'] === $_POST['captcha']) {
    if (isset($_POST['username']) AND isset($_POST['password']) AND isset($_POST['kpassword']) AND isset($_POST['email'])) {

      $username = addslashes(htmlspecialchars(trim(mysqli_real_escape_string($konek, $_POST['username']))));
      $email = addslashes(htmlspecialchars(trim(mysqli_real_escape_string($konek, $_POST['email']))));
      $password = addslashes(htmlspecialchars(trim(mysqli_real_escape_string($konek, $_POST['password']))));
      $kpassword = addslashes(htmlspecialchars(trim(mysqli_real_escape_string($konek, $_POST['kpassword']))));
      
      if (empty($username) OR empty($email) OR empty($password) OR empty($kpassword)) {
        alert('gagal', 'Masih ada data yang kosong','register');
      } else {
        $qUser = mysqli_query($konek, "SELECT * FROM user WHERE username = '$username'");
        
        if (strlen($username) < 6 OR strlen($username) > 24) {
          alert('gagal', 'Jumlah username min 6 dan max 24 karakter', 'register');
        } else if ($password !== $kpassword) {
          alert('gagal', 'Konfirmasi password tidak sesuai', 'register');
        } else if (strlen($password) < 6 OR strlen($password) > 24) {
          alert('gagal', 'Jumlah password min 6 dan max 24 karakter', 'register');
        } else if (mysqli_num_rows($qUser) > 0 ) {
          alert('gagal', 'Username sudah digunakan', 'register');
        } else {

          $password_hash = password_hash($password, PASSWORD_DEFAULT);
          mysqli_query($konek, "INSERT INTO user (username, password, email, tanggal_reg) VALUES ('$username','$password_hash','$email','$tanggal $waktu')");
          alert('berhasil', 'Pendaftaran berhasil silahkan login dengan akun Anda.', 'register');
        }
      }
    } else {
      alert("gagal", "Masih ada data yang kosong", "register");
    }
  } else {
    alert("gagal", "Kode captcha tidak valid", "register");
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <?php if (isset($_COOKIE['gagal'])): ?>
                <div class="alert alert-danger">
                  <strong>Terjadi kesalahan</strong><span class="ml-2"><?= $_COOKIE['gagal']; ?></span>
                </div>
                <?php endif ?>
                <?php if (isset($_COOKIE['berhasil'])): ?>
                <div class="alert alert-success">
                  <strong>Berhasil</strong><span class="ml-2"><?= $_COOKIE['berhasil']; ?></span>
                </div>
                <?php endif ?>
                <form method="POST" action="#">
                  <div class="form-group ">
                    <label>Username</label>
                    <input class="form-control" type="text" required="" name="username" autocomplete="off">
                  </div>
                  
                  <div class="form-group ">
                    <label>Email</label>
                    <input class="form-control" type="email" required="" name="email" autocomplete="off">
                  </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" required="" name="password">
                  </div>
                  
                  <div class="form-group">
                    <label>Ulangi Password</label>
                    <input class="form-control" type="password" required="" name="kpassword">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6">
                        <img src="captcha.php" alt="captcha"/>
                      </div>
                      <div class="col-md-6">
                        <input class="form-control" type="number" required="" name="captcha" placeholder="Captcha">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="tombol" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
                Sudah memiliki akun? <a href="../login" class="ml-2">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>
</body>
</html>
