
	
	<h2>Dashboard</h2>
    <div class='isi'>
		<div class="left">
		<li><a href="javascript:sendRequest('php/input_berita.php','center3');" style="text-decoration:none">Input Berita</a></li>
		<li><a href="javascript:sendRequest('php/tb_artikel.php','center3');" style="text-decoration:none">View Data Berita</a></li>
		<li><a href="javascript:sendRequest('php/input_kategori.php','center3');" style="text-decoration:none">Input Kategori</a></li>
		<li><a href="javascript:sendRequest('php/tb_kategori.php','center3');" style="text-decoration:none">View Kategori</a></li>
		</div>
		<div id="center3">
		<?php
		include"php/input_berita.php"
		?>
		</div>
	</div>