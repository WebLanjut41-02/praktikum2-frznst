<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<?php if ($this->session->flashdata('erlog')) {
		# code...
		echo $this->session->flashdata('erlog');;
	} ?>
<form action="<?php echo base_url()?>c_user/ceklogin" method="POST">
	<h1>Login</h1>
	<table>
		<tr><td>NIP</td><td>:</td><td><input type="text" name="nip"></td></tr>
		<tr><td><input type="submit" name="Masuk" value="Masuk"></td></tr>
	</table>
</form>
</body>
</html>