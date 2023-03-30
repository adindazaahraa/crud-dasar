<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #A5D7E8;
		}
		h2 {
			color: #0B2447;
			font-size: 24px;
			font-weight: bold;
			text-align: center;
			margin-top: 50px;
		}
		table {
			margin: 0 auto;
			border-collapse: collapse;
			background-color: #fff;
			box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.8);
		}
		th, td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #0B2447;
			color: #fff;
			font-weight: normal;
		}
		input[type="text"], textarea {
			padding: 5px;
			border: 1px solid #ddd;
			border-radius: 4px;
			width: 250px;
		}
		input[type="radio"] {
			margin-right: 10px;
		}
		input[type="submit"] {
			padding: 5px 10px;
			background-color: #0B2447;
			color: #fff;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #111;
		}
		a {
			text-decoration: none;
			padding: 5px 16px;
			background-color: #0B2447;
			color: white;
			border-radius: 4px;
			transition: background-color 0.3s ease;
		}
		a:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<h2>EDIT DATA MAHASISWA</h2>
	<br/>
	<a href="dbsiswa.php">KEMBALI</a>
	<br/>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM siswa WHERE id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="aksi_edit.php">
			<table>
				<tr>			
					<td>NRP</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nrp" value="<?php echo $d['nrp']; ?>">
					</td>
				</tr>
				<tr>			
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>
				<tr>			
					<td>Jenis Kelamin</td>
					<td>
						<input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if($d['jenis_kelamin']=='Laki-laki') echo 'checked'; ?>>Laki-laki
						<input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($d['jenis_kelamin']=='Perempuan') echo 'checked'; ?>>Perempuan
					</td>
				</tr>
				<tr>			
					<td>Jurusan</td>
					<td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"></td>
				</tr>
				<tr>			
					<td>Email Student</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>			
					<td>Alamat</td>
					<td><textarea name="alamat" value="<?php echo $d['alamat']; ?>"></textarea></td>
				</tr>
				<tr>			
					<td>No HP</td>
					<td><input type="text" name="no_hp" value="<?php echo $d['no_hp']; ?>"></td>
				</tr>
				<tr>			
					<td>Asal SMA</td>
					<td><input type="text" name="asal_sma" value="<?php echo $d['asal_sma']; ?>"></td>
				</tr>
				<tr>			
					<td>Matkul Favorit</td>
					<td><input type="text" name="matakuliahfav" value="<?php echo $d['matakuliahfav']; ?>"></td>
				</tr>
				<tr>			
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>	
			</table>
		</form>
		<?php 
	}
	?>
</body>
</html>