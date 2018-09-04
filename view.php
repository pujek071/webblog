<div id="cenber">
<div id="cenberview">
<?php
include "../koneksi.php";
$id= $_GET['id'];
$query="UPDATE tb_artikel SET views = views + 1 WHERE idArtikel= '$id'";
mysql_query($query);
$query="SELECT * FROM tb_artikel WHERE idArtikel= '$id'";
$hasil=mysql_query($query);
$data=mysql_fetch_array($hasil);

echo"<div class='cenberkont'><div class='jud'><h2><br>$data[title]</h2>";
echo"<small>Tanggal publikasi:$data[tanggalPub].Penulis:$data[author].Dibaca:$data[views]kali</small></div>";
echo"<img src='admin/php/$data[file_gambar]' class='img' />";
$isi = nl2br($data[content]);
echo"<p>$isi</p></div><div id='clear' style='clear:both'></div>";
?>
<?php
 include"komentar.php";
?>
</div>
</div>