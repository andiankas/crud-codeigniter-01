<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ekskul</title>
</head>
<body>

	<div class="container">
		
		<h1><?php echo $judul; ?></h1>

		<?php echo anchor('crud/input', 'Tambah Siswa'); ?>

		<br><br>

		<table border="1">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Kelas</th>
				<th>Opsi</th>
			</tr>
			<?php $i = 1; ?>
			<?php foreach ($siswa as $siswa) : ?>
			<tr>
				<td><?php echo $i++ ?></td>
				<td><?php echo $siswa->nama_siswa ?></td>
				<td><?php echo $siswa->kelas ?></td>
				<td><?php echo anchor('crud/edit/'.$siswa->id_siswa, 'Edit'); ?> | <?php echo anchor('crud/delete/'.$siswa->id_siswa, 'Delete'); ?>
					
				</td>

			</tr>
			<?php endforeach; ?>
		</table>

	</div>
	
</body>
</html>