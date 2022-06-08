<?php
   include "koneksi.php";

    //memindahkan nilai data form ke variabel sederhana agar mudah ditulis
    $vId=$_POST["Id"];
    $vPosted=$_POST["Posted"];
    $vName=$_POST["Name"];
    $vEmail=$_POST["Email"];
    $vAddress=$_POST["Address"];
    $vTahunLulus=$_POST["TahunLulus"];
    $vPekerjaan=$_POST["Pekerjaan"];
    $vMessage=$_POST["Message"];

    $sql="insert pesanalumni set Id='$vId',
        Post='$vPosted',
        Name='$vName',
        Email='$vEmail',
        Address='$vAddress',
        TahunLulus='$vTahunLulus',
        Pekerjaan='$vPekerjaan',
        Message='$vMessage'";

    mysqli_query($conn,$sql) or die("Proses simpan ke database gagal");
    mysqli_close($conn);
    header("location:login.php");