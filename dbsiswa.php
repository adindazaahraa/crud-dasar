<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP dan MySQLi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #A5D7E8;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #0B2447;
            color: white;
        }
        tr{
            background-color: #f2f2f2;
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
        h1, h2 {
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 16px;
        }
        .add-button {
            display: block;
            margin: 16px auto;
            max-width: 200px;
        }
        .edit-button, .delete-button {
            display: inline-block;
            margin: 4px;
        }
        .edit-button {
            background-color: #2196F3;
        }
        .delete-button {
            background-color: #f44336;
        }
        .edit-button:hover, .delete-button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <h2>CRUD DATA MAHASISWA</h2>
    <br/>
    <a href="tambah.php">+ TAMBAH MAHASISWA</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Email Student</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Asal SMA</th>
            <th>Matkul Favorit</th>
            <th>Action</th>
        </tr>
        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"SELECT * FROM `siswa` WHERE 1");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nrp']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['jurusan']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['no_hp']; ?></td>
                <td><?php echo $d['asal_sma']; ?></td>
                <td><?php echo $d['matakuliahfav']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a><br><br>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table>
</body>
</html>
