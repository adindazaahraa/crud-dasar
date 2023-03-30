<?php 
    include 'koneksi.php';
    
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $asal_sma = $_POST['asal_sma'];
    $matakuliahfav = $_POST['matakuliahfav'];
    
    mysqli_query($koneksi,"INSERT INTO siswa VALUES(NULL,'$nrp','$nama','$jenis_kelamin','$jurusan','$email','$alamat','$no_hp','$asal_sma','$matakuliahfav')");
    
    header("location:dbsiswa.php");
?>
