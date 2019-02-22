<h1>Haloo <?php echo $this->session->userdata('nama'); ?></h1>
<?php
   $this->table->set_heading('Id Paket','Tanggal Datang', 'Tanggal Ambill', 'Nama Pemilik','Unit Pemilik','Isi Paket','Karyawan Ambil');
   echo $this->table->generate($datapaket);
?>
<br>
<button ><a href="<?php echo base_url()?>c_user/createpenghuniform">Create Penghuni</a></button>
<button><a href="<?php echo base_url()?>c_user/caripenghuniform">Update Penghuni</a></button>
<button><a href="<?php echo base_url()?>c_paket/createpaketform">Create Paket</a></button>
<button><a href="<?php echo base_url()?>c_paket/caripaketform">Update Paket</a></button>
