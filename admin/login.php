<!DOCTYPE html>
<html>
<head>
	<title>LOGIN ADMINISTRATOR</title>
</head>
<link rel="stylesheet" type="text/css" href="theme.css">
<body>

<?php 

	// include "koneksi.php";
	$db = mysqli_connect("localhost","root","","kopilampung");
	session_start();
	$proses = @$_GET['proses'];
	if($proses=="login"){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$passmd = md5($pass);

		$cekdata = mysqli_query($db, "SELECT * FROM login WHERE user='$user' AND pass='$passmd'");
		$cekdata1 = mysqli_num_rows($cekdata);
		if($cekdata1!=0){
			$_SESSION['user']=$user;
			$_SESSION['pass']=$pass;

		echo "<meta http-equiv='refresh' content='1;url=index.php'>";
		}else{
			echo "Login Gagal!";
			echo "<meta http-equiv='refresh' content='1;url=?'>";
		}
	}

?>

<div class="bg">
	<center>
		<h1>Login Administrator</h1>
		<form action="?proses=login" method="post">
			<input class="inputan" type="text" name="user" placeholder="Username.."><br>
			<input class="inputan pass" type="password" name="pass" placeholder="Password.."><br>
			<input class="submitan" type="submit" name="submit" value="Submit">
		</form>
	</center>
</div>



</body>
</html>