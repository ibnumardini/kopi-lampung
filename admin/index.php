<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>

<?php
	session_start();
	include"koneksi.php";
	$cekuser=@$_SESSION['user'];
	$cekpass=@$_SESSION['pass'];
	if(empty($cekuser)&&empty($cekpass)){
		include"login.php";
	}else{
?>

<body>
	<div class="box">
		<a href="logout.php">KELUAR</a>
	</div>
</body>
<?php } ?>
</html>