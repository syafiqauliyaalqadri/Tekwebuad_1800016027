<!DOCTYPE html>
<html>
<head>
	<title>Form Mahasiswa</title>
</head>
<body>

	<table border="1" cellspacing="0" cellpadding="4" width="50%">
		<tr>
			<td>NIM</td>
			<td><?php echo $_POST['nim']; ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><?php echo $_POST['nama']; ?></td>
		</tr>
		<tr>
			<td>Jenis kelamin</td>
			<td><?php echo $_POST['jk']; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo $_POST['alamat']; ?></td>
		</tr>
		<tr>
			<td>Program studi</td>
			<td><?php echo $_POST['prodi']; ?></td>
		</tr>
		<tr>
			<td>Bahasa pemrograman yang dikuasai</td>
			<td>
				<?php

					$lang = $_POST['lang'];
					foreach ($lang as $languange) {
					 	echo "<b>$languange</b><br>";
					 } 

				?>
			</td>
		</tr>
	</table>

</body>
</html>