<?php 
include 'config.php';

//HAPUS DATA
if (isset($_GET['id_produk'])) {
	$id_produk = $_GET['id_produk'];

	$sqlhapus = "DELETE FROM produk WHERE id_produk='$id_produk'";
	$queryhapus = mysqli_query($conn, $sqlhapus);
	if ($queryhapus) {
		header("Location: index.php?Hapus=sukses");
	}else{
		header('Location: index.php?Hapus=gagal');
	}

}
