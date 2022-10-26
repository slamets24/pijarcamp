<?php 
include 'config.php';
	

if (isset($_GET['id_produk'])) {

	$id = $_GET['id_produk'];
	$selectid = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = $id");
	$data1 = mysqli_fetch_array($selectid);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Produk</title>
</head>
<body>
<h1>Edit Data Produk</h1>
<a href="index.php">kembali</a>
<br>
<br>
<form action="config.php" method="POST">
	<table>
	<tr>
		<td>Nama Produk</td>
		<td><input type="text" name="nama_produk" value="<?= $data1['nama_produk']; ?>"></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td><input type="text" name="keterangan" value="<?= $data1['keterangan']; ?>"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" name="harga" value="<?= $data1['harga']; ?>"></td>
	</tr>
	<tr>
		<td>Stock</td>
		<td><input type="text" name="jumlah_produk" value="<?= $data1['jumlah_produk']; ?>"></td>
		<input name="id_produk" value="<?= $data1['id_produk']; ?>" hidden>
	</tr>
	<tr>
		<td><input type="submit" name="edit" value="submit"></td>
	</tr>
</table>
</form>
<?php 
}else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Produk</title>
</head>
<body>
<h1>Input Data Produk</h1>
<a href="index.php">kembali</a>
<br>
<br>
<form action="config.php" method="POST">
	<table>
	<tr>
		<td>Nama Produk</td>
		<td><input type="text" name="nama_produk"></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td><input type="text" name="keterangan"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" name="harga"></td>
	</tr>
	<tr>
		<td>Stock</td>
		<td><input type="text" name="jumlah_produk"></td>
		<input name="id_produk" hidden>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="submit"></td>
	</tr>
</table>
</form>
<?php 
}
?>
</body>
</html>