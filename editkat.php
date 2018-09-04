<?php
mysql_connect('localhost','root','');
mysql_select_db('web_blog');
?>
<?php
$id = $_GET['id'];
 
$query = mysql_query("select * from kategori_artikel where kdkategori='$id'") or die(mysql_error());
 
$buff = mysql_fetch_array($query);
?>
<div id="scrol">
<form name="input_data" action="php/edit_kategori.php" method="post" enctype="multipart/form-data">
<fieldset>
		
		<legend><b>FORM EDIT KATEGORI</b></legend>
		<table border="0">
    <tbody>
		<tr>
		<td><div>
        <input type="hidden" name="kdkategori" value="<?php echo $id; ?>"/> 
		
        <tr>
            <td>Kategori</td>
            <td>:</td>
            <td><input type="text" class="text" name="kategori" value="<?php echo $buff['kategori']; ?>" required="required" /></td>
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