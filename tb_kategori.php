<?php
mysql_connect('localhost','root','');
mysql_select_db('web_blog');
?>
<div id="centerkon">
<h3>View Kategori</h3>
<table width="539" border="1" align="center" cellpadding="1" cellspacing="0" color="#000" bgcolor="#fff">
              <tr>
				<td width="26"><div align="center"><strong>No</strong></div></td>
				<td width="264"><div align="center"><strong>Kategori</strong></div></td>
				<td width="64"><div align="center"><strong>HAPUS</strong></div></td>
				<td width="64"><div align="center"><strong>EDIT</strong></div></td>
			  </tr>
              <?
  //pilih data dari tabel siswa
$no=0;
$q = mysql_query("select * from kategori_artikel");
$total = mysql_num_rows($q);
$h = 2; //tampilkan banyak data
$hal = ceil($total/$h);
if($_GET['start'] == '') $start = 0;
else $start = base64_decode($_GET['start']);
$kdkategori= $_GET['kdkategori'];

$query="select * from kategori_artikel order by kdkategori = '$kdkategori' asc LIMIT $start, $h";
							
//ambil query tampilkan
$tampil=mysql_query($query);
$jum = mysql_num_rows($tampil);
//tampilkan data dalam bentuk array di tabel
while ($data=mysql_fetch_array($tampil))
{
?>
              <tr>
				<td bgcolor="#fff"><? echo $no=$no+1; ?></td>
				<td bgcolor="#fff"><? echo $data['kategori']; ?></td>
				<td bgcolor="#fff"><? echo "<center><a id='sundaboy' href=javascript:sendRequest('php/delet_kategori.php?id=$data[kdkategori]','center3'); title='Hapus'><img src='img/hapus.png'>  </a>" ?></td>
				<td bgcolor="#fff"><? echo "<center><a id='sundaboy' href=javascript:sendRequest('php/editkat.php?id=$data[kdkategori]','center3'); style='text-decoration:none'><img src='img/button-edit.gif'></a>"; ?></td>
                <? } ?>
				<center>
							<?php
							if($start != 0) echo "<a href=javascript:sendRequest('php/detailkatber.php?start=".base64_encode($start-$h)."','center3');>Prev</a>&nbsp;";
							for($i=0; $i<$hal; $i++){
							$x = $i * $h;
							$enc = base64_encode($x);
							if($start == $x) echo "[".($i+1)."]";
							else echo "[<a href=javascript:sendRequest('php/detailkatber.php?start=$enc','center3');>".($i+1)."</a>]&nbsp;";
							}
							if($start != $x) echo "&nbsp;<a href=javascript:sendRequest('php/detailkatber.php?start=".base64_encode($start+$h)."','center3');>Next</a>";
							?>
							</center>
			  </tr>
</div>