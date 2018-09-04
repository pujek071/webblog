<?php
$koneksi = mysqli_connect("localhost","root","");
mysqli_select_db($koneksi, "web_blog");

$id = $_POST['kdkategori'];
$kategori = $_POST['kategori'];



//masukkan datanya ke database
$input = mysqli_query($koneksi, "INSERT INTO kategori_artikel VALUES(null,'$kategori')");

if($input){
    //jika berhasil kita redirect ke halaman untuk menampilkan foto
    echo"<script>alert('Berhasil')
	location.replace('../index2.php')</script>";
 
}else{
    echo "gagal";
}

?>