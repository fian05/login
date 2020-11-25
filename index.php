<?php
include('koneksi/index.php');
session_start();
if($_SESSION['username']=='') {
    header('location:login/');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome setelah Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	Welcome <?php echo $_SESSION['username']; ?>
	<form method="POST">
		<input type="submit" name="logout" value="LOGOUT">
	</form>

<!-- Proses Logout -->
<?php
if(isset($_POST['logout'])) {
	session_start();
	session_destroy();
	header('location:index.php');
}
?>
</body>
</html>