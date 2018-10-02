<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
<form action=" " method="POST">
	<center>
	<table>
<tr>
	<td>Nim 	</td><td><input type="text" maxlength="10" name="nim"><br/></td>
</tr>
<tr>
	<td>Nama	</td><td><input type="text" maxlength = "25" name="nama"><br/></td>
</tr>
<tr>
	<td>Email	</td><td><input type="email" name="email"><br/></td>
</tr>
<tr>
	<td><input type="Submit" name="submit" value="Submit"></td>
</tr>
	</table></center>
</form>
	<?php
 	$servername = "localhost";
 	$nim = "root";
 	$nama = "";
 	$db = "pendaftaran";
 	$con = new mysqli($servername, $nim, $nama, $db);

 	if($con==false){
 		die("Koneksi Gagal" . $con->connect_error);
 	
 	}
 	if(isset($_POST['submit'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$sql = "INSERT INTO mahasiswa (nim,nama,email) values ('$nim','$nama','$email')";
	if (mysqli_query($con, $sql)){
		echo "<center>Database sudah masuk</center>";
	}else{
		echo "ERROR";
	}
	}

	?>


</body>
</html>
