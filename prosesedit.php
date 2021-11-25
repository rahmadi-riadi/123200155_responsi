<?php
include_once("navbar.php");

?>

<?php
include "include/function.php";


$no_urut = $_POST['no_urut'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$pesan = $_POST['pesan'];


$query = mysqli_query($konek, "UPDATE pendaftar set nama = '$nama', email ='$email',no_hp='$no_hp',alamat = '$alamat',kota='$kota', pesan ='$pesan' where no_urut ='$no_urut'");

if ($query) {

    header("location:output.php");
} else {
    echo "Data Gagal Diubah!";
}
?>

<?php
include_once("footer.php");
?>