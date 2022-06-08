<?php
   include "koneksi.php";

    //memindahkan nilai data form ke variabel sederhana agar mudah ditulis
    $dId=$_POST["Id"];
    $dName=$_POST["Name"];
    $dAddress=$_POST["Address"];
    $dEmail=$_POST["Email"];
    $dAngkatan=$_POST["Angkatan"];
    $dJurusan=$_POST["Jurusan"];
    $dusername=$_POST["username"];
    $dpassword=$_POST['password'];

    $sql="insert alumni set Id='$dId',
        Name='$dName',
        Address='$dAddress',
        Email='$dEmail',
        Angkatan='$dAngkatan',
        Jurusan='$dJurusan',
        Username='$dusername',
        Password='$dpassword'";

    mysqli_query($conn,$sql) or die("Proses simpan ke database gagal");
    mysqli_close($conn);
    header("location:login.php");
?>