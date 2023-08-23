<?php
include ("koneksi.php");

if (isset($_POST['simpan'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$jenis_barang = $_POST['jenis_barang'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$gambar = $_POST['gambar'];

	$sql = "UPDATE barang SET nama_barang = '$nama', jenis_barang = '$jenis_barang', harga = '$harga', stok = '$stok', gambar = '$gambar' WHERE id = $id";
	$query = mysqli_query($kon, $sql);

	if ($query) {
		header('Location: barang.php');
	} else{
		die("Gagal menyimpan perubahan...");
	}
}else{
	die("Akses dilarang...");
}
?>