<?php
include("koneksi.php");

    $nis = $_GET ['nis'];
    $edit = "SELECT * FROM tbsiswa WHERE nis='$nis'";
    $query = mysqli_query($koneksi,$edit);
    $data = mysqli_fetch_array($query);
    

?>
<!DOCTYPE html>
<html>
<head>
    
    <title>From edit Siswa</title>
</head>
<body>
    <form method="POST"action="sim_edit_siswa.php">
        <table>
            <tr>
                <td width="100">NISN</td>
                <td> <input type="text" name="nis" value="<?php echo $data['nis']?>">
                </td>
            </tr>

            <tr>
                <td width="100">NAMA</td>
                <td> <input type="text" name="nama" value="<?php echo $data['nama']?>">
                </td>
            </tr>

            <tr>
                <td width="100">JENIS KELAMIN</td>
                <td> 
                    <select name="width:177 px" name="jenis kelamin"  value="<?php echo $data['jenis_kelamin']?>">
                        <option value="LK">LAKI LAKI</option>
                        <option value="PR">PEREMPUAN</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td width="100">TANGGAL LAHIR</td>
                <td> 
                     <input style="width: 172px;" type="date" name="tgl lahir" value="<?php echo $data['tgl_lahir']?>">
                </td>
            </tr>

            <tr>
                <td width="100">ALAMAT</td>
                <td> <input type="text" name="alamat" value="<?php echo $data['alamat']?>">
                </td>
            </tr>

            <tr>
                <td width="100"></td>
                <td>
                    <button type="submit">UPDATE</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

