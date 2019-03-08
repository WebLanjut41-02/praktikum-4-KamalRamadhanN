<?php $this->load->view('main/header'); ?><!-- 

<?php //echo $this->session->userdata("norkm");?> -->

<!DOCTYPE html>
<html>
<head>
	<title>No.Antrian</title>
</head>
<body>
	<form action="">
			<section class="section_gap team_area lite_bg">
				<div class="container">

				<div><h1>No.Antrian<h1></div><br>
				
					<div>
							<?php echo $this->session->userdata("norkm");?>			
					</div>
	</section>
	</form>
</body>
</html>

<?php $this->load->view('main/footer'); ?>