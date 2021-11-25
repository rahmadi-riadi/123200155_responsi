
<?php
include_once("navbar.php");

?>
<?php
include 'include/function.php';
$no_urut = $_GET['no_urut'];

$query = mysqli_query($konek, "DELETE from pendaftar where no_urut ='$no_urut'");

if ($query) {
    header("location:output.php");
} else {
    echo "Data Gagal Dihapus!";
}


?>

<?php
include_once("footer.php");
?>