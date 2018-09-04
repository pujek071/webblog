<?php
$koneksi=mysql_connect("localhost","root","");
mysql_select_db("web_blog",$koneksi);


if($_GET[action]=='hasilcari'){
  echo "<span class=posting>&#187; Hasil Pencarian</span><br /><br />";
  $result=mysql_query("select * from tb_artikel where content like '%$_GET[kata]%'",$koneksi); 
$get_pages=mysql_num_rows($result);

if ($get_pages > 0){

  // Apabila berita ditemukan sesuai dengan kata yang diinginkan 
    echo "Ditemukan <b>$jumlah</b> berita dengan kata <b>$kata</b> :"; 
    while($r=mysql_fetch_array($result)){
    echo "<li><a id='sundaboy' href=javascript:sendRequest('php/view.php?id=$r[idArtikel]','cenber'); style='text-decoration:none'>$r[title]</a></li>";
	}      
  }
  else{
    echo "Tidak ditemukan berita dengan kata <b>$kata</b>";
  }
}
?>