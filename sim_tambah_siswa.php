<?php
    include("koneksi.php");

    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tgl_lahir=$_POST['tgl_lahir'];
    $alamat=$_POST['alamat'];

    $simpan="INSERT INTO tbsiswa(nis,nama,jenis_kelamin,agama,alamat)VALUES('$nisn','$nama','$jenis_kelamin','$tgl_lahir','$alamat')";
    mysqli_query($koneksi,$simpan)or die("gagal koneksi");

    header("location:siswa.php");
    ?>