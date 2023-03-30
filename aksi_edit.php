<?php 
    // koneksi database
    include 'koneksi.php';
    
    // menangkap data yang di kirim dari form
    $id = $_POST['id'];
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $asal_sma = $_POST['asal_sma'];
    $matakuliahfav = $_POST['matakuliahfav'];
    
    // update data ke database
    mysqli_query($koneksi,"UPDATE `siswa` SET `id`='$id',`nrp`='$nrp',`nama`='$nama',`jenis_kelamin`='$jenis_kelamin',`jurusan`='$jurusan',`email`='$email',`alamat`='$alamat',`no_hp`='$no_hp',`asal_sma`='$asal_sma',`matakuliahfav`='$matakuliahfav' WHERE id='$id'");
    
    // mengalihkan halaman kembali ke dbsiswa.php
    header("location:dbsiswa.php"); 
?>