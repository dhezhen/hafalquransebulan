<html>
<head>
	<title>Membuat Halaman Web Dinamis Dengan PHP | www.malasngoding.com</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<!-- 
Author : diki alfarabi hadi 
Site : www.malasngoding.com
-->
<div class="content">
	<header>
		<h1 class="judul">WWW.MALASNGODING.COM</h1>
		<h3 class="deskripsi">Membuat Halaman Web Dinamis Dengan PHP</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="contoh.php?page=penilaian">Penilaian</a></li>
			<li><a href="contoh.php?page=tampil">tampil</a></li>
			<li><a href="contoh.php?page=tutorial">TUTORIAL</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'penilaian':
				include "penilaian.php";
				break;
			case 'tampil':
				include "tampil_data.php";
				break;
			case 'tutorial':
				include "tutorial.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>