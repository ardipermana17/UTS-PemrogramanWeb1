<?php
    include "config/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Transaksi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="navbar">
        <a href="beranda.php" style="color: white; text-decoration: none; float: left;">Perpustakaan</a>
        <a href="index.php" style="color: white; text-decoration: none; float: right; padding-right: 15px;">Keluar</a>
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
        <br><br><br><br><br><br><br><br>
        </div>
        <div id="content">
        <h2>Tampilan Data Transaksi</h2><br><br>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Buku</th>
                    <th>ID Pengunjung</th>
                    <th>tanggal</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $ambil = mysqli_query($conn, "SELECT * FROM data_transaksi");
                $no = 1;
                
                while ($data = mysqli_fetch_array($ambil)) {
                    $id_buku = $data['id_buku'];
                    $id_pengunjung = $data['id_pengunjung'];
                    $tanggal = $data['tanggal'];
                    $keterangan = $data['keterangan'];
            ?>
                <tr>
                    <td><?=$no++;?></td>
                    <td><?=$id_buku;?></td>
                    <td><?=$id_pengunjung;?></td>
                    <td><?=$tanggal;?></td>
                    <td><?=$keterangan;?></td>
                    <td>
                        <button type="button" style="background-color: blue;">
                            Ubah
                        </button>
                        <button type="button" style="background-color: red;">
                            Hapus
                        </button>
                    </td>
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