<?php
mysql_connect('localhost','root','');
mysql_select_db('web_blog');
?>
<?php
$id = $_POST['kdkategori'];
$kategori = $_POST['kategori'];
$query = mysql_query("update kategori_artikel set kategori='$kategori' where kdkategori='$id'");
echo "<script>alert('update data Berhasil')
	location.replace('../index2.php')</script>";
?>