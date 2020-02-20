<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Admin</title>
	<link rel="icon" href="../img/logo_gage.png" type="../image/png">
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">		<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body id="makalah">
	<br/>
	<br/>
	<h1 align="center" style="color: blue;">WWW.GAGEPRODUCTION.COM</h1>
	<br/>
	<br/>
	<div class="login">
		<br/>
		<form action="proseslogin.php" method="POST" onSubmit="return validasi()">
			<div>
				<label style="color: black;"><strong>Username:</strong></label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label style="color: black;"><strong>Password:</strong></label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>		
	</div>
</body>
	<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
</script>
</html>