<?php 
include 'config.php';

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Slamet Septiawan</title>
</head>
<body>
<h3>Data Produk Tersedia</h3>
<a href="form.php">+ Tambah produk</a>
<br>
<br>
<table border="1" width="60%">
	<tr>
		<td>No</td>
		<td>Nama Produk</td>
		<td>Keterangan</td>
		<td>Harga</td>
		<td>Stok</td>
		<td>Edit</td>
	</tr>
	<?php 
			$no = 1;
			while ($data = mysqli_fetch_assoc($dataalldb)) :
		?>
	<tr>
		
		<td><?php echo $no++; ?></td>
		<td><?= $data['nama_produk']; ?></td>
		<td><?= $data['keterangan']; ?></td>
		<td>Rp. <?= $data['harga']; ?></td>
		<td><?= $data['jumlah_produk']; ?>/pcs</td>
		<td><a href="form.php?id_produk=<?= $data['id_produk'] ?>">Edit</a> | <a href="hapus.php?id_produk=<?= $data['id_produk'] ?>">Hapus</a></td>
	</tr>
	<?php endwhile; ?>
</table>
</body>
</html>