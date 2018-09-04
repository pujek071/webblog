<?
include "koneksi.php";

	$id = $_GET['id'];
	
	$del = mysql_query("delete from kategori_artikel where kdkategori=$id");
		if($del){
			echo"sukses";
			}else{
			echo "error";
			}
?>