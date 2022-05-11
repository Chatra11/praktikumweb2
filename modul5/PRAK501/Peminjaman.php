<?php 
require('./model.php');
if (isset($_GET['id_peminjaman'])){
    hapuspeminjaman($_GET['id_peminjaman']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman </title>
</head>
<body>
    <table border = "1">
        <thead>
            <tr>
                <th>ID Peminjaman</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilpeminjaman();
            ?>
        </tbody>
    </table>
    <br></br>
    <a href="formpeminjaman.php"><button>Tambah Data Peminjaman</button></a> <br></br>
    <a href="index.php"><img src="gambar/home.png" alt="" height="50"width="50"></a>
    <a href="Buku.php"><img src="gambar/buku.png" alt="" height = "70" width = "100"></a>
    <a href="Member.php"><img src="gambar/member.png" alt="" height ="70"width = "150"></a>
    </div>
</body>
</html>