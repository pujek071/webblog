<?php
mysql_connect('localhost','root','');
mysql_select_db('web_blog');
?>
<?php
$id = $_GET['id'];
 
$query = mysql_query("select * from tb_artikel where idArtikel='$id'") or die(mysql_error());
 
$buff = mysql_fetch_array($query);
?>
<div id="scrol">
<form name="input_data" action="php/upload_editartikel.php" method="post" enctype="multipart/form-data">
<fieldset>
		
		<legend><b>FORM EDIT ARTIKEL</b></legend>
		<table border="0">
    <tbody>
		<tr>
		<td><div>
        <input type="hidden" name="idArtikel" value="<?php echo $id; ?>"/> 
		<tr>
            <td>Title</td>
            <td>:</td>
            <td><input type="text" class="text" name="title" value="<?php echo $buff['title']; ?>" required="required" /></td>
        </tr>
        
		<tr>
            <td>Gambar</td>
            <td>:</td>
            <td> <img src="php/<?php echo $buff['file_gambar'];?>" height='50' width='50' border='1'/></td>
        </tr>
		<tr>
		<td>Pilih File</td>
		<td>:</td>
		<td><input type="file"  name="file_foto" /></td>
		</tr>
        <tr>
            <td>Author</td>
            <td>:</td>
            <td><input type="text" class="text" name="author" value="<?php echo $buff['author']; ?>" required="required" /></td>
        </tr>
        <tr>
            <td>Tanggal Publis</td>
            <td>:</td>
            <td><input type="text" class="text" name="tanggalPub" value="<?php echo $buff['tanggalPub']; ?>" required="required" /></td>
        </tr>
        <tr>
            <td>Kategori Artikel</td>
            <td>:</td>
            <td><select  class="selectfr" name="kdkategori" value="<?php echo $buff['kdkategori']; ?>">
		<?php
		include "koneksi.php";
		$kategori = mysql_query("SELECT DISTINCT kdkategori,kategori FROM kategori_artikel");
		while($k = mysql_fetch_array($kategori)){
		echo "<option value='".$k['kdkategori']."'>".$k['kategori']."</option>\n";
		}
		?>
</td>
        </tr>
        <tr>
            <td>Views</td>
            <td>:</td>
            <td><input type="text" class="text" name="views" value="<?php echo $buff['views']; ?>" required="required" /></td>
        </tr>
        <tr>
            <td>Content</td>
            <td>:</td>
            <td><textarea class="textar" name="content"  cols="35" rows="5"><?php echo $buff['content']; ?></textarea></td>
        </tr>
		<tr>
            <td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
		</tr>
		</div>
				</td>
    </tbody>
</table>
		</fieldset>
</div>