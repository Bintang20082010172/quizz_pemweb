<?php
   $user = $_GET['user'];
   $datenow = date("D, d-m-y");
?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Beranda </title>
        <link rel="stylesheet" href="style.css">
    </head>
        <body>
            <section class="box-formulir">
                <header>
                    <h3><center>Beranda Pesan Alumni</center></h3>
                </header>
                <div class="box">
                        <h2>
                            <?php
                                echo "<center>Selamat datang ".$user." pada hari ".$datenow."</center>";
                            ?><br>
                        </h2><center>
                            <a href="pesanalumni.php" class="btn-submit">Input Pesan Alumni</a>
                            <a href="cetakpesan.php" class="btn-submit">Lihat Pesan Alumni</a>
                            <a href="logout.php" class="btn-submit">Log Out</a></center>
                </div>
            </section>
        </body>
</html>