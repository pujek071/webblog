<div id="menu">
						<div id="menu1">
							<ul>
						<?php
include "koneksi.php";

$query="select * from kategori_artikel order by kdkategori";
$hasil=mysql_query($query);
while ($data=mysql_fetch_array($hasil)){
echo"<li><a href=javascript:sendRequest('php/detailkategori.php?id=$data[kdkategori]','cenber'); title='$data[kategori]' class='tooltip'><span title='$data[kategori]'> $data[kategori]</span></a></li>";
}
?>	
							</ul>
						</div>
				</div>