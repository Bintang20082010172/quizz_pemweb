<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id_delete = $_GET['Id_pesan'];
// query SQL untuk insert data
$query="DELETE from pesanalumni where Id='$id_delete'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:cetakpesan.php");
?>