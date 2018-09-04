<?php

$koneksi=mysql_connect("localhost","root","");
if($koneksi){
    mysql_select_db("web_blog");
}else{
    echo"Maaf,Gagal melakukan koneksi";
}
?> 