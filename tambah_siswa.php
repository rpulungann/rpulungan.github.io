<!DOCTYPE html>
<html>
<head>
    
    <title>From Tambah Siswa</title>
</head>
<body>
    <form method="POST"action="sim_tambah_siswa.php">
        <table>
            <tr>
                <td width="100">NISN</td>
                <td> <input type="text" name="nisn">
                </td>
            </tr>

            <tr>
                <td width="100">NAMA</td>
                <td> <input type="text" name="nama">
                </td>
            </tr>

            <tr>
                <td width="100">JENIS KELAMIN</td>
                <td> 
                    <select style="width: 177px;" name="jenis_kelamin">
                        <option value=""></option>
                        <option value="LK">LAKI LAKI</option>
                        <option value="PR">PEREMPUAN</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td width="100">TANGGAL LAHIR</td>
                <td> <input style="width: 172px;" type="date" name="tgl_lahir">

                </td>
            </tr>

            <tr>
                <td width="100">ALAMAT</td>
                <td> <input type="text" name="alamat">
                </td>
            </tr>

            <tr>
                <td width="100"></td>
                <td>
                    <p>
                    <button type="submit">SIMPAN</button>
                    </p>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>