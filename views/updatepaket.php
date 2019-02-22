<!DOCTYPE html>
<html>
<head>
	<title>Update Penghuni</title>
</head>
<body>
<form action="<?php echo base_url()?>c_paket/caripaket" method="POST">
	<table>
		<tr><td>Masukan Id paket</td><td><input type="text" name="pointer"></td><td>
			<input type="submit" name="cari" value="cari">
		</td></tr>
	</table>
</form>
<br>

<?php if (isset($noktp)){ ?>
	<h4>UPDATE DATA</h4>
<form action="<?php echo base_url()?>c_paket/updatepaket" method="POST">
	<table>
		<input type="text" name="pointer" value="<?php echo $id ?>" hidden>
		<tr><td>Tanggal Ambil</td><td>:</td><td><input type="date" name="tanggala" value="<?php echo $tanggala ?>"></td></tr>
		<tr><td>Isi Paket</td><td>:</td><td><input type="text" name="isi" value="<?php echo $isi ?>"></td></tr>	
		<tr><td><input type="submit" name="Update" value="Update"></td></tr>
	</table>
</form>
<?php } 
else {?>
	<h4><?php echo $this->session->flashdata('emptpk'); ?></h4>
<?php } ?>
</body>
</html>