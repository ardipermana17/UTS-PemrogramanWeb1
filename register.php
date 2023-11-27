<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <style>
        body{
            font-family: sans-serif;
            background-image: url(img/bg-login.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
        }
        .kotak_register{
            width: 350px;
            height: 320px;
            background: whitesmoke;
            /*meletakkan form ke tengah*/
            margin: 80px auto;
            padding: 30px 20px;
        }
        .form_register{
            /*membuat lebar form penuh*/
            box-sizing : border-box;
            width: 100%;
            padding: 10px;
            font-size: 11pt;
            margin-bottom: 20px;
        }
        .tombol_register{
            background: #46de4b;
            color: white;
            font-size: 11pt;
            width: 100%;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
        }
        .tombol_kembali{
            background: red;
            color: white;
            font-size: 11pt;
            width: 100%;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <div class="kotak_register">
    <form action="">
        <label for="user">Username:</label>
			<input type="text" id="user" name="username" class="form_register" placeholder="Username...">
        <label for="full">Nama Lengkap:</label>
			<input type="text" id="full" name="fullname" class="form_register" placeholder="Username...">
		<label for="pass">Password:</label>
			<input type="password" id="pass" name="password" class="form_register" placeholder="Password...">
        <br><br><br>
            <!-- <div style="float: left;"><input type="submit" class="tombol_register" value="Daftar"></div> -->
            <div style="float: left;"><button class="tombol_register"><a href="index.php" style="color: white; text-decoration: none;">Daftar</a></button></div>
            <div style="float: right;"><button class="tombol_kembali"><a href="index.php" style="color: white; text-decoration: none;">Kembali</a></button></div>
    </form>
    </div>
</body>
</html>