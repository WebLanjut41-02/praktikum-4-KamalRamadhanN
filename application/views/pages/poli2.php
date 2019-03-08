<?php $this->load->view('main/header'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Pasien</title>
</head>
<body>
	<form action="<?php echo base_url()?>index.php/tubes/cek2" method="post">
		<table align="center">
			<!-- <div class="form_error">
          		<?php echo validation_errors(); ?>
        	</div>
        	<?php echo form_open(); ?>
 -->			<tr>
				<td><h2>Pemilihan Poli Yang Dituju</h2></td>
			</tr>
			<tr>
				<td><h2>=======================</h2></td>
			</tr>
			<tr>
			  	<td>
					  <label for="sel1">Pilih Poli</label>
					<div class="form-group">
					  <select class="" id="sel1" name="pilpol">
					    <option>---Pilih---</option>
					    <option>Kardiologi</option>
					    <option>Urologi</option>
					    <option>Perawatan Gigi</option>
					    <option>Perawatan Mata</option>
					    <option>Neurologi</option>
					    <option>Operasi Plastik</option>
					  </select>
					  <br>
					  <br>
					</div>
				</td>
			 </tr>
			 <tr>
			  <td><div class="form-group">
			    <label for="tglkun">Tanggal kunjungan</label>
			    <input type="date" class="form-control" id="tglkun" value="<?php echo (date('Y-m-d')); ?>" placeholder="Tanggal Kunjungan" name="tglkun">
			  </div></td>
			 </tr>
			<tr>
			  	<td>
					  <label for="sel1">Pembayaran</label>
					<div class="form-group">
					  <select class="" id="sel1" name="pembayaran">
					    <option>---Pilih---</option>
					    <option>Umum</option>
					    <option>BPJS</option>
					  </select>

			 	<br>
			 	<br>
					</div>
				</td>
			 </tr>
			 <tr>
			 	<br>
			 	<br>
				<td><input class="btn btn-primary" type="submit" name="submit" value="submit">
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