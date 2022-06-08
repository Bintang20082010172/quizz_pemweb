<!DOCTYPE html>
<html>
    <head>
        <title>Cetak pesan alumni</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center><h2>Pesan alumni</h2></center><br>
        <center><table border="1">
            <tr><th>No</th><th>Id</th><th>Post</th><th>Name</th><th>Email</th><th>Address</th><th>Tahun Lulus</th><th>Pekerjaan</th><th>Message</th>
            <?php
            include 'koneksi.php';
            $pesan = mysqli_query($conn, "SELECT * from pesanalumni");
            $no = 1;
            foreach ($pesan as $row) {
                echo "<tr>
            <td>$no</td>
            <td>" . $row['Id'] . "</td>
            <td>" . $row['Post'] . "</td>
            <td>" . $row['Name'] . "</td>
            <td>" . $row['Email'] . "</td>
            <td>" . $row['Address'] . "</td>
            <td>" . $row['TahunLulus'] . "</td>
            <td>" . $row['Pekerjaan'] . "</td>
            <td>" . $row['Message'] . "</td>
            <td><a href='edit.php?Id_pesan=$row[Id]'>Edit</a>
                <a href='delete.php?Id_pesan=$row[Id]'>Delete</a>
            </td>
              </tr>";
                $no++;
            }
            ?>
        </table></center><br>
        <center><a href="login.php" class="btn-submit">Kembali</a></center>
    </body>
</html>