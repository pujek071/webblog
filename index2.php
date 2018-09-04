<?php session_start();
//cek apakah user sudah login
if(!isset($_SESSION['userid'])){
    die("<center><h3>Anda belum login<br>Silakan Anda Login Terlebih Dahulu </center></h3><meta http-equiv='refresh' content='3;URL=index.php' />");//jika belum login jangan lanjut..
}
//cek level user
if($_SESSION['level']!="admin"){
    die("<center><b>Maaf Anda Tidak Berhak Mengakses Halaman Ini</b></center>");//jika bukan user jangan lanjut
}
?>

<!DOCTYPE HTML>
<HTML lang='id-ID'>

<head>
<title>Web Blog Admin</title>
<link href="style/style.css" rel="stylesheet" type="text/css"/>
<link href="style/menu_slide.css" rel="stylesheet" type="text/css"/>
<link href="style/konten.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="js/datetimepicker_css.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/menu_slide.js"></script>

</head>
<body onload="sendRequest('php/frmgaleri_promo.php','center');">
<div id="wrapper">
	<div id="header">
	<img height="120" src="img/lo.png" width="280" align="LEFT" title="Citra Media">
	<div id="log">
	<a href='php/log.php?op=out' style="text-decoration:none;"><b>Sign Out</b></a>
	</div>
	</div>
		<div id="konten">
		<div class="slide">
		<?php
		include"php/menu_slide.php"
		?>
			</div>
			</div>
</div>
</body>
