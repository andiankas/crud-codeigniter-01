<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Input</title>
	</head>
	<body>
		<div class="container">
			
			<h1>Tambah Siswa</h1>

			<?php echo anchor('crud/index', 'Kembali'); ?>

			<br><br>

			<?php echo form_open('crud/input_siswa'); ?>
				
				<p>
					<label for="nama">Nama</label>
					<input type="text" name="nama_siswa" id="nama">
				</p>
				<p>
					<label for="kelas">Kelas</label>
					<input type="text" name="kelas" id="kelas">
				</p>
				<p>
					<input type="submit" name="submit" value="Tambah">
				</p>
			<?php echo form_close(); ?>
		</div>
		
	</body>
</html>