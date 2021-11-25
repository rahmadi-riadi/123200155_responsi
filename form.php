<?php
include_once("navbar.php");

?>

<div class="container">
    <h1 class="mt-3 mb-3">FORM PENDAFTARAN</h1>

    <form method="POST" action="input.php">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>

        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">Nomor HP</label>
            <input type="number" class="form-control" id="no_hp" name="no_hp" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>

        <div class="mb-3">
            <label for="kota" class="form-label">Kota</label>
            <input type="text" class="form-control" id="kota" name="kota" required>
        </div>

        <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" name="pesan"></textarea>
        </div>

        <button type="submit" class="btn btn-success" name="submit">Submit</button>
    </form>
</div>

<?php
include_once("footer.php");
?>