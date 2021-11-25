<?php
include_once("navbar.php");

?>
<?php
include "include/function.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$pesan = $_POST['pesan'];

$query = mysqli_query($konek, "INSERT INTO pendaftar VALUES('','$nama','$email','$no_hp','$alamat','$kota','$pesan')") or die(mysqli_error($konek));

if ($query) {
    echo "<h1?>Proses input berhasil, ingin lihat hasil <a href='output.php'> disini </a></h1>";
} else {
    echo "<h1>Proses Input gagal</h1>";
}

?>

<?php
include_once("footer.php");
?>