<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$uId=$_POST["Id"];
$uPosted=$_POST["Posted"];
$uName=$_POST["Name"];
$uEmail=$_POST["Email"];
$uAddress=$_POST["Address"];
$uTahunLulus=$_POST["TahunLulus"];
$uPekerjaan=$_POST["Pekerjaan"];
$uMessage=$_POST["Message"];

// query SQL untuk insert data
mysqli_query($conn,"update pesanalumni set Post='$uPosted',
Name='$uName',
Email='$uEmail',
Address='$uAddress',
TahunLulus='$uTahunLulus',
Pekerjaan='$uPekerjaan',
Message='$uMessage' where Id='$uId'");

header("location:cetakpesan.php");