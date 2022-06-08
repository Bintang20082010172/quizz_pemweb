<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman daftar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- formulir sign up -->
    <section class="box-formulir">
        <h2><center>DAFTAR AKUN</center></h2>
        <br>
    
        <!-- bagian form -->
        <form action="input_akun.php" method="post">
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>ID</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="Id" class="input-control" maxlength="5">
                        </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="Name" class="input-control" maxlength="50">
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="Address" class="input-control" maxlength="50">
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="Email" class="input-control" maxlength="50">
                        </td>
                    </tr>
                    <tr>
                        <td>Angkatan</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="Angkatan" class="input-control" maxlength="50">
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="Jurusan" class="input-control" maxlength="25">
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="username" class="input-control" maxlength="12">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="password" class="input-control" maxlength="32">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                             <!-- button untuk submit data ke database -->
                             <input type="submit" name="submit" class="btn-submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
</body>
</html>