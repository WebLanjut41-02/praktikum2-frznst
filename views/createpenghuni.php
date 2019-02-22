<!DOCTYPE html>
<html>
<head>
	<title>CREATE PENGHUNI</title>
</head>
<body>
	<h1>CREATE PENGHUNI</h1>
<form action="<?php echo base_url()?>c_user/createpenghuni" method="POST">
	<table>
		<tr><td>NO KTP</td><td>:</td><td><input type="text" name="noktp"></td></tr>
		<tr><td>Nama</td><td>:</td><td><input type="text" name="nama"></td></tr>
		<tr><td>Unit</td><td>:</td><td><input type="number" name="unit"></td></tr>
		<tr><td><input type="submit" name="Daftar" value="Daftar"></td></tr>
	</table>
</form>
</body>
</html>