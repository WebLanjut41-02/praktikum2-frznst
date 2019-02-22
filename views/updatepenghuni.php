<!DOCTYPE html>
<html>
<head>
	<title>Update Penghuni</title>
</head>
<body>
<form action="<?php echo base_url()?>c_user/caripenghuni" method="POST">
	<table>
		<tr><td>Masukan No KTP penghuni</td><td><input type="text" name="pointer"></td><td>
			<input type="submit" name="cari" value="cari">
		</td></tr>
	</table>
</form>
<br>

<?php if (isset($noktp)){ ?>
	<h4>UPDATE DATA</h4>
<form action="<?php echo base_url()?>c_user/updatepenghuni" method="POST">
	<table>
		<input type="text" name="pointer" value="<?php echo $noktp ?>" hidden>
		<tr><td>NO KTP</td><td>:</td><td><input type="text" name="noktp" value="<?php echo $noktp ?>"></td></tr>
		<tr><td>Nama</td><td>:</td><td><input type="text" name="nama" value="<?php echo $namap ?>"></td></tr>	
		<tr><td>Unit</td><td>:</td><td><input type="number" name="unit" value="<?php echo $unit ?>"></td></tr>
		<tr><td><input type="submit" name="Update" value="Update"></td></tr>
	</table>
</form>
<?php } 
else {?>
	<h4><?php echo $this->session->flashdata('emptp'); ?></h4>
<?php } ?>
</body>
</html>