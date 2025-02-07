<?php
include "koneksi.php";
$artikel = tampil("SELECT * FROM table_articel") ;
$i = 1 ;
?>


<!DOCTYPE html>
<html>

<head>
	<title>KELOLA ARTIKEL</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="col-lg-12">
			<div class="page-header">
				<br>
				<h2>KELOLA ARTIKEL
					<a href="tambah.php" class="btn btn-success">Tambah Data</a>
					<a href="home.php" class="btn btn-danger">Log Out</a>
				</h2>
			</div>
			<br>
			<div>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>NO</th>
							<th>JUDUL</th>
							<th>TANGGAL</th>
							<th>DESKRIPSI</th>
							<th>GAMBAR</th>							
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($artikel as $a) : ?>
							<tr>
								<td>
									<?php echo $i ; ?>
									<?php $i++ ;?>
								</td>
								<td>
									<?php echo $a['judul']; ?>
								</td>
								<td>
									<?php echo $a['tanggal']; ?>
								</td>
								<td>
									<?php echo $a['deskripsi']; ?>
								</td>
								<td>
									<img src="foto/<?php echo $a['gambar']; ?>" width="70px" />
								</td>


								<td>
									<a href="edit.php?kode=<?php echo $a['id']; ?>" class='btn btn-warning btn-sm'>Ubah</a>
									<a href="del.php?kode=<?php echo $a['id']; ?>" onclick="return confirm('Hapus Data Ini ?')" class='btn btn-danger btn-sm'>Hapus</a>
								</td>
							</tr>
						<?php endforeach ; ?>
					</tbody>
				</table>

			</div>
		</div>
	</div>

</body>

</html>
<!-- Elseif Channel -->