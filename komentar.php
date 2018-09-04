<?php
mysql_connect('localhost','root','');
mysql_select_db('web_blog');
?>
<?php
			$x="select * from  komentar where title ";
//ambil query tampilkan
$tampil=mysql_query($x);
//tampilkan data dalam bentuk array di tabel
while ($data=mysql_fetch_array($tampil))
{
	echo $data['title'];
}

		?>
<?php
$id = $_GET['id'];
 
$query = mysql_query("select * from tb_artikel where idArtikel='$id'") or die(mysql_error());
 
$buff = mysql_fetch_array($query);
?>
<div id="center">
		<div id="centerkon">
		
		
		<h2>Komentar:</h2>
								<form name="input_data" enctype="multipart/form-data" action="php/simpankomen.php" method="post">
																	<tr>
										<td>Judul Artikel</td>
										<td>:</td></td>
										<td><input type="text"  name="title" value="<?php echo $buff['title']; ?>" id="nama" autocomplete="off" placeholder="Nama Anda"/></td>
									<tr>
								<fieldset>
								<table cellpadding="0" cellspacing="0" border="0" width="100%">
									
									
									
									<tr>
										<td>Nama</td>
										<td>:</td></td>
										<td><input type="text"  name="nama" id="nama" autocomplete="off" placeholder="Nama Anda"/></td>
									<tr>
									
									
									<tr>
										<td>Email</td>
										<td>:</td>
										<td><input type="email"  name="email"   autocomplete="off" placeholder="Email Anda" /></td>
									</tr>
									
									<tr>
										<td>Subjek</td>
										<td>:</td>
										<td><input type="text"  name="subjek"   autocomplete="off" placeholder="Subjek Anda" /></td>
									</tr>
										<tr>
										<td>Komentar</td>
										<td>:</td>
										<td><textarea name="komentar" class="textar"  cols="35" rows="5"></textarea></td>
									</tr>
										<tr>
									<td align="left" colspan="3"><input type="submit" name="submit" value="Kirim" /></td>
										</tr>
								
								</table>
								</fieldset>
								</form>
		</div>					
								
</div>