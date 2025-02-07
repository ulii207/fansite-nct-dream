<?php 

	require "koneksi.php" ;
	$no = $_GET["kode"] ;
	$artikel = tampil("SELECT * FROM table_articel where id = $no")[0] ;


	if(isset($_POST["submit"])){
		if(ubah($_POST) > 0){
			echo "
				<script>
					alert('data berhasil diubah') ;
					document.location.href='index.php' ;
				</script>

			";
		}
		else{
			echo "
				<script>
					alert('data tidak berhasil diubah') ;
				
				</script>

			";
		}
	}


?>



<!DOCTYPE html>
<html>


<head>
	<title>Kelola Artikel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="container">
		<div class="col-lg-8">
			<div class="page-header">
				<br>
				<br>
				<h2>UBAH ARTIKEL</h2>
			</div>
			<br>
			<form action="" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $artikel['id'] ; ?>">
				<input type="hidden" name="gambarlama" value="<?= $artikel['gambar'] ;?>">
				<div class="form-group">
					<label>Judul</label>
					<input type="text" name="judul" class="form-control" value="<?php echo $artikel['judul']; ?>" />
				</div>

				<div class="form-group">
					<label>Tanggal</label>
					<input type="date" name="tanggal" class="form-control" value="<?php echo $artikel['tanggal']; ?>" />
				</div>
				<div class="form-group">
					<label>Deskripsi</label>
					<input type="text" name="deskripsi" class="form-control" value="<?= $artikel['deskripsi']; ?>" />
				</div>

				<div class="form-group">
					<label>FOTO</label>
					<br>
					<img src="foto/<?php echo $artikel['gambar']; ?>" width="70px" />
					<br>
					<br>
					<input type="file" name="gambar">
				</div>
				<br>

				<div class="form-group">
					<input type="submit" name="submit" value="Ubah Data" class="btn btn-primary">
					<a href="index.php" class="btn btn-warning">Batal</a>
				</div>
			</form>
		</div>
	</div>

</body>

</html>