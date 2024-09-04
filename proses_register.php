<?php
if($_POST){
    $nama_pegawai=$_POST['nama_pegawai'];
    $NIK=$_POST['NIK'];
    $no_telp=$_POST['No_telp'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];    
    $username=$_POST['username'];
    $password= $_POST['password'];
    $id_jabatan=$_POST['id_jabatan'];
    if(empty($nama_pegawai)){
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='register.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='register.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into siswa (nama,NIK, gender, alamat, username, password,id) value ('".$nama."','".$NIK."','".$gender."','".$alamat."','".$username."','".md5($password)."','".$id."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='register.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='register.php';</script>";
        }
    }
}
?>