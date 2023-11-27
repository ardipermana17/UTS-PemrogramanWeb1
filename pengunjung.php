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
        <h2>Tampilan Data Pengunjung</h2><br><br>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Nomor Handphone</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $ambil = mysqli_query($conn, "SELECT * FROM data_pengunjung");
                $no = 1;
                
                while ($data = mysqli_fetch_array($ambil)) {
                    $nim = $data['nim'];
                    $nama = $data['nama'];
                    $kelas = $data['kelas'];
                    $no_handphone = $data['no_handphone'];
                    $alamat = $data['alamat'];
            ?>
                <tr>
                    <td><?=$no++;?></td>
                    <td><?=$nim;?></td>
                    <td><?=$nama;?></td>
                    <td><?=$kelas;?></td>
                    <td><?=$no_handphone;?></td>
                    <td><?=$alamat;?></td>
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