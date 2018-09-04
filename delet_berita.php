<?
include "koneksi.php";

	$id = $_GET['id'];
	
	$del = mysql_query("delete from tb_artikel where idArtikel=$id");
		if($del){
			echo"sukses";
			}else{
			echo "error";
			}
?>