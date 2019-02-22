<!DOCTYPE html>
<html>
<head>
	<title>CREATE PAKET</title>
</head>
<body>
<form action="<?php echo base_url()?>c_paket/insert" method="POST">
	<table>
		<tr><td><h4><?php echo date('Y-m-d')?>,</h4></td><td><h4><?php echo $this->session->userdata('nama'); ?></h4></td></tr>
		<tr><td>Penerima Paket</td><td>: <select name='noktp'>
			<?php
			foreach ($data as $b) { 
			?>
			<option value="<?php echo $b['noktp']; ?>"><?php echo $b['namap']; ?></option>
		<?php } ?>
		</select></td></tr>
		<tr><td>Isi Paket</td><td>: <input type="text" name="isi"></td></tr>
		<tr><td><input type="submit" name="submit" value="submit"></td></tr>
	</table>
</form>
</body>
</html>