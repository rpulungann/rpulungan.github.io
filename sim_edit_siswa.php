<?php
    include("koneksi.php");

   //data dari form
   $nis=$_POST['nis'];
   $nama=$_POST['nama'];
   $jenis_kelamin=$_POST['jenis_kelamin'];
   $tgl_lahir=$_POST['tgl_lahir'];
   $alamat=$_POST['alamat'];
   
   $query="UPDATE tbsiswa SET nis='$nis',nama='$nama',jenis_kelamin='$jenis_kelamin',tgl lahir='$tgl_lahir',alamat='$alamat' WHERE nis=$nis";

    
    mysqli_query($koneksi,$query) or die("gagal koneksi");
    header("location:siswa.php");
    ?>