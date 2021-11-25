<?php
include_once("navbar.php");

?>
<div class="container">


    <h1 class="mt-3 mb-3">HASIL PENDAFTARAN</h1>
    <hr>
    <a href="form.php" class="btn btn-primary btn-sm">Tambah + </a>
    <table class="table table-striped">

        <tr class="table table-dark table-striped">
            <td> Nama </td>
            <td> Email </td>
            <td> Nomor HP </td>
            <td> Alamat </td>
            <td> Kota </td>
            <td> Pesan </td>
            <td> Action </td>

        </tr>
        <?php
        include "include/function.php";
        $query = mysqli_query($konek, "SELECT * FROM pendaftar ORDER BY no_urut DESC");
        while ($data = mysqli_fetch_array($query)) { ?>

            <tr>
                <td> <?php echo $data['nama']; ?></td>
                <td> <?php echo $data['email']; ?> </td>
                <td> <?php echo $data['no_hp']; ?></td>
                <td> <?php echo $data['alamat']; ?> </td>
                <td> <?php echo $data['kota']; ?></td>
                <td> <?php echo $data['pesan']; ?> </td>

                <td><a class="btn btn-warning" href=edit.php?no_urut=<?php echo $data['no_urut']; ?>>edit </a>
                    <a class="btn btn-danger" href=hapus.php?no_urut=<?php echo $data['no_urut']; ?>>hapus</a>
                </td>
            <?php }
            ?>
    </table>
</div>

<?php
include_once("footer.php");
?>