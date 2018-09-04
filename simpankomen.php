<?php
$koneksi = mysqli_connect("localhost","root","");
mysqli_select_db($koneksi, "web_blog");


$title = $_POST['title'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$subjek = $_POST['subjek'];
$komentar = $_POST['komentar'];



//masukkan datanya ke database
$input = mysqli_query($koneksi, "INSERT INTO komentar VALUES(null,'$title','$nama','$email','$subjek','$komentar')");

if($input){
    //jika berhasil kita redirect ke halaman untuk menampilkan foto
    echo"<script>alert('Berhasil')
	location.replace('../index.php')</script>";
 
}else{
    echo "gagal";
}

?>