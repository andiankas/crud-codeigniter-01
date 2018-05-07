<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Input</title>
	</head>
	<body>
		<div class="container">
			
			<h1>Edit Siswa</h1>

			<?php echo anchor('crud/index', 'Kembali'); ?>

			<br><br>

			<?php echo form_open('crud/edit_siswa'); ?>

			<?php echo form_hidden('id', $this->uri->segment(3)); ?>
			
				<p>
					<label for="nama">Nama</label>
					<input type="text" name="nama_siswa" id="nama" value="<?php echo $update['nama_siswa']  ?>">
				</p>
				<p>
					<label for="kelas">Kelas</label>
					<input type="text" name="kelas" id="kelas" value="<?php echo $update['kelas'] ?>">
				</p>
				<p>
					<input type="submit" name="submit" value="Tambah">
				</p>
		
			<?php echo form_close(); ?>
		</div>
		
	</body>
</html>