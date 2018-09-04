<?php
$koneksi = mysqli_connect("localhost","root","");
mysqli_select_db($koneksi, "web_blog");

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

//kode untuk upload ke folder gambar
move_uploaded_file($tmp_name, $name);

//masukkan datanya ke database
$input = mysqli_query($koneksi, "INSERT INTO tb_artikel VALUES(null,'$title','$content','$author','$tanggalPub','$kdkategori','$name','$views')");

if($input){
    //jika berhasil kita redirect ke halaman untuk menampilkan foto
    echo"<script>alert('Upload Gambar Berhasil')
	location.replace('../index2.php')</script>";
 
}else{
    echo "gagal";
}

?>