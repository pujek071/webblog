<h2>HOT NEWS</h2>
							<div class="isi">
							<?php include"berita.php" ?>
							</div>
							<div id="kanan">
							<div id="popler">
							<h3>TERPOPULER</h3>
								<?php
							include "../koneksi.php";
							$q = mysql_query("select * from tb_artikel");
							$total = mysql_num_rows($q);
							$h = 2; //tampilkan banyak data
							$hal = ceil($total/$h);
							if($_GET['start'] == '') $start = 0;
							else $start = base64_decode($_GET['start']);
							$kdkategori= $_GET['kdkategori'];

							$query="select * from tb_artikel order by kdkategori = '$kdkategori' desc LIMIT $start, $h";
							$hasil=mysql_query($query);
							$jum = mysql_num_rows($hasil);
							while ($data=mysql_fetch_array($hasil)){
								echo"<img src='admin/php/$data[file_gambar]' class='img' />";
								echo"<div class='kontpop'><h1>$data[title]</h1>";
								echo"<small>Tanggal Publikasi:$data[datePub].   Penulis: $data[author].   Dibaca:$data[views]kali</small><br>";
								echo "<hr></div>
									<div id='clear' style='clear:both'></div>";
							}
							?>
							</div>
							</div>
							<div id="clear" style="clear:both"></div>