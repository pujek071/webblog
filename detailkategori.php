<div id="cenber">
<?php
include "../koneksi.php";
mysql_query($query);
$id = $_GET['id'];
$query="SELECT * FROM tb_artikel where kdkategori='".$id."'";
$hasil=mysql_query($query);
$tampil=mysql_num_rows($hasil);
$data=mysql_fetch_array($hasil);
echo"<img src='admin/php/$data[file_gambar]' class='img' />";
echo"<div class='kont'><h1>$data[title]</h1>";
echo"<small>Tanggal Publikasi:$data[tanggalPub].   Penulis: $data[author].   Dibaca:$data[views]kali</small><br>";
$isi = nl2br($data[content]);
$isi = substr($isi,0,300);
$isi = substr($isi,0,strrpos($isi," "));
echo"<a id='sundaboy' href=javascript:sendRequest('php/view.php?id=$data[idArtikel]','cenber'); style='text-decoration:none'>Read More</a>";
echo "</div>
<div id='clear' style='clear:both'></div>";
?>
</div>
