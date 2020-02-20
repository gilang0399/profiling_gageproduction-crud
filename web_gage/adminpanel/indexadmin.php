<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administrator</title>
		<link rel="icon" href="../img/logo_gage.png" type="../image/png">
		<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="py-5" id="showcase">

		<nav id="main-navbar" class="navbar navbar-expand-md navbar-light bg-light fixed-top py-2 py-md-0">
	    	<div class="container">
	    		<a class="navbar-brand" href="../index.html">
		        	<span class="d-none" >GAGE Production</span>
		          	<img src="../img/logo png.png" class="small-logo d-none d-md-inline">
		          	<img src="../img/logo png.png" class="small-logo d-inline d-md-none">
	        	</a>
		    </div>

			<div class="collapse navbar-collapse" id="navbarNav">
		          	<ul class="navbar-nav ml-auto">
		            	<li class="nav-item">
		              		<a class="nav-link p-4 " href="../pesanan(view)/makalah/data_makalah.php">Makalah</a>
		            	</li>
		            	<li class="nav-item">
		              		<a class="nav-link p-4" href="../pesanan(view)/video/data_editing_video.php">Editing</a>
		            	</li>
		            	<li class="nav-item">
		              		<a class="nav-link p-4" href="../pesanan(view)/powerpoint/data_powerpoint.php">Powerpoint</a>
		            	</li>
		            	<li class="nav-item">
		              		<a class="nav-link p-4 " href="../pesanan(view)/desain/data_desain.php">Design</a>
						</li>
						<li class="nav-item">
		              		<a class="nav-link p-4 " href="../pesanan(view)/user/data_user.php">Data Pengguna</a>
		            	</li>
		            	<li class="nav-item">
		              		<a class="nav-link p-4" href="logout.php">Logout</a>
		              	</li>
		          	</ul>
		        </div>
		</nav>

	<section id="showcase" class="py-5">
		<div class="dark-overlay">
			<div class="container">
				<div class="row">
					<div class="col text-center text-white">
						<h1 class="display-3"><strong>ADMINISTRATOR</strong></h1>
						<h2 class="lead">Pengelolaan Data Pesanan</h2>					
					</div>
				</div>
				</div>
		</div>
	</section>
		<?php 
			include "../koneksi.php";
			echo "Hai, selamat datang.. Ngko nang kene ana data pesenan. nganggone link juga";
		?>	
</body>
</html>
