<?php
    $host="localhost";
    $username="root";
    $password="";
    $db="webalumni";

    $conn=mysqli_connect($host, $username, $password) or die("Koneksi gagal dibangun");
    mysqli_select_db($conn,$db) or die("Database tidak dapat dibuka");
?>