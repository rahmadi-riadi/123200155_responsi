<?php
$konek = mysqli_connect('localhost', 'root', '', 'databasegg');
$judul = "Nama_Kamu";
$link = "LINK WEB KAMU";

date_default_timezone_set('Asia/Jakarta');
$tanggal = date('d M Y');
$waktu = date('G:i:s');

function alert($tipe, $isi, $lokasi)
{
	setcookie($tipe, $isi, time() + 2, '/');
	header("location:../" . $lokasi);
	exit();
}

function jumlahQuery($sql)
{
	$q = mysqli_query($konek, $sql);
	return mysqli_num_rows($q);
}
