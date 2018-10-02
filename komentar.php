<form action=" " method="POST">
	<center>
	<table>
<tr>
	<td>Komentar<input type="textbox" name="komentar" style="width: 100%; height: 50%; color: black; background-color: skyblue; border-radius: 5px"><br/></td>
</tr>
<tr>
	<td><input type="Submit" name="submit" value="hitung"></td>
</tr>
	</table></center>
</form>
<?php
if(isset($_POST['submit'])){
	$komentar = $_POST['komentar'];
	$hasil = str_word_count($komentar);

	echo "<center>jumlah kata : $hasil</center>";
}
?>
