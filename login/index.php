<?php include('../koneksi/index.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
	<div class="formlogin">
		<h2>LOGIN</h2>
		<form method="POST" onSubmit="return cek()">
	        <p>Username :</p>
	        <input type="text" name="username" id="username">
	        <p>Password :</p>
			<input type="password" name="password" id="password">
			<p> </p>
	        <input type="submit" name="login" class="tombollogin" value="LOGIN">
        </form>
    </div>

<!-- Proses Login -->
<?php
if(isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = mysqli_query($db, "SELECT * from admin where username='$username' and password='$password'");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		session_start();
		$_SESSION['username'] = $username;
		header("location:../");
	}else{
		header("location:index.php?login=gagal");	
	}
}
?>

<!-- Script Input -->
<script type="text/javascript">
function cek() {
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;		
	if (username != "" && password !="") {
		return true;
	}else if (username != "") {
		alert('Password harus di isi !');
		return false;
	}else if (password != "") {
		alert('Username harus di isi !');
		return false;
	}else {
		alert('Username dan Password harus di isi !');
		return false;
	}
}
</script>
</body>
</html>