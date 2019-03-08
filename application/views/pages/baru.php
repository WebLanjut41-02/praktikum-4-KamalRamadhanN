<?php $this->load->view('main/header'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Pasien</title>
</head>
<body>
	<form action="<?php echo base_url()?>index.php/tubes/cek" method="post">
		<table align="center">
			<div class="form_error">
          		<?php echo validation_errors(); ?>
        	</div>
        	<?php echo form_open(); ?>
			<tr>
				<td><h2>Registrasi Pasien Baru</h2></td>
			</tr>
			<tr>
				<td><h2>=======================</h2></td>
			</tr>
			<tr>
			  <td><div class="form-group">
			    <label for="nama">Nama Pasien</label>
			    <input type="text" class="form-control" value="<?php echo set_value('nama'); ?>" id="nama" placeholder="Nama Pasien" name="nama">
				<!-- <?php //echo form_error('nama'); ?> -->
			  </div></td>
			 </tr>
			 <tr>
			  <td><div class="form-group" data-validate="Tempat Lahir is Required">
			    <label for="tempatlahir">Tempat Lahir</label>
			    <input type="text" class="form-control" value="<?php echo set_value('tempatlahir'); ?>" id="tempatlahir" placeholder="Tempat Lahir" name="tempatlahir">
			    <!-- <?php //echo form_error('tempatlahir'); ?> -->
			  </div></td>
			 </tr>
			 <tr>
			  <td><div class="form-group" data-validate="Tanggal Lahir is Required">
			    <label for="tanggallahir">Tanggal Lahir</label>
			    <input type="date" class="form-control" value="<?php echo set_value('tanggallahir'); ?>" id="tgllahir" placeholder="Tanggal Lahir" name="tanggallahir">
			    <!-- <?php //echo form_error('tanggallahir'); ?> -->
			  </div></td>
			 </tr>
			 <tr>
			  <td><div class="form-group" data-validate="No Handphone is Required">
			    <label for="nohp">Nomor Handphone</label>
			    <input type="text" class="form-control" value="<?php echo set_value('nohp'); ?>" id="nohp" placeholder="Nomor Handphone Anda" name="nohp">
			    <!-- <?php //echo form_error('nohp'); ?> -->
			  </div></td>
			 </tr>
			 <tr>
				<td><input class="btn btn-primary" type="submit" name="submit" value="submit">
				<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
				</td>
			</tr>
			</table>
</form>
</body>
</html>

<?php $this->load->view('main/footer'); ?>