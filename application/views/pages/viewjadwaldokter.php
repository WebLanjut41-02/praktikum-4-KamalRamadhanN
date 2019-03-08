<?php $this->load->view('main/header'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<section class="section_gap team_area lite_bg">
      <div class="container">
  <h2 align="center">Jadwal Dokter</h2>
            
    <thead>
  <table class="table table-striped">
      
      <tr>
        <th>No</th>
        <th>Poliklinik</th>
        <th>Nama Dokter</th>
        <th>Jadwal</th>
        <th>Action</th>
      </tr>

      <?php 
    $no = 1;
    foreach($user as $u){ 
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $u->poliklinik ?></td>
      <td><?php echo $u->namadokter ?></td>
      <td><?php echo $u->jadwal ?></td>
      <td>
            <?php echo anchor('tubes/edit/'.$u->id,'Edit'); ?>
            <br>
            <?php echo anchor('tubes/hapus/'.$u->id,'Hapus'); ?>
      </td>

      
    </tr>
    <?php } ?>
            <a href="<?php echo base_url()?>index.php/tubes/tambah">Tambah Data</a>
  </table>

</div>
		</div>
</section>
	</form>
</body>
</html>
<?php $this->load->view('main/footer'); ?>