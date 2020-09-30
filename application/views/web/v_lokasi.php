<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
<link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
<link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?php echo base_url().'assets/css/4-col-portfolio.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/css/dataTables.bootstrap.min.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/dist/css/bootstrap-select.css'?>" rel="stylesheet">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}

	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
	<?php
			 $this->load->view('web/menuhome');
	?>
<div id="container">
	<h1>Lokasi Toko Kita</h1>

	<div id="body">
<center>
		<code><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253292.42716058585!2d112.57259700215688!3d-7.27559793655625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf8381ac47f%3A0x3027a76e352be40!2sSurabaya%2C%20Surabaya%20City%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1601319079353!5m2!1sen!2sid" width="1000" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</code>
</center>
		<p>@portofolio_cloud_dark</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
<!-- Footer -->
<footer>
		<div class="row">
				<div class="col-lg-12">
						<p style="text-align:center;">Copyright &copy; <?php echo date('Y'); ?> by...</p>
				</div>
		</div>
		<!-- /.row -->
</footer>
<!-- /.container -->

<!-- jQuery -->
<script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url().'assets/dist/js/bootstrap-select.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/dataTables.bootstrap.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.price_format.min.js'?>"></script>
<script type="text/javascript">
		$(document).ready(function() {
				$('#mydata').DataTable();
		} );
</script>
<script type="text/javascript">
		$(function(){
				$('.harpok').priceFormat({
								prefix: '',
								//centsSeparator: '',
								centsLimit: 0,
								thousandsSeparator: ','
				});
				$('.harjul').priceFormat({
								prefix: '',
								//centsSeparator: '',
								centsLimit: 0,
								thousandsSeparator: ','
				});
		});
</script>
</body>
</html>
