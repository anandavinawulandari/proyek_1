<?php
include ("koneksi.php");

if (isset($_GET['id'])) {
	$id = htmlspecialchars($_GET["id"]);

	$sql = "delete from barang where id = '$id' ";
	$hasil = mysqli_query($kon, $sql);

	//Kondisi apakah berhasil atau tidak
	if ($hasil) {
		header("Location: barang.php");
	}
	else{
		echo "<div class = 'alert-danger'> Data Gagal Dihapus.</div>";
	}

}
?>