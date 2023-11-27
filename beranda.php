<?php
    include "config/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="js/jquery 3.7.1.js"></script>
    <script>
        function myFunction() {
        var txt;
        if (confirm("Anda Yakin Mau Keluar!")) {
            txt = "Ya!";
            header('location:../index.php');
        } else {
            txt = "Tidak!";
            header('location:../beranda.php');
        }
        document.getElementById("a").innerHTML = txt;
        }
        </script>
</head>
<body>
    <div id="navbar">
        <a href="beranda.php" style="color: white; text-decoration: none; float: left;">Perpustakaan</a>
        <a href="index.php" style="color: white; text-decoration: none; float: right; padding-right: 15px;" onclick="myFunction()">Keluar</a>
    </div>
    
    <div id="container">
        <div id="sidebar">
          <div class="menu" style="padding: 10px 0px 0px 10px;">
            <a href="beranda.php">Beranda</a><br><br>
            <a href="buku.php">Data Buku</a><br><br>
            <a href="pengunjung.php">Data Pengunjung</a><br><br>
            <a href="transaksi.php">Data Transaksi</a><br><br>
            <a href="tentang.html">Tentang</a>
          </div>
           <br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br>
        </div>
        <div id="content">
        <h2>Tampilan Data</h2><br><br>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>ISBN</th>
                    <th>Kategori</th>
                    <th>Jumlah Buku</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $ambil = mysqli_query($conn, "SELECT * FROM data_buku");
                $no = 1;
                
                while ($data = mysqli_fetch_array($ambil)) {
                    $judul = $data['judul'];
                    $pengarang = $data['pengarang'];
                    $penerbit = $data['penerbit'];
                    $tahun_terbit = $data['tahun_terbit'];
                    $isbn = $data['isbn'];
                    $kategori = $data['kategori'];
                    $jumlah_buku = $data['jumlah_buku'];

            ?>
                <tr>
                    <td><?=$no++;?></td>
                    <td><?=$judul;?></td>
                    <td><?=$pengarang;?></td>
                    <td><?=$penerbit;?></td>
                    <td><?=$tahun_terbit;?></td>
                    <td><?=$isbn;?></td>
                    <td><?=$kategori;?></td>
                    <td><?=$jumlah_buku;?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table> 
        <br><br><br><br><br><br>
        
    </div>
    </div>
    <div id="footer">
        <h2 id="copy">
            Copyright &copy; Ardi Permana (18111406) TIF RM 221MA
        </h2>
    </div>
</body>
</html>