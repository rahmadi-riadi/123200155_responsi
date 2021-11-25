<?php
include_once("navbar.php");

?>

<?php
include "include/function.php";
$no_urut = $_GET['no_urut'];
$data = mysqli_query($konek, "SELECT * FROM pendaftar where no_urut ='$no_urut' ");

while ($hasil = mysqli_fetch_array($data)) {

?>
    <div class="container">
        <form method="POST" action="prosesedit.php">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $hasil['nama']; ?>">
                <input type="hidden" name="no_urut" value="<?php echo $hasil['no_urut']; ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $hasil['email']; ?>">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">Nomor HP</label>
                <input type="number" class="form-control" id="no_hp" name="no_hp" value="<?php echo $hasil['no_hp']; ?>">
            </div>

            <div class=" mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $hasil['alamat']; ?>">
            </div>

            <div class="mb-3">
                <label for="kota" class="form-label">Kota</label>
                <input type="text" class="form-control" id="kota" name="kota" value="<?php echo $hasil['kota']; ?>">
            </div>

            <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" name="pesan" value="<?php echo $hasil['pesan']; ?>"></textarea>
            </div>

            <button type="submit" class="btn btn-success" name="submit">Ubah Data</button>

        </form>

    </div>
<?php } ?>

<?php
include_once("footer.php");
?>