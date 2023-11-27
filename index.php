<?php
	session_start();

	$user = "admin";
	$pass = "admin";
	$usernameErr = $passwordErr = NULL;
	$username = $password = NULL;

	if(isset($_POST["submit"])){
				if(empty($_POST["username"])){
					$usernameErr = "required field";
				}else{
					$username = $_POST["username"];
				}
				if(empty($_POST["password"])){
					$passwordErr = "required field";
				}else{
					$password = $_POST["password"];
				}
	}			

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Login</title>
    <script type="text/javascript" src="js/jquery 3.7.1.js"></script>
    <script type="text/javascript" src="js/alert.js"></script>
    <style>
        body{
            font-family: sans-serif;
            background-image: url(img/bg-login.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
        }

        h1{
            text-align: center;
            /*ketebalan font*/
            font-weight: 300;
        }

        .tulisan_login{
            text-align: center;
            /*membuat semua huruf menjadi kapital*/
            text-transform: uppercase;
        }

        .kotak_login{
            width: 350px;
            background: whitesmoke;
            /*meletakkan form ke tengah*/
            margin: 80px auto;
            padding: 30px 20px;
        }

        label{
            font-size: 11pt;
        }

        .form_login{
            /*membuat lebar form penuh*/
            box-sizing : border-box;
            width: 100%;
            padding: 10px;
            font-size: 11pt;
            margin-bottom: 20px;
        }

        .tombol_login{
            background: #46de4b;
            color: white;
            font-size: 11pt;
            width: 100%;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
        }

        .link{
            color: blue;
            text-decoration: none;
            font-size: 10pt;
            text-align: right;
        }

        .error{
            color: red;
        }
            </style>
</head>
<body>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>

        <p><span class="error">* required field</span></p>
		<form method="post" name="form">
			<label for="user">Username:</label>
			<input type="text" id="user" name="username" class="form_login" placeholder="Username...">
            <span class="error">* <?php echo $usernameErr;?></span><br><br>
			<label for="pass">Password:</label>
			<input type="password" id="pass" name="password" class="form_login" placeholder="Password...">
            <span class="error">* <?php echo $passwordErr;?></span><br><br>
			<!-- <input type="button" class="tombol_login" value="LOGIN"> -->
            <!-- <div><button class="tombol_login"><a href="beranda.php" style="color: white; text-decoration: none;">Masuk</a></button></div> -->
            <input type="submit" name="submit" value="Masuk" class="tombol_login">
            <br><br>
            <?php
                if(isset($_POST["submit"])){
                    if($user == $username && $pass == $password){
                        $_SESSION['submit'] = 'admin';
                        header('location:beranda.php');
                        exit();
                    }else{
                        echo "<div style='color:red;'>Username atau Password Salah!</div>";
                    }
                }	
            ?>
				<div style="text-align: right;">
                <a class="link" href="register.php">Register</a>
                </div>
			
		</form>
		
	</div>

</body>
</html>