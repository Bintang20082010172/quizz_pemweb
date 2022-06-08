<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pesan Alumni</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <?php
            include 'koneksi.php';
            $id = $_GET['Id_pesan'];
            $pesanalumni = mysqli_query($conn, "select * from pesanalumni where Id='$id'");
            while($row = mysqli_fetch_array($pesanalumni)){
        ?>

        <!-- formulir pendaftaran -->
        <section class="box-formulir">
            <h2><center>Pesan ALUMNI</center></h2>
            <br>
            <h3>Silahkan isi data terlebih dahulu sebelum mengisi pesan alumni</h3>
    
            <!-- bagian form -->
            <form action="update.php" method="post">
                <div class="box">
                    <table border="0" class="table-form">
    
                        <tr>
                            <td>Post</td>
                            <td>:</td>
                            <td>
                            <input type="hidden" value="<?php echo $row['Id'];?>" name="Id">
                               <input type="date" value="<?php echo $row['Post'];?>" name="Posted" class="input-control">
                            </td>
                        </tr>
    
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>
                               <input type="text" value="<?php echo $row['Name'];?>" name="Name" class="input-control" maxlength="50">
                            </td>
                        </tr>
    
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>
                               <input type="text" value="<?php echo $row['Email'];?>" name="Email" class="input-control" maxlength="75">
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td>
                               <input type="text" value="<?php echo $row['Address'];?>" name="Address" class="input-control" maxlength="75">
                            </td>
                        </tr>
    
                        <tr>
                            <td>Tahun lulus</td>
                            <td>:</td>
                            <td>
                               <input type="text" value="<?php echo $row['TahunLulus'];?>" name="TahunLulus" class="input-control" maxlength="75">
                            </td>
                        </tr>
    
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td>
                               <input type="text" value="<?php echo $row['Pekerjaan'];?>" name="Pekerjaan" class="input-control" maxlength="50">
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Pesan</td>
                            <td>:</td>
                            <td>
                              <textarea value="<?php echo $row['Message'];?>" name="Message" class="input-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                 <!-- button untuk submit data ke database -->
                                 <input type="submit" name="submit" class="btn-submit" value="Simpan">
                            </td>
                        </tr>
                      
                    </table>
                </div>
            </form>
        </section>
          
    </body>
    </html>
    <?php
}
?>

