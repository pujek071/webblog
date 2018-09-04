<form name="input_data" enctype="multipart/form-data" action="php/upload_addartikel.php" method="post">

<fieldset>
<legend><b>FORM ENTRY ARTIKEL BERITA</b></legend> 
 <table border="0">
 <tbody>
 <tr>
		<td><div>
        
	    <input type="hidden" name="idArtikel" value=""/>
		<tr>
            <td>Title</td>
            <td>:</td>
            <td><input type="text" class="text" name="title" required="required" /></td>
        </tr>
        
		<tr>
            <td>Gambar</td>
            <td>:</td>
            <td><input type="file" name="file_foto" /></td>
        </tr>
        
        <tr>
            <td>Author</td>
            <td>:</td>
            <td><input type="text" class="text" name="author" required="required" /></td>
        </tr>
        <tr>
            <td>Tanggal Publis</td>
            <td>:</td>
			<td width="200">
			<input type="Text" class="text" name="tanggalPub" class="text" id="demo1" maxlength="25" size="25"> <a href="javascript:NewCssCal('demo1','yyyymmdd')"><img
			src="img/cal.gif" width="16" height="16" alt="Pick a date" required="required"></a></td>
        
        </tr>
        <tr>
            <td>Kategori Artikel</td>
            <td>:</td>
            <td><select class="selectfr" name="kdkategori">
		<?php
		include "koneksi.php";
		$kategori = mysql_query("SELECT DISTINCT kdkategori, kategori FROM  kategori_artikel");
		while($k = mysql_fetch_array($kategori)){
		echo "<option value='".$k['kdkategori']."'>".$k['kategori']."</option>\n";
		}
		?>
</td>
        </tr>
        <tr>
            <td>Views</td>
            <td>:</td>
            <td><input type="text" class="text" name="views"  required="required" /></td>
        </tr>
        <tr>
            <td>Content</td>
            <td>:</td>
            <td><textarea name="content" class="textar"  cols="35" rows="5"></textarea></td>
        </tr>
		<tr>
            <td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
		</tr>
		</div>
    </tbody>
</table>
</fieldset>
</form>
