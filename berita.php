<div id="cenber">
<?php
							include "../koneksi.php";
							$q = mysql_query("select * from tb_artikel");
							$total = mysql_num_rows($q);
							$h = 4; //tampilkan banyak data
							$hal = ceil($total/$h);
							if($_GET['start'] == '') $start = 0;
							else $start = base64_decode($_GET['start']);
							$kdkategori= $_GET['kdkategori'];

							$query="select * from tb_artikel order by kdkategori = '$kdkategori' asc LIMIT $start, $h";
							$hasil=mysql_query($query);
							$jum = mysql_num_rows($hasil);
							while ($data=mysql_fetch_array($hasil)){
								echo"<img src='admin/php/$data[file_gambar]' class='img' />";
								echo"<div class='kont'><h1>$data[title]</h1>";
								echo"<small>Tanggal Publikasi:$data[tanggalPub].   Penulis: $data[author].   Dibaca:$data[views]kali</small><br>";
								$isi = nl2br($data[content]);
								$isi = substr($isi,0,300);
								$isi = substr($isi,0,strrpos($isi," "));
								echo"<a id='sundaboy' href=javascript:sendRequest('php/view.php?id=$data[idArtikel]','cenber'); style='text-decoration:none'>Read More</a>";
								echo "</div>
									<div id='clear' style='clear:both'></div>";
							}
							?>

							<center>
							<?php
							if($start != 0) echo "<a href=javascript:sendRequest('php/detailkategori.php?start=".base64_encode($start-$h)."','cenber');>Prev</a>&nbsp;";
							for($i=0; $i<$hal; $i++){
							$x = $i * $h;
							$enc = base64_encode($x);
							if($start == $x) echo "[".($i+1)."]";
							else echo "[<a href=javascript:sendRequest('php/detailkategori.php?start=$enc','cenber');>".($i+1)."</a>]&nbsp;";
							}
							if($start != $x) echo "&nbsp;<a href=javascript:sendRequest('php/detailkategori.php?start=".base64_encode($start+$h)."','cenber');>Next</a>";
							?>
							</center>
							
</div>