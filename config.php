<?php

$host		= "localhost";
$user 		= "root";
$pw 		= "";
$dataBase 	= "pijarcamp";

$conn = mysqli_connect($host, $user, $pw, $dataBase);


if( !$conn ){
    die("<h1>KONEKSI GAGAL: " . mysqli_connect_error()."</h1>");
}


//SELECT ALL
$dataalldb = mysqli_query($conn, "SELECT * FROM produk");
//SELECT ID


//TAMBAH DATA
if (isset($_POST['submit'])) {
	$id_produk		= $_POST['id_produk'];
	$nama_produk	= $_POST['nama_produk'];
	$keterangan		= $_POST['keterangan'];
	$harga			= $_POST['harga'];
	$jumlah_produk	= $_POST['jumlah_produk'];

	$sqltambah = "INSERT INTO produk (id_produk ,nama_produk, keterangan, harga, jumlah_produk) VALUES ('$id_produk', '$nama_produk', '$keterangan', '$harga', '$jumlah_produk' )";
	$querytambah = mysqli_query($conn, $sqltambah);
	if ($querytambah) {
		header('Location: index.php?Tambah=sukses');
	}else{
		header('Location: index.php?Tambah=gagal');
	}
}


//EDIT DATA
if (isset($_POST['edit'])) {
	$id_produk		= $_POST['id_produk'];
	$nama_produk	= $_POST['nama_produk'];
	$keterangan		= $_POST['keterangan'];
	$harga			= $_POST['harga'];
	$jumlah_produk	= $_POST['jumlah_produk'];

	$sqledit = "UPDATE produk SET nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah_produk='$jumlah_produk' WHERE id_produk = '$id_produk' ";
	$queryedit = mysqli_query($conn, $sqledit);
	if ($queryedit) {
		header("Location: index.php?Edit=sukses");
	}else{
		header('Location: index.php?Edit=gagal');
	}
}

