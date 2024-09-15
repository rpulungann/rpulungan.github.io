<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data Siswa</title>
</head>
<body>
   <h1>Data Siswa</h1>
  
    <table border="1" width="700" cellpadding="3" cellspacing="0">

    <thead>
        <tr>
        
            <th>NISN</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>AGAMA</th>
            <th>ALAMAT</th>
            <th>AKSI</th>

        </tr>
    </thead>
    <tbody>
        <?php
           
            include("koneksi.php");

            //sql
            $sql="select*from tbsiswa";
            $query=mysqli_query($koneksi,$sql)or die("gagal koneksi");

            
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data['nis'];?></td>
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['jenis_kelamin'];?></td>
            <td><?php echo $data['tgl_lahir'];?></td>
            <td><?php echo $data['alamat'];?></td>


            <td>
                <a href="edit_data.php?nis=<?php echo $data['nis']?>">
                <button >Edit</button></a>
                <a href="hapus_siswa.php?nis=<?php echo $data['nis']?>">
                <button>Hapus</button></a>
            </td>
            
        </tr>
 
        <?php
        
          }
        ?>
    </tbody>
    <p>
        <a href="tambah_siswa.php">
        <button>Tambah</button></a>
    </p>
</body>
</html>