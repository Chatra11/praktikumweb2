<?php
session_name("login");
session_start();
if (!isset($_SESSION['login']))
{
	header("location: errorpage.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Perpustakaan</title>
</head>
<body>
    <h2 style ="text-align:center;">Selamat Datang Di SIEMPUS</h2>
    <br></br>
    <table style = "margin-left:auto;margin-right:auto;">
        <tr>
            <th>Buku</th>
            <th>Member</th>
            <th>Peminjaman</th>
        </tr>
        <tr>
            <td><a href="Buku.php"><img src="gambar/buku.png" alt="" border = 3 height= 170 width = 200></a></td>
            <td><a href="Member.php"><img src="gambar/member.png" alt=""  border = 3 height= 170 width = 300></a></td>
            <td><a href="Peminjaman.php"><img src="gambar/pinjam.png" alt="" border = 3 height = 170 width = 170 ></a></td>
        </tr>
        <tr>
            <td></td>
            <td><a href="logout.php">logout</a></td>
        </tr>
    </table>
</body>
</html>