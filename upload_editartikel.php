<?php
mysql_connect('localhost','root','');
mysql_select_db('web_blog');
?>
<?php
$id = $_POST['idArtikel'];
$title = $_POST['title'];
$folder = "gambar";
$tmp_name = $_FILES["file_foto"]["tmp_name"];
$name = $folder."/".$_FILES["file_foto"]["name"];
$content = $_POST['content'];
$author = $_POST['author'];
$tanggalPub = $_POST['tanggalPub'];
$kdkategori = $_POST['kdkategori'];
$view = $_POST['views'];

move_uploaded_file($tmp_name, $name);

if(empty($name))   //jika gambar kosong atau tidak di ganti
{
                $update=mysql_query("update tb_artikel set title='$title', content='$content', author='$author', tanggalPub='$tanggalPub', kdkategori='$kdkategori', views='$views' where idArtikel='$id'") or die ("gagal update ");
echo "<script>alert ('data telah di update ');document.location='../index2.php' </script> ";
}
elseif (!empty($name)) // jika gambar di ganti
{
                $update=mysql_query("update tb_artikel set title='$title', file_gambar='$name', content='$content', author='$author', tanggalPub='$tanggalPub', kdkategori='$kdkategori', views='$views' where idArtikel='$id'") or die ("gagal update gambar ");
echo "<script>alert ('data telah di update ');document.location='../index2.php' </script>";
}
?>