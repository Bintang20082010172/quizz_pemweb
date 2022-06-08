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
    <!-- formulir pendaftaran -->
    <section class="box-formulir">
        <h2><center>Pesan ALUMNI</center></h2>
        <br>
        <h3>Silahkan isi data terlebih dahulu sebelum mengisi pesan alumni</h3>
    
        <!-- bagian form -->
        <form action="input_pesan.php" method="post">
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
                        <td>Post</td>
                        <td>:</td>
                        <td>
                           <input type="date" name="Posted" class="input-control">
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
                        <td>Email</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="Email" class="input-control" maxlength="75">
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="Address" class="input-control" maxlength="75">
                        </td>
                    </tr>

                    <tr>
                        <td>Tahun lulus</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="TahunLulus" class="input-control" maxlength="75">
                        </td>
                    </tr>

                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="Pekerjaan" class="input-control" maxlength="50">
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Pesan</td>
                        <td>:</td>
                        <td>
                          <textarea name="Message" class="input-control"></textarea>
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
    </section>
      
</body>
</html>