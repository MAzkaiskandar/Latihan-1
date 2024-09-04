<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <h3>Register</h3>
    <form action="proses_tambah_pegawai.php" method="post">
        nama :
        <input type="text" name="nama_pegawai" value="" class="form-control">
        NIK : 
        <input type="text" name="NIK" value="" class="form-control">
        No_telp : 
        <input type="text" name="No_telp" value="" class="form-control">
        Gender : 
        <select name="gender" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        Jabatan:
        <input type="jabatan" name="nama_siswa" value="" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_pegawai=mysqli_query($conn,"SELECT * FROM tabel_jabatan");
            while($data_pegawai=mysqli_fetch_array($qry_pegawai)){
                echo '<option value="'.$data_pegawai['id'].'">'.$data_pegawai['nama_jabatan'].'</option>';    
            }
            ?>
        </select>
        Username : 
        <input type="text" name="username" value="" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="register" class="btn btn-primary">
    </form>

    <script>src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        </script>
</body>
</html>