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
	<h1>Selamat Datang Di Aplikasi Kasir</h1>

	<div id="body">
		<p>Applikasi ini dibuat oleh Cloud Dark</p>

		<code><p>Beberapa fitur yang ada dalam aplikasi point of sale ini antara lain :</p>
<p>&ndash; Pengaturan data barang<br />&ndash; Manajemen data kategori<br />&ndash; Manajemen user<br />&ndash; Manajemen Supplier<br />&ndash; Manajemen penyedia barang<br />&ndash; Transaksi pembelian<br />&ndash; Transaksi penjualan eceran dan grosir<br />&ndash; Retur penjualan<br />&ndash; Report data produk<br />&ndash; Report stok barang<br />&ndash; Report penjualan<br />&ndash; Laporan penjualan per tanggal<br />&ndash; Laporan penjualan per bulan<br />&ndash; Report penjualan per tahun<br />&ndash; Report untung / rugi<br />&ndash; Grafik stok barang<br />&ndash; Grafik penjualan per bulan<br />&ndash; Grafik penjualan pertahun<br />&ndash; Lokasi Toko</p></code>

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
