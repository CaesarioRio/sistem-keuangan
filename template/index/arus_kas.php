<!DOCTYPE html>
<!-- Template Name: Packet - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
	<title>Packet - Responsive Admin Template</title>
	<?php include 'include/main-head.php'; ?>
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="assets/css/rio.css">
</head>
<!-- end: HEAD -->
<body>
<div id="app" class="lyt-2">
	<!-- sidebar -->
	<?php include 'include/sidebar.php'; ?>
	<!-- / sidebar -->
	<div class="app-content">
		<!-- start: TOP NAVBAR -->
		<?php include 'include/nav-header.php'; ?>
		<!-- end: TOP NAVBAR -->
		<div class="main-content" >
			<div class="wrap-content container" id="container">
				<!-- start: BREADCRUMB -->
				<div class="breadcrumb-wrapper">
					<a href="index.php"><h4 class="mainTitle no-margin">Dashboard</h4></a>
					<h5>Welcome to Beon Accounting</h5>
				</div>
				<!-- end: BREADCRUMB -->
				<!-- start: FIRST SECTION -->
				
				<div class="container-fluid padding-left-30 padding-right-30 padding-top-30">
					<div class="row">
						<div class="col-sm-3 col-xs-3">
							<h5 class="over-title margin-bottom">Laporan <span class="text-bold"> Arus Kas </span></h5>
						</div>
						<div class="col-sm-3 col-xs-0"></div>
						<div class="pull-right">
							Sort By
							<div class="btn-group">
								<button type="button" class="btn btn-light-grey">
									Tanggal Input
								</button>
								<button type="button" class="btn btn-light-grey dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<span class="fa fa-angle-down"></span>
								</button>
								<ul role="menu" class="dropdown-menu dropdown-light pull-right">
									<li>
										<a href="#"> Action </a>
									</li>
									<li>
										<a href="#"> Another action </a>
									</li>
									<li>
										<a href="#"> Something else here </a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12 pull-right margin-bottom-20">
							<span class="input-icon input-icon-right">
								<input type="text" placeholder="Search..." id="form-field-17" class="form-control">
								<i class="fa fa-search"></i>
							</span>
						</div>
					</div>
					<div class="row margin-bottom">
						<div class="panel panel-white">
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="sample-table-1"
										<thead>
											<tr class="warning">
												<th >ARUS KAS DARI AKTIFITAS OPERASI</th>
												<th></th>
												<th></th>
												<th></th>
												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><input type="text" class="form-control no-border"><b>SUMBER :</b></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border" value="Piutang Penjualan"></td>
												<td><input type="text" class="form-control no-border" value="-"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											
												
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border" value="Pembayaran cadangan Kerugian Penjualan"></td>
												<td><input type="text" class="form-control no-border" value="-"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border" value="Refund Biaya Langsung"></td>
												<td><input type="text" class="form-control no-border" value="-"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border" value="Uang Muka Penjualan"></td>
												<td><input type="text" class="form-control no-border" value="34.000"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border" value="Penyusuaian saldo Bank "></td>
												<td><input type="text" class="form-control no-border" value="336.489.980"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border" value="Piutang Lain-lain "></td>
												<td><input type="text" class="form-control no-border" value="-"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>

												
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border" value="336.523.980"></td>
												<td><input type="text" class="form-control no-border"></td>
												
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border"><b>PENGGUNAAN<b></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border" value="Pembelian TLD RC"></td>
												<td><input type="text" class="form-control no-border" value="-"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border" value="Pembelian ID RC"></td>
												<td><input type="text" class="form-control no-border" value="-"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border" value="Pembelian Domain Webnic "></td>
												<td><input type="text" class="form-control no-border" value="-"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border"><b>ARUS KAS BERSIH UNTUK OPERASI</b></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border" value="441.071.024"></td>
												<td><input type="text" class="form-control no-border"></td>
												
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"value="104.547.044"></td>
											</tr>
												<tr>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr class="warning">
												<td><input type="text" class="form-control no-border"><b>ARUS KAS DARI AKTIFITAS INVESTASI</b></td>
												<td><input type="text" class="form-control no-border"></td>	
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border"><b>SUMBER :</b></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border " value="Penjualan AKtiva Tetap"></td>
												<td><input type="text" class="form-control no-border" value="-"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border"><b>PENGGUNAAN<b></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border " value="Uang Muka Pembelian Aktiva Tetap"></td>
												<td><input type="text" class="form-control no-border" value="26.027.000"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border " value="Pembelian Perangkat(Altive tetap) "></td>
												<td><input type="text" class="form-control no-border" value="-"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border "></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border" value="26.042.000"></td>
												<td><input type="text" class="form-control no-border"></td>
												
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border "><b>ARUS KAS BERSIH UNTUK INVESTASI</b></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border" value="26.042.000"></td>
												
											</tr>
											<tr class="warning">
												<td><input type="text" class="form-control no-border"><b>ARUS KAS DARI AKTIFITAS PENDANAAN</b></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border"><b>SUMBER :</b></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td> 
												
											</tr>
											
											<tr>
												<td><input type="text" class="form-control no-border" VALUE="Hutang Bank (PRK)"></td>
												<td><input type="text" class="form-control no-border" value="387.480.818"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border" VALUE="Hutang Kartu Kredit"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border" value="417.465.764"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border"><b>PENGGUNAAN<b></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border" VALUE="Setoran Dalam Perjalan"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border" VALUE="Bon"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border" VALUE="Piutang Direksi"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
									
											<tr>
												<td><input type="text" class="form-control no-border"><b>ARUS KAS DARI AKTIFITAS PENDANAAN</b></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"value="283.686.927"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"  value="283.686.927"></td>
											</tr>
												<tr>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
											</tr>
												<tr>
												<td><input type="text" class="form-control no-border"><b>JUMLAH ARUS KAS BERSIH</b></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border" value="3.378.793"></td>
											</tr>
												<tr>
												<td><input type="text" class="form-control no-border" VALUE="SALDO KAS AWAL"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border" value="585.554.803"></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control no-border" VALUE="SALDO KAS AKHIR"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border"></td>
												<td><input type="text" class="form-control no-border" value="704.047.756"></td>
											</tr>


										
										
										
										
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- start: FOOTER -->
	<?php include 'include/footer.php'; ?>
	<!-- end: FOOTER -->
	<!-- start: OFF-SIDEBAR -->
	<?php include 'include/off-sidebar.php'; ?>
	<!-- end: OFF-SIDEBAR -->
	<!-- start: SETTINGS -->
	<?php include 'include/settings-panel.php'; ?>
	<!-- end: SETTINGS -->
</div>
<!-- start: MAIN JAVASCRIPTS -->
<?php include 'include/main-js.php'; ?>
<!-- start: JavaScript Event Handlers for this page -->
<script src="assets/js/index.js"></script>
<script>
	jQuery(document).ready(function() {
		Main.init();
		Index.init();
	});
</script>
<script>
	var textAreas = document.getElementsByTagName('textarea');

	Array.prototype.forEach.call(textAreas, function(elem) {
		elem.placeholder = elem.placeholder.replace(/\\n/g, '\n');
	});
</script>
<!-- end: JavaScript Event Handlers for this page -->
</body>
</html>