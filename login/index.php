<?php
/* 
    Rebuild by Maulana Rizki from Frendy
    // Don't Remove Copyright

*/
session_start();
require '../include/function.php';

if (isset($_SESSION['username'])) {
  header('location:home.php');
  exit();
}
if (isset($_POST['tombol'])) {
  if (isset($_POST['username']) and isset($_POST['password'])) {

    $username = addslashes(htmlspecialchars(trim(mysqli_real_escape_string($konek, $_POST['username']))));
    $password = addslashes(htmlspecialchars(trim(mysqli_real_escape_string($konek, $_POST['password']))));

    $REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
    $HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];

    $q = mysqli_query($konek, "SELECT * FROM user WHERE username = '$username'");
    $queryLogin = mysqli_fetch_assoc($q);

    if (empty($username) || empty($password)) {
      alert("gagal", "Masih ada data yang kosong", "login");
    } else if (strlen($username) < 5 || strlen($username) > 24) {
      alert("gagal", "Username tidak valid", "login");
    } else if (strlen($password) < 5 || strlen($password) > 24) {
      alert("gagal", "Password tidak valid", "login");
    } else if ($username !== $queryLogin['username']) {
      alert("gagal", "Username atau Password salah", "login");
    } else if ($queryLogin['status'] === "Off") {
      alert("gagal", "Akun Anda telah tersuspend", "login");
    } else if (mysqli_num_rows($q) !== 1) {
      alert("gagal", "Username atau Password salah", "login");
    } else if (password_verify($password, $queryLogin['password'])) {
      $_SESSION['username'] = $queryLogin['username'];
      header("location:../");
      exit();
    } else {
      alert("gagal", "Username atau password salah", "login");
    }
  } else {
    alert("gagal", "Username atau password salah", "login");
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login</title>

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
              <div class="card-header">
                <h4>Login</h4>
              </div>

              <div class="card-body">
                <?php if (isset($_COOKIE['gagal'])) : ?>
                  <div class="alert alert-danger">
                    <strong>Terjadi kesalahan</strong><span class="ml-2"><?= $_COOKIE['gagal']; ?></span>
                  </div>
                <?php endif ?>
                <?php if (isset($_COOKIE['berhasil'])) : ?>
                  <div class="alert alert-success">
                    <strong>Berhasil</strong><span class="ml-2"><?= $_COOKIE['berhasil']; ?></span>
                  </div>
                <?php endif ?>
                <form method="POST" action="#">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" required autofocus autocomplete="off">
                  </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required>
                  </div>

                  <div class="form-group">
                    <button type="submit" name="tombol" class="btn btn-primary btn-lg btn-block">
                      Login
                    </button>
                  </div>
                </form>
                Belum memiliki akun? <a href="../register" class="ml-2">Daftar</a>
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